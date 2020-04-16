<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function GetPost()
    {
         $posts= Post::all();
        return view('post', compact('posts'));
    }

     
}
