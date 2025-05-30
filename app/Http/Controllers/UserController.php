<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;    //to hash password  
class UserController extends Controller
{
    function register(Request $req)
    {
        $user= new User;
        $user->name= $req->input('name');
        $user->email= $req->input('email');
        $user->password= Hash::make($req->input('password'));
        $user->save();
        return $user;
    }
    function login(Request $req)
    {
        $user= User::where('email', $req->email) ->first();
        if($user && Hash::check($req->password, $user->password))
        {
            return $user;
            // return response()->json(['message' => 'Login successful', 'user' => $user]);
        }
            return response()->json(['message' => 'Invalid credentials'], 401);
    }
}
 

