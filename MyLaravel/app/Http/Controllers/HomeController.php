<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __construct(){
    $user =  session()->get('user');
    if(!isset($user)){
        return redirect("/login");
    }
    }
    function index (){
        return view('home');
    }
}
