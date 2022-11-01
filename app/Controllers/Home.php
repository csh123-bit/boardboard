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

        $validate = $this->validate([
            'user_id' => [
                'rules'=>'required',
                'errors'=> ['required'=>'아이디를 입력해 주세요.'],
            ],
            'user_name' => [
                'rules'=>'required',
                'errors'=> ['required'=>'이름을 입력해 주세요.'],
            ],
            'user_password' => [
                'rules'=>'required',
                'errors'=> ['required'=>'비밀번호를 입력해 주세요.'],
            ],
            'user_phonenumber' => [
                'rules'=>'required',
                'errors'=> ['required'=>'전화번호를 입력해 주세요.'],
            ],
            'user_address' => [
                'rules'=>'required',
                'errors'=> ['required'=>'주소를 입력해 주세요.'],
            ],
        ]);

        if(!$validate){
            return view('main\register');
        }else{
            $info =  $this->request->getPost();
            $password = password_hash($info['user_password'], PASSWORD_DEFAULT);
            $data = [
                'usr_id' => $info['user_id'],
                'usr_password' => $password,
                'usr_email' => $info['user_email'],
                'usr_phonenumber' => $info['user_phonenumber'],
                'usr_address' => $info['user_address'],
            ];
            
            $userModel = new UserModel();
            if($userModel->save($data)){
                return redirect()->to('/');;
            };
        }
    }
}
