<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class constacl_single_organization extends Model
{
    //
    
    public $timestamps = false;
    
    protected $table='constacl_single_organization';
    
    protected $fillable = [
        'constacl_single_organization_name', 'constacl_single_organization_email', 'constacl_single_organization_logo', 'constacl_single_organization_address',
        'constacl_single_organization_contactno', 'constacl_single_organization_isactive', 'constacl_single_organization_isdeleted', 'constacl_single_organization_created_time','constacl_single_organization_updated_time'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
    
}
