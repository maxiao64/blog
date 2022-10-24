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
            ->orderBy('id', 'desc')->simplePaginate(10);
        return view('post.list', compact('posts'));
    }
}
