<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('image');
            $table->string('mobile');
            $table->string('email');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('job_title')->nullable();
            $table->string('marital_status');
            $table->string('religion');
            $table->string('nationality');
            $table->string('gender');
            $table->string('dob');
            $table->string('profile_summary');
            $table->timestamps();

            //$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_infos');
    }
}
