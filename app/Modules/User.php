<?php
namespace App\Modules;
use App\Models\UserModel;

class User{
    
    public function passwordCheck($info){
        $user = new UserModel();
        $user_info = $user->where('usr_id', $info['user_id'])->get()->getRowArray();
        if(!empty($user_info)){
            if(password_verify($info['user_password'], $user_info['usr_password'])){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}