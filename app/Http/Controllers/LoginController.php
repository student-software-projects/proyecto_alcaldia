<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function form_login(){
     return view('modules.auth.form_login');
    }

    public function auth(){

    }
    //
}
