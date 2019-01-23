<?php

use Illuminate\Database\Seeder;
use App\constacl_single_config;

class constacl_single_config_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        constacl_single_config::truncate();
        
        $configdata = [
            [
                'constacl_single_config_category'=>"Mail",
                'constacl_single_config_attribute_title'=>"Mail Driver",
                'constacl_single_config_attribute_value'=>"smtp"
            ],
            [
                'constacl_single_config_category'=>"Mail",
                'constacl_single_config_attribute_title'=>"Mail Host",
                'constacl_single_config_attribute_value'=>"smtp.sendgrid.net"
            ],
            [
                'constacl_single_config_category'=>"Mail",
                'constacl_single_config_attribute_title'=>"Mail Port",
                'constacl_single_config_attribute_value'=>"2525"
            ],
            [
                'constacl_single_config_category'=>"Mail",
                'constacl_single_config_attribute_title'=>"Mail Username",
                'constacl_single_config_attribute_value'=>"apikey"
            ],
            [
                'constacl_single_config_category'=>"Mail",
                'constacl_single_config_attribute_title'=>"Mail Password",
                'constacl_single_config_attribute_value'=>"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"
            ],
            [
                'constacl_single_config_category'=>"Mail",
                'constacl_single_config_attribute_title'=>"Mail From Address",
                'constacl_single_config_attribute_value'=>"constacloud@constacloud.com"
            ],
            [
                'constacl_single_config_category'=>"Mail",
                'constacl_single_config_attribute_title'=>"Mail From Name",
                'constacl_single_config_attribute_value'=>"Constacloud Test"
            ]
        ];
        
        foreach ($configdata as $configdatas) {
            constacl_single_config::create($configdatas);
        }
             
        
    }
}
