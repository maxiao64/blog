<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::query()->with('category')->findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function categories()
    {
        $categories = Category::query()->get();
        return view('posts.category', compact('categories'));
    }

    public function categoryPost($name, $id)
    {
        $category = Category::query()->findOrFail($id);
        $posts = Post::query()
            ->where('cate_id', $category->id)
            ->orderBy('id', 'desc')->simplePaginate(1);
        $title = $category->name;
        
        return view('posts.list', compact('posts','title'));
    }
}
