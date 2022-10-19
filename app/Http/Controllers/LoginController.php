<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Socialite;

class LoginController extends Controller
{
    /**
     * 将用户重定向到 GitHub 的授权页面
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        Auth::login(User::first());
        return redirect('/');
        return Socialite::driver('github')->redirect();
    }

    /**
     * 从 GitHub 获取用户信息
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->stateless()->user();

        Log::info('GITHUB_INFO', [$user]);
        $loginUser = User::query()->updateOrCreate([
            'auth_type' => User::AUTH_TYPE_GITHUB,
            'auth_id'   => $user->getId(),
        ],[
            'username' => $user->getName(),
            'avatar'   => $user->getAvatar(),
        ]);
        Auth::login($loginUser);
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
