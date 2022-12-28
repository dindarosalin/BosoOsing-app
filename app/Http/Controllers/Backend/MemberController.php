<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;  

class MemberController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view("home"
        //,['user'=> $user]
        );
    }


    public function admin()
    { 
    //     $users = User::all();
        $users = DB::table("users")->get();
        return view("admin/admin", [
            'users' => $users
        ]);
    }
}
