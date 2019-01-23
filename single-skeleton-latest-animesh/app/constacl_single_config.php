<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class constacl_single_config extends Model
{
    public $timestamps = false;
    
    protected $table='constacl_single_config';
    
    protected $fillable = [
        'constacl_single_config_category', 'constacl_single_config_attribute_title', 'constacl_single_config_attribute_value'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
