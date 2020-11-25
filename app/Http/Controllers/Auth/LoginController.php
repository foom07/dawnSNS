<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/top';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            $data=$request->only('mail','password');
            // var_dump($data['mail']);
            // ログインが成功したら、トップページへ
            //↓ログイン条件は公開時には消すこと
            // if(Auth::attempt(['mail' => $data['mail'], 'password' => $data['password']])){
            if(Auth::attempt($data)){
                var_dump($data);
                return view('posts.index');
            }
            // var_dump($data);
            // return view('posts.index');
        }
        return view("auth.login");
    }
}
