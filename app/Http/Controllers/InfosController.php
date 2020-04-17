<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infos;
class InfosController extends Controller
{
    //
    function save(Request $reqInfo)
    {   
        
    	$info=new Infos;
    	$info->adresse= $reqInfo->adresse;
    	$info->ville=$reqInfo->ville;
    	$info->codePostal=$reqInfo->codePostal;
    	$info->pays=$reqInfo->pays;
    	$info->description=$reqInfo->description;
//    	$info->touch();
        $info->save();
        return redirect('/profile');
    }
    
//    function
    
    function GetInfo()
    {
        $infos= Infos::all();
        return view('info', compact('infos'));
        
    }
}