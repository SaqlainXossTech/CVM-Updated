<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuggetionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suggetions', function (Blueprint $table) {
            $table->id();
            $table->string('inst_name')->nullable();
            $table->string('dept')->nullable();
            $table->string('skill')->nullable();
            $table->string('present_address')->nullable();
            $table->string('profile_summary')->nullable();
            $table->string('location')->nullable();
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
        Schema::dropIfExists('suggetions');
    }
}
