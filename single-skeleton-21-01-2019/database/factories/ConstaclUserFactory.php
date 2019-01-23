<?php

use Faker\Generator as Faker;

$factory->define(\App\constacl_single_users::class, function (Faker $faker) {
    return [
        //'constacl_subscri_users_id' => $faker->randomDigit,
        'constacl_single_users_name' => $faker->name,
        'constacl_single_users_userid' => $faker->unique()->safeEmail,
        'constacl_single_users_email' => $faker->unique()->safeEmail,
        'constacl_single_users_contactno' => str_random(10),
        'constacl_single_users_category' => "users",
        'constacl_single_users_password' => CommonHelper::encrip_password("constacloudtest", "e"),
        'constacl_single_users_created_at' => now(),
        'constacl_single_users_updated_at' => now(),
        'constacl_single_users_created_by' => 0,
        'constacl_single_users_updated_by' => 0,
        'constacl_single_users_forget_password_requested' => '',
        'constacl_single_users_forget_password_link' => '',
        'constacl_single_users_forget_password_link_status' => '',
        'constacl_single_users_forget_password_link_expiration_time' => '1970-01-01 00:00:00',
        'constacl_single_users_isactive' => '1',
        'constacl_single_users_isdeleted' => '0'
    ];
});
