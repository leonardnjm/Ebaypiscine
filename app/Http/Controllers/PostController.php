<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     function save(Request $req)
    {


        $post=new Post;
        $post->title= $req->title;
        $post->description=$req->description;
        $post->prixFixe=$req->prixFixe;

        $post->slug=$req->slug;
        $post->category=$req->category;
        $post->save();
         return redirect('post')->with('success','votre objet a été ajouté');
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
 public function GetMusee()
    {
        
    
         $posts= Post::where('category','Bon pour le musée')->get();
         
        return view('post', compact('posts'));
    }
     public function GetVip()
    {
        
    
         $posts= Post::where('category','Vip')->get();
         
        return view('post', compact('posts'));
    }

 public function GetFeraille()
    {
        
        
         $posts= Post::where('category','ferraille ou trésor')->get();
         
         return view('post', compact('posts'));
        
    }
     public function GetSinglepost()
    {
        
        
         $posts= Post::all();
         
         return view('post', compact('posts'));
        
    }

     
}
