<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Password;
use CommonHelper;
use App\constacl_single_users;
use Auth;
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:users');
    }
    
     protected function broker()
    {
      return Password::broker('authusers');
    }

    public function showResetForm(Request $request, $token = null)
    {
       //dd($request->email);
        $paswordtoken = $token;
        
        $paswordtoken=explode('::',$paswordtoken);
        
        $token = CommonHelper::encrip_password($paswordtoken[0],"d");
        
        $email = CommonHelper::encrip_password($paswordtoken[1],"d");
        //echo $paswordtoken[0]."<br>".$paswordtoken[1];
        if($email && $token)
        {
            $check = $this->broker()->getUserForPasswordReset($email);
            //echo $check;
            if($check)
            {
            //$paswordtoken=explode('::',$paswordtoken);
            //$check = $this->broker()->validateUser($paswordtoken);
            //$check = constacl_single_users::where('constacl_single_users_forget_password_link',"=", Hash::make($paswordtoken))->where('constacl_single_users_forget_password_link',"<>", "")->where('constacl_single_users_forget_password_link_expiration_time', "<>", '1970-01-01 00:00:00')->where('constacl_single_users_forget_password_requested',"=", '1')->where('constacl_single_users_forget_password_link_status',"=", '1')->first();
            //if($check){
                return view('frontend.passwordreset')->with(
                    ['token' => $token, 'email' => $email]
                );
            }
            else {
                return view('frontend.passwordresetexpired')->withErrors(
                    ['tokenexpired' => "Token Already Expired"]
                );
            }
        }
        else
        {
            return view('frontend.passwordresetexpired')->withErrors(
                    ['tokenexpired' => "Invalid Token"]
                );
        }
    }
    
    public function userEmail()
    {
        return 'constacl_single_users_email';
    }
    
    public function userPassword()
    {
        return 'constacl_single_users_password';
    }
    
    public function reset(Request $request)
    {
        $request->validate($this->rules(), $this->validationErrorMessages());
        
        $flag = false;
        
        $checkoldpassword = constacl_single_users::where('constacl_single_users_email',"=",$request->constacl_single_users_email)->first()->passwords()->latest('constacl_single_users_password_created_at')->take(3)->get();
        //$checkoldpassword = $checkoldpassword
        //dd($checkoldpassword->count());
       if($checkoldpassword->count() > 0){
            
            foreach ($checkoldpassword as $old) {
                   if($old->constacl_single_users_password == CommonHelper::encrip_password($request->constacl_single_users_password,"e")) {
                       $flag = true;
                        break;
                    }
            }
            if($flag){
               return $this->sendResetPasswordUsedResponse($request); 
            }
            
       }
        
        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $response == Password::PASSWORD_RESET
                    ? $this->sendResetResponse($request, $response)
                    : $this->sendResetFailedResponse($request, $response);
    }
    
    protected function rules()
    {
        return [
            'token' => 'required',
            $this->userEmail() => 'required|email',
            $this->userPassword() => 'required|confirmed|min:6',
        ];
    }

    /**
     * Get the password reset validation error messages.
     *
     * @return array
     */
    protected function validationErrorMessages()
    {
        return [$this->userEmail().".required" => "Email is required",$this->userEmail().".email" => "Email should in email format", $this->userPassword().".required" => 
            "Password is required", $this->userPassword().".confirmed" => "Password and Confirmed password should be same", $this->userPassword().".min" => "Password length should me min of 6 characters"
            ];
    }
    
    protected function credentials(Request $request)
    {
        return $request->only(
            'constacl_single_users_email', 'constacl_single_users_password', 'constacl_single_users_password_confirmation', 'token'
        );
    }
      
    protected function sendResetResponse(Request $request, $response)
    {
        return redirect($this->redirectPath())
                            ->with('status', trans($response));
    }

    /**
     * Get the response for a failed password reset.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    protected function sendResetFailedResponse(Request $request, $response)
    {
        return redirect()->back()
                    ->withInput($request->only('constacl_single_users_email'))
                    ->withErrors(['constacl_single_users_email' => trans($response)]);
    }
    
    protected function sendResetPasswordUsedResponse(Request $request)
    {
        return redirect()->back()
                    ->withInput($request->only('constacl_single_users_email'))
                    ->withErrors(['constacl_single_users_password' => "This Password is already used, please enter the password which is not used in last three attempts"]);
    }
    
    protected function resetPassword($user, $password)
    {
        
        $user->constacl_single_users_password = CommonHelper::encrip_password($password,"e");
        $user->constacl_single_users_updated_at = new Carbon;
        //$user->setRememberToken(Str::random(60));

        $user->save();
        
        $user->passwords()->update(array("constacl_single_users_password_status" => "0"));
        
        $user->passwords()->create(array("constacl_single_users_password" => $user->constacl_single_users_password, "constacl_single_users_password_status" => "1", "constacl_single_users_password_created_at" => Carbon::now()));

        event(new PasswordReset($user));

        $this->guard()->login($user);
    }
    
    protected function guard()
    {
        return Auth::guard('users');
    }
}
