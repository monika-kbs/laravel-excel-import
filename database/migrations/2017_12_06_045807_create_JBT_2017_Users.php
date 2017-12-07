<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJBT2017Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('JBT_2017_Users', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('test_type')->nullable();
            $table->string('bp_test')->nullable();
            $table->string('a1c_test')->nullable();
            $table->string('hiv_test')->nullable();
            $table->string('verification_date')->nullable();
            $table->string('join_date')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('zip')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('dob')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->boolean('ignored')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('JBT_2017_Users');
    }
}
