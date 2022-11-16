<?php

namespace App\Controllers\Board;

use App\Controllers\Admin\AdminController;

class Main extends AdminController
{
    public function index()
    {
        
        return view('/admin/board/main');
    }
}
