<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;

class RolesController extends Controller
{
    function GetRole()
    {
            $user_id= Auth::id();
            $user= User::find($user_id);
            $role_id= $user->role_id;
        $role= DB::table('roles')
            ->join('users','roles.id','users.role_id')
            ->where('roles.id', $role_id)
            ->select('roles.*','users.*')
            ->get();
//        print_r($data);
        return view('info',compact('role'));
    }
}
