<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConstaclSingleUsersRolesAccess extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constacl_single_users_roles_access', function (Blueprint $table) {
            $table->increments('constacl_single_users_roles_access_id',10)->key();
            $table->integer('constacl_single_users_id')->unsigned();
            $table->String('constacl_single_users_role_name',255);
            
            $table->foreign('constacl_single_users_id','user_id_foreign_key_role')
                  ->references('constacl_subscri_users_id')
                  ->on('constacl_single_users')
                  ->onDelete('cascade');
            
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constacl_single_users_logged_data');
    }
}
