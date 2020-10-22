<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class PagesController extends Controller
{
    //
    public function jobs()
    {
        $posts = Post::where('category_id', '=', 1)->get();
        return view('pages.jobs')
        ->with('posts', $posts)
        ->with('categories', Category::all())
        ->with('tags', Tag::all());
    }

    public function scholarships()
    {
        $posts = Post::where('category_id', '=', 2)->get();
        return view('pages.scholarships')
        ->with('categories', Category::all())
        ->with('posts', $posts)
        ->with('tags', Tag::all());
    }

    public function competitions()
    {
        $posts = Post::where('category_id', '=', 3)->get();
        return view('pages.competitions')
        ->with('categories', Category::all())
        ->with('posts', $posts)
        ->with('tags', Tag::all());
    }

    public function miscellaneous()
    {
        return view('pages.miscellaneous')
        ->with('categories', Category::all())
        ->with('posts', Post::all())
        ->with('tags', Tag::all());
    }
}
