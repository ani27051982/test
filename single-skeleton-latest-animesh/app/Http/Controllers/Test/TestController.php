<?php
namespace App\Http\Controllers\Test;
use App\Http\Controllers\Controller;
use DB;
use Mail;
use Config;
date_default_timezone_set("Asia/Calcutta");
class TestController extends Controller
{

	public function __construct()
	{	
		$this->middleware('guest');
		//$this->url = $url;
               //dd(Config::get("mail")); 
                $getmailinfo = DB::table("constacl_single_config")->where("constacl_single_config_category","=","Mail")->get();
							
		if($getmailinfo->count() > 0)
		{
			foreach ($getmailinfo as $mailinfo)
			{
				if($mailinfo->constacl_single_config_attribute_title=="Mail Driver")
				{
					$mail_driver = $mailinfo->constacl_single_config_attribute_value;
				}
				
				if($mailinfo->constacl_single_config_attribute_title=="Mail Host")
				{
					$mail_host = $mailinfo->constacl_single_config_attribute_value;
				}
				
				if($mailinfo->constacl_single_config_attribute_title=="Mail Port")
				{
					$mail_port = $mailinfo->constacl_single_config_attribute_value;
				}
				
				if($mailinfo->constacl_single_config_attribute_title=="Mail Username")
				{
					$mail_username = $mailinfo->constacl_single_config_attribute_value;
				}
				
				if($mailinfo->constacl_single_config_attribute_title=="Mail Password")
				{
					$mail_password = $mailinfo->constacl_single_config_attribute_value;
				}
				
				if($mailinfo->constacl_single_config_attribute_title=="Mail From Address")
				{
					$from_address = $mailinfo->constacl_single_config_attribute_value;
				}
				
				if($mailinfo->constacl_single_config_attribute_title=="Mail From Name")
				{
					$from_name = $mailinfo->constacl_single_config_attribute_value;
				}
			}
		}
            
                $config = array(
                    'driver'     => $mail_driver,
                    'host'       => $mail_host,
                    'port'       => 2525,
                    'from'       => array('address' => $from_address, 'name' => $from_name),
                    'encryption' => "tls",
                    'username'   => "apikey",
                    'password'   => "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",
                    'sendmail'   => '/usr/sbin/sendmail -bs',
                    'pretend'    => false,
                );
                //Config::set('mail', $config);
                
	}
	
	public function testmail()
	{
		
		$subject="Organic Way of Nutrition Seller Approval Mail";
		$to="animesh27051982@gmail.com";
		$from="constacloud@constacloud.com";
		$urlimages=url("/");
		
		$userid = "animesh27051982@gmail.com";
		$password = "animesh";
		$name = "Animesh";
		$url=url("/seller/");
		$msg="Your request for registration as a seller for organic nutrition has been accepted. Below is the url for login along with your user id and password.If you find any difficulty please be free to call or email us at any time.";
		
		Mail::send('email.testemail',['Name' => $name,'url' => $url, "userid" => $userid, "password" => $password, "msg" => $msg,"urlimages" => $urlimages],function($message) use ($to,$from,$subject)
		{
			$message->to($to)->subject($subject);
			$message->from($from);
		});
	}
	
}