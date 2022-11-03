<?php

namespace App\Controllers\Admin;

use App\Models\UserModel;

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
                $user = new UserModel();
                $user_info = $user->where('usr_id', $info['user_id'])->get()->getRowArray();
                if(!empty($user_info)){
                    if(password_verify($info['user_password'], $user_info['usr_password'])){
                        $data['menu'] = $this->menu;
                        return view('/admin/main/main', $data);
                    }else{
                        echo 'password wrong';
                        exit();
                    }
                }else{
                    echo 'id not exist';
                    exit();
                }
            }
            return view('/admin/main/login');
        }
    }

    public function login(){
        return view('admin\main\login');
    }

}
