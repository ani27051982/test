<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConstaclSingleUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constacl_single_users', function (Blueprint $table) {
            $table->increments('constacl_subscri_users_id',10)->key();
            $table->string('constacl_single_users_name',255);
            $table->string('constacl_single_users_userid',255);
            $table->string('constacl_single_users_email',191)->unique();
            $table->string('constacl_single_users_contactno',20)->unique();
            $table->string('constacl_single_users_category',25);
            $table->string('constacl_single_users_password',191);
            $table->dateTime('constacl_single_users_created_at');
            $table->dateTime('constacl_single_users_updated_at');
            $table->integer('constacl_single_users_created_by');
            $table->integer('constacl_single_users_updated_by');
            $table->string('constacl_single_users_forget_password_requested',1);
            $table->string('constacl_single_users_forget_password_link',255);
            $table->string('constacl_single_users_forget_password_link_status',1);
            $table->dateTime('constacl_single_users_forget_password_link_expiration_time')->nullable($value = true);
            $table->string('constacl_single_users_isactive',1);
            $table->string('constacl_single_users_isdeleted',1);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constacl_single_users');
    }
}
