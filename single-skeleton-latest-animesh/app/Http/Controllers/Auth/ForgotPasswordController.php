<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Validation\Rule;
use Validator;
use Password;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:users');
    }
    
    public function showLinkRequestForm()
    {
        return view('frontend.passwordemail');
    }
    
    public function userEmail()
    {
        return 'constacl_single_users_email';
    }
    
    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->broker()->sendResetLink(
            $request->only($this->userEmail())
        );

        return $response == Password::RESET_LINK_SENT
                    ? $this->sendResetLinkResponse($request, $response)
                    : $this->sendResetLinkFailedResponse($request, $response);
    }
    
    protected function validateEmail(Request $request)
    {
        $messages = array($this->userEmail().".required" => "Email is required",$this->userEmail().".email" => "Email should in email format");
        $validator = Validator::make(
			$request->all(),
			[
					$this->userEmail() => 'required|email'
					
			],
			$messages
			)->validate();
    }
    
    public function broker()
    {
        return Password::broker('authusers');
    }
}
