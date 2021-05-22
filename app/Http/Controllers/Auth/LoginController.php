<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function login(Request $request){

        $email = $request->email;
        $password = $request->password;

        // dd(md5($password));

        $user = User::where('email',$email)->first();

            if (isset($user)) {
                // if ($user->verify_account == 0) {
                //     return back()->with('error','Please Verify Your account first by checking your email account');
                
                // }
                if(Auth::attempt(['email'=>$email,'password' => $password])){

                    $auth_id = Auth::id();

                    $user = User::findorfail($auth_id);

                    if ($user->role == 'admin') {
                        return redirect()->route('home');
                    }else{

                        return redirect()->route('frontend.home');
                        
                    }
                
                }else{
                    return back()->with('error','Email or password does not match');
                }
            }else{
            return back()->with('error','Email or password does not match');
            }

        
        


    }

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
