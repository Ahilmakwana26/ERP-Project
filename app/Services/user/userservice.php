<?php

namespace App\Services\user;

use App\Repositories\Contracts\UserRepository;
use Illuminate\Support\Facades\Validator;
use App\Repositories\Entities\user;
use Illuminate\Support\Facades\Hash;
class userservice
{
    protected $userrepo;
    public function __construct(UserRepository $userrepo){
        $this->userrepo=$userrepo;
    }
    public function userlist(){

        return "Hello Ahil Now use have start making for ERP system";
    }


    public function store($request)
    {
        try{
      $validated=Validator::make($request,[
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required',
        'authorize_type' => 'required|in:otp,key,both,none',
        'mobile_no' => 'required',
        'office_no' => 'required',
        'status' => 'required|in:Active,Inactive',
        'role_name' => 'required',
      ]);
        if($validated->fails()){
            return [
                'success' => false,
                'message' => $validated->errors()
            ];        
        }
   
    // $user_permission=[];
    // if ($request->has('user_permission')) {
    //     if (is_array($request->user_permission)) {
    //         $user_permission = $request->user_permission;
    //     } else {
    //         $user_permission = array_map('trim', explode(',', $request->user_permission));
    //     }
    // }
        if(isset($request['user_permission'])){
            $userPermission=implode(',',$request['user_permission']);
        }
    $data=[
        'company_id'=>1,
        'role'=>$request['role_name'],
        'name'=>$request['name'],
        'email'=>$request['email'],
        'password'=>Hash::make($request['password']),
        'authorize_type'=>$request['authorize_type'],
        'mobile_no'=>$request['mobile_no'],
        'office_no'=>$request['office_no'],
        'status'=>$request['status'],
        'user_permission'=>$userPermission,
    ];
    
    $user = $this->userrepo->create($data);
    return [
        'success'=>true,
        'message'=>'user created successfully',
        'data'=>$user,
    ];
    }
    catch(\Exception $e){
        return [
            'success'=>false,
            'message' => $e->getMessage(),
        ];
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