<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class PagesController extends Controller
{
    public function showCategories($id) 
    {
        $category_posts = Post::where('category_id', $id)->get();
        return view('pages.categories')
            ->with('posts', $category_posts)
            ->with('categories', Category::all())
            ->with('tags', Tag::all());
    }

    public function about()
    {
        return view('pages.about');
    }
}
