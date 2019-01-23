<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConstaclSinglePasswords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constacl_single_passwords', function (Blueprint $table) {
            $table->increments('constacl_single_passwords_id',10)->key();
            $table->integer('constacl_single_passwords_users_id')->unsigned();
            $table->string('constacl_single_users_password',255);
            $table->string('constacl_single_users_password_status',1);
            $table->dateTime('constacl_single_users_password_created_at');
            
            $table->foreign('constacl_single_passwords_users_id','user_id_foreign_password')
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
        Schema::dropIfExists('constacl_single_passwords');
    }
}
