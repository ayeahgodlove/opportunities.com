<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Carousel;
use App\Models\Tag;

class WelcomeController extends Controller
{
    public function index(){
        $search = request()->query('search');
        if($search)
        {
            $posts = Post::where('title', 'LIKE', "%{$search}%")->simplePaginate(4);
        }
        else {
            $posts = Post::simplePaginate(4);
        }
        return view('pages.index')
        ->with('categories', Category::all())
        ->with('tags', Tag::all())
        ->with('carousel', Carousel::all())
        ->with('posts', $posts)
        ;
    }
}