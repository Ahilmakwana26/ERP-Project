<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('company_id');
            $table->integer('user_id');
            $table->integer('e_id');
            $table->string('name');
            $table->string('email');
            $table->longText('present_type');
            $table->integer('casual_leave');            
            $table->integer('leave_penalty');
            $table->tinyInteger('status')->comment('1=Trainee , 2=Onroll ,3=Relieved');
            $table->integer('allow_overtime');
            $table->enum('overtime',['morning overtime','evening overtime','both overtime','none']);
            $table->integer('flexible_breack_allow');
            $table->integer('miniman_overtime_require');
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
        Schema::dropIfExists('employees');
    }
}
