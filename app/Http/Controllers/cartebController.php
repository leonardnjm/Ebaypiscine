<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cartes;
use Illuminate\Support\Facades\DB;



class cartebController extends Controller
{
   
          function save(Request $req)
    {


        $carte=new Cartes;
        $carte->numeroCarte= $req->numeroCarte;
        $carte->nomTitulaire=$req->nomTitulaire;
        $carte->dateExpiration=$req->dateExpiration;
        $carte->crypto=$req->crypto;
        $carte->save();
         return redirect('/profile');
    }
     
     
}
