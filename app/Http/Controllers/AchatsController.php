<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;

class AchatsController extends Controller
{    
    public function ajout($title)
    {
        $user_id= Auth::id();
        DB::table('posts')->where('title',$title)->update(['panier_id'=>$user_id]);
        return redirect('/post/'.$title);
    }
    
    function GetPost()
    {
            $user_id= Auth::id();
            $posts= DB::table('posts')
            ->join('users','posts.user_id','users.id')
            ->select('posts.*','users.*')
            ->get();
        return view('post', compact('posts'));
    }
    
    public function GetPanier()
    {
        $user_id= Auth::id();
         $posts= DB::table('posts')
            ->join('users','posts.panier_id','users.id')
            ->where('posts.panier_id', $user_id)
            ->select('posts.*','users.*')
            ->get();
        return view('panier', compact('posts'));
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
    
    public function GetSinglepost($title)
    {
          $post = DB::table('posts')->where('title',$title)->get();
         
          return view('view', compact('post'));
    }
     
     function modifEnchere(Request $req, $title)
     {
          
          $post= DB::table('posts')->where('title',$title)->update(['prixVariable'=>$req->prixVariable]);
//          $newpost= DB::table('posts')->get();
//          print_r($title);
         
            return redirect('/post/'.$title);
     }
     
     
}
