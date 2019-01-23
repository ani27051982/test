<?php

namespace App\Providers;

use Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class MailConfigServiceProvider extends ServiceProvider
{
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //echo "hiiii";
        $getmailinfo = DB::table("constacl_single_config")->where("constacl_single_config_category","=","Mail")->get();
	//dd($getmailinfo);						
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
                    'port'       => $mail_port,
                    'from'       => array('address' => $from_address, 'name' => $from_name),
                    'encryption' => "tls",
                    'username'   => $mail_username,
                    'password'   => $mail_password,
                    'sendmail'   => '/usr/sbin/sendmail -bs',
                    'pretend'    => false,
                );
                
                Config::set('mail', $config);
       }
}
  