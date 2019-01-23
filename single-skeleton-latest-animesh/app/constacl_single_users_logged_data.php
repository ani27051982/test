<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class constacl_single_users_logged_data extends Model
{
    public $timestamps = false;
    
    protected $table='constacl_single_users_logged_data';
    
    protected $fillable = [
        'constacl_single_users_id', 'constacl_single_users_logged_in_time', 'constacl_single_users_logged_out_time'
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
    
}
