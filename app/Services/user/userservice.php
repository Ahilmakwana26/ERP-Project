<?php

namespace App\Services\user;

use App\Repository\Contracts\UserRepository;
use App\Repository\Entities\User;
use Illuminate\Support\Facades\Validator;

class userservice
{
    public function userlist(){

        return "Hello Ahil Now use have start making for ERP system";
    }


    public function store($request)
    {
      $validated=Validator::make($request,[
        'name'=>'required',
        'email'=>'required',
        'password'=>'required',
        'confirm_password'=>'required|confirmed',
        'authorize_type'=>'required|in:otp,key,both,none',
        'mobile_no'=>'required',
        'office_no'=>'required',
        'status'=>'reuired|in:Active,Inactive',
        'role_name'=>'required'
      ]);
        if($validated->fails()){
            return redirect()->back()->withErrors($validated)->withInput();
        }

    }

    public function updateUser(User $user, array $userData)
    {

        // $user->update([
        //     'name' => $userData['name'] ?? $user->name,
        //     'email' => $userData['email'] ?? $user->email,
        //     // Only update password if provided
        //     'password' => isset($userData['password']) ? bcrypt($userData['password']) : $user->password,
        // ]);

        // return $user;
    }
}
?>