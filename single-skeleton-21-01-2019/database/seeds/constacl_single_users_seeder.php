<?php

use Illuminate\Database\Seeder;
//use CommonHelper;
use App\constacl_single_users;


class constacl_single_users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //constacl_single_users::truncate();
        //constacl_single_users::query()->delete();
        $constacl_single_users = constacl_single_users::create(array("constacl_single_users_name" => "Constacloud test", "constacl_single_users_userid" => "constacloudtest@constacloud.com", "constacl_single_users_email" => "constacloudtest@constacloud.com", "constacl_single_users_contactno" => "4343656", "constacl_single_users_category" => "superadmin", "constacl_single_users_password" => CommonHelper::encrip_password("constacloudtest", "e"), "constacl_single_users_created_by" => 0, "constacl_single_users_updated_by" => 0, "constacl_single_users_forget_password_requested" => "", "constacl_single_users_forget_password_link" => "", "constacl_single_users_forget_password_link_status" => "", "constacl_single_users_forget_password_link_expiration_time" => "1970-01-01 00:00:00", "constacl_single_users_isactive" => "1", "constacl_single_users_isdeleted" => "0" ));
        $constacl_single_users->passwords()->create(array("constacl_single_users_password" => $constacl_single_users->constacl_single_users_password, "constacl_single_users_password_status" => "1", "constacl_single_users_password_created_at" => date("Y-m-d H:i:s")));
        
        //$users = factory(\App\constacl_single_users::class, 2)->create();
        //$usersEngineers = \App\constacl_single_users::all();
        //foreach( $usersEngineers as $user)
        //{
            //dd($user);
            //$user->passwords()->save(factory(\App\constacl_single_passwords::class)->make());
        //}
        
//        $users = factory(\App\constacl_single_users::class, 2)->create()->each(function ($users){
//                 $users->passwords()->save( factory(App\constacl_single_passwords::class)->create(['constacl_single_passwords_users_id' => $users,'constacl_single_users_password' => $users->constacl_single_users_password,])) ;
//        });
    }
}
