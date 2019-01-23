<?php

namespace App\Providers;

use Illuminate\Auth\EloquentUserProvider as UserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;
use CommonHelper;

class CustomUserProvider extends UserProvider {

    public function validateCredentials(UserContract $user, array $credentials)
    {
        $plain = $credentials['constacl_single_users_password'];

        return ($user->getAuthPassword() == CommonHelper::encrip_password($plain,"e"));
    }

}

