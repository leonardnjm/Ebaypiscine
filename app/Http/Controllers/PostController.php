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
        $image= $req->file('image');
        $imagenom= time(). '.' . $image->getClientOriginalExtension();
        $imagepath = public_path('/images/');
        $image->move($imagepath,$imagenom);
        $post->image='/images/'.$imagenom;
        $post->description=$req->description;
        $post->prixFixe=$req->prixFixe;
        $post->prixMax=$req->prixMax;
        $post->category=$req->category;
         $id_post= $post->id_post;
        $post->typeVente=$req->typeVente;
        $post->save();
        $req->session()->flash('status', 'Votre item a été ajouté');
         $iduser=Auth::id();
         DB::table('posts')->where('title',$post->title)->update(['user_id'=>$iduser]);
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
    
    public function delete($id_post)
    {
        Post::where('id_post',$id_post)->delete();
        Session::flash('status', 'Votre item a été supprimé');
        return redirect('vendre');
    }
    
    public function edit($id_post){

        $data=DB::table('posts')->where('id_post',$id_post)->get();
        return view('updatepost',['data'=>$data]);
    }

     

    public function update(Request $req)
    {
        $id_post=$req->id_post;
        $post= DB::table('posts')->where('id_post',$id_post)->update(['title'=>$req->title,'description'=>$req->description,'prixFixe'=>$req->prixFixe,'category'=>$req->category,'typeVente'=>$req->typeVente]);
                Session::flash('status', 'Votre item a été modifié');
         return redirect('vendre');
    }     
}
