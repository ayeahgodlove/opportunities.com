<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('pages.index');
    }

    public function about(){
        $title = "Welcome to the About us page";
        return view('pages.about')->with('title',$title);
    }

}
