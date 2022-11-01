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
            'user_phone' => [
                'rules'=>'required',
                'errors'=> ['required'=>'전화번호를 입력해 주세요.'],
            ],
            'user_addressr' => [
                'rules'=>'required',
                'errors'=> ['required'=>'주소를 입력해 주세요.'],
            ],
        ]);

        if(!$validate){

        }else{
            
        }

        return view('main\register');
    }
}
