<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;
use App\Offre;
use Carbon\Carbon;

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
        $offres= DB::table('offres')
            ->join('posts','offres.post_id','posts.id_post')
            ->get();
            $posts= DB::table('posts')
            ->join('users','posts.user_id','users.id')
            ->select('posts.*','users.*')
            ->get();
        return view('post', compact('posts','offres'));
    }
    
    function GetOffre($title)
    {
            $user_id= Auth::id();
            $posts= DB::table('posts')
            ->join('users','posts.user_id','users.id')
            ->join('offres','posts.title','offres.post_title')
            ->where('posts.title',$title)
            ->where('offres.user_id',$user_id)
            ->get();
        return view('offre', compact('posts'));
    }
    
     function modifEnchere(Request $req, $title)
     {
         $valeur=Post::select('prixVariable')->where('title',$title)->get();
         if($valeur < $req->prixVariable){
          $user_id=Auth::id();
          $post= DB::table('posts')->where('title',$title)->update(['prixVariable'=>$req->prixVariable,'user_e'=>$user_id]);         
            return redirect('/post/'.$title);}
         else {return redirect('/post/'.$title);}
         
     }
    
    function modifNego(Request $req, $title)
     {
          $user_id=Auth::id();
          $offresincre= DB::table('offres')->increment('nbNego');
          $offre= DB::table('offres')->where('post_title',$title)->update(['prixNego'=>$req->prixNego]);         
            return redirect('/post/offres/'.$title);
     }
    
     function save(request $req,$title)
     {
         $offre= new Offre;
         $user=Auth::id();
         $offre->prixNego=$req->prixNego;
         $offre->save();
         $offre=DB::table('offres')->orderBy('offres.id', 'desc')->first();
         $offre_id=$offre->id;
         $post_id= DB::table('posts')->where('title',$title)->select('id_post')->get();
         $offres = DB::table('offres')->where('id',$offre_id)->update(['user_id'=>$user,'post_title'=>$title]);
         
        return redirect('/post/offres/'.$title);
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
    
    function PrixTotal()
    {
        $user_id=Auth::id();
        $prixF= DB::table('posts')
            ->where('panier_id', $user_id)
            ->sum('prixFixe');
        $prixV= DB::table('posts')
            ->where('panier_id', $user_id)
            ->sum('prixVariable');
        $prix=$prixF + $prixV;
        return view('payer', compact('prix'));
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
          $post = DB::table('posts')
              ->join('users','posts.user_id','users.id')
              ->where('title',$title)->get();
         
          return view('view', compact('post'));
    }
     
     
//     function timer()
//     {
////          $to= DB:table('posts')->;
//          $from =Carbon::tomorrow();
////          $diff_in_hours = $to->diffInHours($from);
//             
//}
     
}
