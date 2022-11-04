<?php
namespace App\Modules;
use App\Models\UserModel;

class User{
    
    public function passwordCheck($info){
        $user = new UserModel();
        $userInfo = $user->where('usr_id', $info['user_id'])->get()->getRowArray();
        if(!empty($userInfo)){
            $result = password_verify($info['user_password'], $userInfo['usr_password']);
            if($result){
                $session = session();
                $sessionData = [
                    'u_idx' => $userInfo['usr_idx'],
                    'u_id'  => $userInfo['usr_id'],
                    'u_name'=> $userInfo['usr_name'],
                    'u_level'=> $userInfo['usr_level'],
                ];
                $session->set($sessionData);
            }
            return $result;
        }else{
            return false;
        }
    }
}