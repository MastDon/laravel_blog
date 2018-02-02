<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts=Post::paginate(2);
        return view('pages.index',['posts'=> $posts]);
    }
}
