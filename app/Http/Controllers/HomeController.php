<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $res = decrypt('eyJpdiI6IlU1NHNhSU9HTjgrcC9uTGpEUDFHK1E9PSIsInZhbHVlIjoiQTU1OWVQcHZyRVR3L1NEUkpBcm00K2M5eXF5aHNRMGcwVWc0Um4velFRbUUwbVlyN01UY2MzdE9mQ2tHTjdNY2RUUTBUWDF1Zk0vUWpUM2wvNzZtVWZERkR3b0c4WU5OUEF6TFZ2UUhFWHMwWExiTXdOdHlhQkZ0TGE3Z2JTLzUiLCJtYWMiOiI0NzU0NjljNmRhNjlmYTBmZWYxZDcxZjVkOGU1MGIyZjBlMGJkN2RkZWFjZWFkZDA4NWI4NzM3MmYzNWYyOWM0In0=', false);
        dd($res);
        $posts = Post::query()
            ->with('category')
            ->orderBy('id', 'desc')->simplePaginate(10);
        return view('post.list', compact('posts'));
    }
}
