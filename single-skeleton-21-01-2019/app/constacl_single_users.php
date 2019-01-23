<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\UserResetPasswordNotification;

class constacl_single_users extends Authenticatable
{
   
    use Notifiable;
    
    const CREATED_AT = 'constacl_single_users_created_at';
    const UPDATED_AT = 'constacl_single_users_updated_at';
    
    protected $guard = 'users';
    
    protected $primaryKey = 'constacl_subscri_users_id';
    
    protected $fillable = [
        'constacl_single_users_name', 'constacl_single_users_userid', 'constacl_single_users_email', 'constacl_single_users_contactno', 'constacl_single_users_category', 'constacl_single_users_password' , 'constacl_single_users_created_at' , 'constacl_single_users_updated_at' , 'constacl_single_users_created_by', 'constacl_single_users_updated_by', 'constacl_single_users_forget_password_requested', 'constacl_single_users_forget_password_link','constacl_single_users_forget_password_link_status', 'constacl_single_users_forget_password_link_expiration_time','constacl_single_users_isactive','constacl_single_users_isdeleted'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
    
    public function passwords()
    {
        return $this->hasMany('App\constacl_single_passwords','constacl_single_passwords_users_id');
    }
    
    public function sendPasswordResetNotification($token)
    {
        //dd($token);
        $this->notify(new UserResetPasswordNotification($token));
    }
}
