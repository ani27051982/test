<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Carbon;
use Validator;
use Auth;
use App\constacl_single_users;

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

    use AuthenticatesUsers {
       username as username;
        //password as password;
    }
        
    

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
        
    
    protected function authenticated(Request $request, $user)
    {
        $user->loggeddata()->create(array("constacl_single_users_logged_in_time" => new Carbon));
        //dd();
        return redirect()->intended($this->redirectPath());
    }
    
    protected function credentials(Request $request)
    {
        //dd($request);
        return $request->only($this->username(), $this->password());
    }
    
    public function logout(Request $request)
    {
        if($this->guard()->check())
        {
           //dd($this->guard()->user()->constacl_single_users_id);
           //dd(constacl_single_users::find($this->guard()->user()->constacl_single_users_id)->first());
           constacl_single_users::find($this->guard()->user()->constacl_single_users_id)->loggeddata()->latest('constacl_single_users_logged_data_id')->take(1)->update(array("constacl_single_users_logged_out_time" => new Carbon));
           //constacl_single_users::where("constacl_single_users_id","=",$this->guard()->user()->constacl_single_users_id)->first()->loggeddata()->latest('constacl_single_users_logged_data_id')->take(1)->update(array("constacl_single_users_logged_out_time" => new Carbon));
            
        }
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect('/')->with("vmessage","You are logged out");
    }
    
    protected function guard()
    {
        return Auth::guard('users');
    }
    
    
}
