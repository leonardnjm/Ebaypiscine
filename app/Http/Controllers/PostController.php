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
     function save(Request $req)
    {
        //print_r($req->input());
        $post=new Post;
        $post->title= $req->title;
        $post->description=$req->description;
        $post->prixFixe=$req->prixFixe;
        $post->slug=$req->slug;
         $post->save();
         return redirect('post');
    }
  
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
