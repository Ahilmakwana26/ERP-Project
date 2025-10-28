<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\UserRepository;
use App\Services\user\userservice;
use App\Repositories\Entities\user;

class UserController extends Controller
{
    protected $userservice;
    public function __construct(userservice $userservice){
        $this->userservice=$userservice;
    }
    public function index(){
      $users=user::all();
      return view('admin.user.user',compact('users'));
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
  public function edit($id){
    $user=user::find($id);
    return view('admin.user.edit',compact('user'));
  }
  public function update(Request $request,$id){
      $user=$this->userservice->update($request->all(),$id);
      if(isset($user['success'])&& $user['success']===false){
        return redirect()->back()->withErrors($user['message'])->withInput();
      }
      session()->flash('message',$user['message']);
      return redirect()->back();
  }
  public function destroy(Request $request,$id){

    $user=$this->userservice->delete($id);
    if(isset($user['success'])&& $user['success']===false){
      return redirect()->back()->withErrors($user['message'])->withInput();
    }
    session()->flash('message',$user['message']);
    
  }
}