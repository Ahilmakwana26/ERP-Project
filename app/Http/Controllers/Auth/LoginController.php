<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Repositories\Entities\user;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/user';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        //The login page can be viewed only by guests (not logged-in users).
        //Only the logout method is exempted — logged-in users can log out anytime.
    }
    public function index(){
        return view('admin.user.login.login');
    }
    public function store(Request $request){
       try{
        $validator=Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
      
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
        $user=Auth::user();
        $token = Str::random(60);
        $user->login_token = $token;
        $user->save();

        session(['api_token' => $token]);
        return redirect()->route('user')
                ->with('success', 'Login successful!');
        }
        else{
          return redirect()->back()->withErrors(['Invalid email or password.'])->withInput();


    }
       }catch(\Exception $e){
        return [
            'success'=>false,
            'message'=>$e->getMessage(),
        ];
       }
        //session(['login_token']=>)
    }
}

