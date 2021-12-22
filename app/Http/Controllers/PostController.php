<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('/dashboard', compact('post'));
    }
    public function show(Post $id)
    {
        return view('/show', compact('id'));
    }
    public function category(Category $id)
    {
        $category = Category::all();
        return view('/category', compact('id'));
    }
}