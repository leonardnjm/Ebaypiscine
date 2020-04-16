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
    	$user->nom= $req->nom;
    	$user->description=$req->description;
    	$user->prix=$req->prix;
    	 $user->save();
    }
}
