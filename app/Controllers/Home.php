<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        return view('main\main');
    }

    public function register(){

        $user =  new UserModel();

        return view('main\register');
    }
}
