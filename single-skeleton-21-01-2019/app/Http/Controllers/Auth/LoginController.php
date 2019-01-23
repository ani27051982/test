<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        //echo Auth::guard($this->guard())->check();
        //$this->middleware('guest')->except('logout');
        $this->middleware('guest:users')->except('logout');
    }
    
    public function showLoginForm()
    {
        return view('frontend.login');
    }
    
    public function username()
    {
        return 'constacl_single_users_userid';
    }
    
    public function password()
    {
        return 'constacl_single_users_password';
    }
    
    protected function validateLogin(Request $request)
    {
        $messages = array($this->username().".required" => "User name is required",$this->username().".email" => "User name should in email format",$this->password().".required" => "Password is required");
        $validator = Validator::make(
			$request->all(),
			[
					$this->username() => 'required|email',
					$this->password() => 'required',
			],
			$messages
			)->validate();
    }
    
    public function doLogin(Request $request)
    {
        $this->validateLogin($request);
        if($this->guard()->attempt($this->credentials($request))){
            return $this->sendLoginResponse($request);
            //$this->authenticated($request, $this->guard()->user());
        }
        else {
            return redirect()->intended('/')->with("vmessage","Incorrect login lnformation, please enter valid information.");
            //redirect('/')->with("vmessage","Incorrect login lnformation, please enter valid information.");
        }
    }
    
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);
        //dd(auth()->user());
        return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended($this->redirectPath());
    }
    
    protected function authenticated(Request $request, $user)
    {
        //dd(auth()->user());
        return redirect()->intended($this->redirectPath());
    }
    
    protected function credentials(Request $request)
    {
        return $request->only($this->username(), $this->password());
    }
    
    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect('/')->with("vmessage","You are logged out");
    }
    
    protected function guard()
    {
        return Auth::guard('users');
    }
    
    
}
