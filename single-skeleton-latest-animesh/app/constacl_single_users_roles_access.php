<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class constacl_single_users_roles_access extends Model
{
    public $timestamps = false;
    
    protected $table='constacl_single_users_roles_access';
    
    protected $fillable = [
        'constacl_single_users_id', 'constacl_single_users_role_name'
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
