<?php

namespace App\Controllers\Admin\Admin;
use App\Controllers\Admin\AdminController;

class Admin extends AdminController
{
    public function index()
    {
        return view('admin\main\main');
    }
}
