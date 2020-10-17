<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsCategoriesController extends Controller
{
    public function show(Post $post)
    {
        return view('blog.posts-categories.show')->with('post', $post);
    }
}
