<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::query()->with('category')->findOrFail($id);
        $comments = $post->comments()->orderBy('id', 'desc')->get();
        $headerImage = $post->header_image ? 
            Storage::disk('admin')->url($post->header_image) : '';
        return view('post.show', compact('post', 'comments','headerImage'));
    }

    public function categories()
    {
        $categories = Category::query()->with('posts')->get();
        return view('post.category', compact('categories'));
    }

    public function categoryPost($name, $id)
    {
        $category = Category::query()->findOrFail($id);
        $posts = Post::query()
            ->where('cate_id', $category->id)
            ->orderBy('id', 'desc')->simplePaginate(10);
        $title = $category->name;
        
        return view('post.list', compact('posts', 'title'));
    }
}
