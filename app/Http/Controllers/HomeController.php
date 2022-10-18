<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::query()
            ->with('category')
            ->orderBy('id', 'desc')->simplePaginate(1);
        $title = 'slogn';
        $subTitle = 'ss';
        return view('posts.list', compact('posts', 'title','subTitle'));
    }
}
