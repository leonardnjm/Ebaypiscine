<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchatsPublicController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest');
    }
    
     public function GetPost()
    {

    
         $posts= DB::table('posts')
            ->join('users','posts.user_id','users.id')
            ->select('posts.*','users.*')
            ->get();
         
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
}
