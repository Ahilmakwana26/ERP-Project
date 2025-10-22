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
}
