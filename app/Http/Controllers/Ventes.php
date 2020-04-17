<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User2;
class Ventes extends Controller
{
    //
    function save(Request $req)
    {
    	//print_r($req->input());
    	$user=new User2;
    	$user->title= $req->title;
    	$user->description=$req->description;
    	$user->prixFixe=$req->prixFixe;
        $user->slug=$req->slug;
    	 $user->save();
         return redirect('post');
    }
}
