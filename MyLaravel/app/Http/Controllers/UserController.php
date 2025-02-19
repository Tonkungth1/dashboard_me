<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
class UserController extends Controller
{
    function index(){
        $users = User::all();
        return view('user',['users' => $users]);
    }
    function edit($id){
         $user = User::find($id);
        return view('/edit_user',['user' => $user]);
    }
    function edit_user(Request $req){
        $user = User::find($req -> id);
        $user ->name = $req -> name;
        $user ->email = $req -> email;
        $user ->password = ($req -> password == null)?$user->password:$req ->password;
        $user ->save();
        return redirect('/user');
    }
    function delete(Request $req){
     User::find($req -> id)->delete();
        return redirect('/user');
    }
}
