<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class constacl_single_passwords extends Model
{
    public $timestamps = false;
    
    protected $table='constacl_single_passwords';
    
    protected $fillable = [
        'constacl_single_passwords_users_id', 'constacl_single_users_password', 'constacl_single_users_password_status', 'constacl_single_users_password_created_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
    
    public function user()
    {
        return $this->belongsTo('App\constacl_single_users','constacl_single_passwords_users_id');
    }
    
    
}
