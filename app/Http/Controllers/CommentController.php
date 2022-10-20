<?php

namespace App\Http\Controllers;

use App\Model\Comment;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
        $params = $this->validate($request, [
            'post_id' => 'required|integer',
            'content' => 'required|string',
            'to_uid'  => 'nullable|integer',
        ]);

        $loginUser = Auth::user();

        $params['from_uid'] = $loginUser->id;
        $params['from_username'] = $loginUser->username;
        if (!empty($params['to_uid'])) {
            $toUser = User::query()->find($params['to_uid']);
            $params['to_username'] = $toUser->username;
        }
        dd($params);

        Comment::query()->create($params);
        return redirect()->route('post.show', ['id' => $params['post_id']])->with('notice', '评论成功');
    }
}
