<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConstaclSingleUsersLoggedData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constacl_single_users_logged_data', function (Blueprint $table) {
            $table->increments('constacl_single_users_logged_data_id',10)->key();
            $table->integer('constacl_single_users_id')->unsigned();
            $table->dateTime('constacl_single_users_logged_in_time');
            $table->dateTime('constacl_single_users_logged_out_time');
            
            $table->foreign('constacl_single_users_id','user_id_foreign_key_logged')
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
