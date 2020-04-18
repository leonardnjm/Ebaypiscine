<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Infos;
class InfosController extends Controller
{
    //
    function save(Request $reqInfo)
    {   
        $user= new User;
    	$info=new Infos;
    	$info->adresse= $reqInfo->adresse;
    	$info->ville=$reqInfo->ville;
    	$info->codePostal=$reqInfo->codePostal;
    	$info->pays=$reqInfo->pays;
    	$info->description=$reqInfo->description;
//    	$info->touch();
        $info->save();
        $iduser=Auth::id();
        DB::table('users')->where('id',$iduser)->update(['info_id'=>$info->id]);
        return redirect('/profile');
    }
    
    function update(Request $reqNewInfo)
    {
        
//        Infos::where('adresse',$reqNewInfo->adresse)->update(['ville'=>$reqNewInfo->ville]);
        
        $newInfo= Infos::find($reqNewInfo->adresse);
        $newInfo->ville=$reqNewInfo->ville;
    	$newInfo->codePostal=$reqNewInfo->codePostal;
    	$newInfo->pays=$reqNewInfo->pays;
    	$newInfo->description=$reqNewInfo->description;
        $newInfo->save();
                                          
//        return redirect('/profile');
    }
    
    function Get()
    {
        $infos= Infos::all();
        return view('info', compact('infos'));
        
    }
    
    function GetInfo()
    {
            $user_id= Auth::id();
            $user= User::find($user_id);
            $info_id= $user->info_id;
        $data= DB::table('infos')
            ->join('users','infos.id','users.info_id')
            ->where('infos.id', $info_id)
            ->select('infos.*','users.name','users.info_id')
            ->get();
        
//        echo "<pre>";
////        print_r($info_id);
//        print_r($data);
        return view('info', compact('data'));
    }
//    $user= new User;
//        $user_infoid= $user->info_id;
//        $data= DB::table('infos')->join('users', 'infos.id', '=', 'users.info_id')->where('infos.id','=','users.info_id')->select('infos.*')->get();
//        print_r($data);
//        return view('info', compact('data'));
}

