<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\UserRepository;
use App\Services\user\userservice;

class UserController extends Controller
{
    protected $userservice;
    public function __construct(userservice $userservice){
        $this->userservice=$userservice;
    }
    public function index(){
      return view('admin.user.user');
    }
    public function create(){
      return view('admin.user.create');
    }
    public function store(Request $request){

    $user= $this->userservice->store($request->all());
    if (isset($user['success']) && $user['success'] === false) {
      return redirect()->back()->withErrors($user['message'])->withInput();
    }
    session()->flash('message', 'User created successfully!');
    return redirect()->back();
}
}