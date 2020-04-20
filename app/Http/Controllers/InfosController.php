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
//        $user= new User;
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
    
    function Add($id)
    {
        Auth::user()->where('id',$id)->update(['role'=>'AAA']);
        return redirect('/profile');
    }
    
    function GetInfo()
    {
            $user_id= Auth::id();
            $user= User::find($user_id);
            $info_id= $user->info_id;
            $role_id= $user->role_id;
        $data= DB::table('infos')
            ->join('users','infos.id','users.info_id')
            ->where('infos.id', $info_id)
            ->select('infos.*','users.*')
            ->get();
        $role= DB::table('roles')
            ->join('users','roles.id','users.role_id')
            ->where('roles.id', $role_id)
            ->select('roles.*','users.*')
            ->get();
        return view('info', compact('data','role'));
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }

}
