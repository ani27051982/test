<?php

use Faker\Generator as Faker;

$factory->define(\App\constacl_single_passwords::class, function (Faker $faker) {
    
    //$constacl_single_passwords_users_id =  factory(\App\constacl_single_users::class)->create();   
    
    return [
        
        //'constacl_single_passwords_users_id' => $constacl_single_passwords_users_id,
        //'constacl_single_users_password' => $constacl_single_passwords_users_id->constacl_single_users_password,
        'constacl_single_users_password_status' => '0',
        'constacl_single_users_password_created_at' => now()
    ];
});
