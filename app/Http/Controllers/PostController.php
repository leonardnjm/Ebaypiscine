<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\User;
use Session;
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
        $post->typeVente=$req->typeVente;
        $post->save();
        $req->session()->flash('status', 'Votre item a été ajouté');
         return redirect('vente');
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
            public function GetVente()
    {

    
         $posts= Post::all();
         
        return view('vente', compact('posts'));
    }
    public function delete($id)
    {

         Post::find($id)->delete();
        Session::flash('status', 'Votre item a été supprimé');
         return redirect('vente');
    }
    public function edit($id){

        $data=Post::find($id);
        return view('updatepost',['data'=>$data]);
    }

     

    public function update(Request $req)
    {


        $post= Post::find($req->id);
        $post->title= $req->title;
        $post->description=$req->description;
        $post->prixFixe=$req->prixFixe;

        $post->slug=$req->slug;
        $post->category=$req->category;
        $post->typeVente=$req->typeVente;
        $post->save();
                Session::flash('status', 'Votre item a été modifié');
         return redirect('vente');
    }








 /*    function index()
     {
          $posts=DB::table('posts')
               ->join('users','posts.user_id','=','users.id')
            //   ->where('posts.user_id','users.id')
               //->where('posts.id',0)
             //  ->select('users.name')
               ->get();
          
     //     echo "<pre>";  
     //     print_r($posts);
          return view('post',compact('posts'));
          
    
     }
*/
     
}
