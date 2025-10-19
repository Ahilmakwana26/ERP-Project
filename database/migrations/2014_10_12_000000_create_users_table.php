<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('role');
            $table->integer('company_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->longText('user_permission')->nullable();
            $table->enum('status',['Active','Inactive']);
            $table->string('email_verified_at')->nullable();
            $table->enum('authorize_type',['otp','key','both','none'])->default('none');
            $table->longText('unrestricted_permission')->nullable();
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
