<?php

namespace App\Controllers\Admin;

use App\Models\UserModel;
use App\Modules\User;

class Admin extends AdminController
{
    public function index()
    {
        $validate = $this->validate([
            'user_id' => [
                'rules'=>'required',
                'errors'=> ['required'=>'아이디를 입력해 주세요.'],
            ],
            'user_password' => [
                'rules'=>'required',
                'errors'=> ['required'=>'비밀번호를 입력해 주세요.'],
            ],
        ]);
        if(!$validate){
            return view('/admin/main/login');
        }else{
            $info = $this->request->getPost();
            if($info){
                $user = new User();
                $passResult = $user->passwordCheck($info);
                if($passResult&&$_SESSION['u_manager']){
                    $data['menu'] = $this->menu;
                    return view('/admin/main/main', $data);
                }
            }
            echo '<script>alert("아이디나 비밀번호가 틀렸습니다.");
                window.location.href = "/admin/admin";
                </script>';
        }
    }

    public function login(){
        return view('admin\main\login');
    }

    public function logout(){
        $user = new User();
        $user->sessionClear();

        return view('admin\main\login');
    }

}
