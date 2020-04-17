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
        $carte->dateExpiration=$req->prixFixe;
        $carte->category=$req->category;
        $carte->save();
         return redirect('carteb');
    }
     
     
}
