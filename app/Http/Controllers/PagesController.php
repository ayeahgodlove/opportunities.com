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
        return view('pages.jobs')
        ->with('categories', Category::all())
        ->with('posts', Post::all())
        ->with('tags', Tag::all());
    }

    public function scholarships()
    {
        return view('pages.scholarships')
        ->with('categories', Category::all())
        ->with('posts', Post::all())
        ->with('tags', Tag::all());
    }

    public function competitions()
    {
        return view('pages.competitions')
        ->with('categories', Category::all())
        ->with('posts', Post::all())
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
