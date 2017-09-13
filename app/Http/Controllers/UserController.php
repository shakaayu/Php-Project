<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }
//    public function adduser(){
//        echo "user add";
//    }

}
