<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;
use Session;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
         $iduser=Auth::id();
         DB::table('posts')->where('id',$post->id)->update(['user_id'=>$iduser]);
         return redirect('vendre');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    function GetVente()
    {
            $user_id= Auth::id();
            $posts= DB::table('posts')
            ->join('users','posts.user_id','users.id')
            ->where('posts.user_id', $user_id)
            ->select('posts.*','users.*')
            ->get();
        return view('vente', compact('posts'));
    }
    
    public function delete($id)
    {

         Post::find($id)->delete();
        Session::flash('status', 'Votre item a été supprimé');
         return redirect('vendre');
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
         return redirect('vendre');
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
