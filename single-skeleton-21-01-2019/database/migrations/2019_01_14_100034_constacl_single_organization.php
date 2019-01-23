<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConstaclSingleOrganization extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constacl_single_organization', function (Blueprint $table) {
            $table->increments('constacl_single_organization_id',10)->key();
            $table->string('constacl_single_organization_name',255);
            $table->string('constacl_single_organization_email',255);
            $table->string('constacl_single_organization_logo',255);
            $table->text('constacl_single_organization_address',20);
            $table->string('constacl_single_organization_contactno',20);
            $table->string('constacl_single_organization_isactive',1);
            $table->string('constacl_single_organization_isdeleted',1);
            $table->dateTime('constacl_single_organization_created_time');
            $table->dateTime('constacl_single_organization_updated_time');
        });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
