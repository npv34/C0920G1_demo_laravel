<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function create() {
        // lay toan bo categories truyen sang view
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    function store(Request $request) {
        $post = new Post();
        $post->title = $request->title;
        $post->desc = $request->desc;
        $post->category_id = $request->category_id;
        $post->content = $request->contentPost;
        $post->user_id = auth()->user()->id;
        $post->save();
    }

    function showList() {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
}
