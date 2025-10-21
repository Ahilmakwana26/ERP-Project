<?php

namespace App\Services\user;

use App\Repository\Contracts\UserRepository;
use App\Repository\Entities\User;

class userservice
{
    public function userlist(){

        return "Hello Ahil Now use have start making for ERP system";
    }


    public function createUser(array $userData)
    {
      
        // $user = User::create([
        //     'name' => $userData['name'],
        //     'email' => $userData['email'],
        //     'password' => bcrypt($userData['password']), // Hash the password
        // ]);

        // return $user;
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