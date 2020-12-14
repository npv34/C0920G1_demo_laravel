<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $posts = Post::all();
        return view('front-end.home', compact('posts'));
    }

    function showDetailPost($id)
    {
        $post = Post::find($id);
        if (!session()->has('post-' . $post->id)) {
            session()->put('post-' . $post->id, 0);
        }

        $currentTotalViewPost = session('post-' . $post->id);
        $currentTotalViewPost++;

        session()->put('post-' . $post->id, $currentTotalViewPost);

        return view('front-end.posts.detail', compact('post'));
    }
}
