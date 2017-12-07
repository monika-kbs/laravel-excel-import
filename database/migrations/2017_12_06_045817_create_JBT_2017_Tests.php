<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJBT2017Tests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('JBT_2017_Tests', function (Blueprint $table) {
        $table->string('user_id')->nullable();
        $table->string('first')->nullable();
        $table->string('last')->nullable();
        $table->string('joining_date')->nullable();
        $table->string('zip')->nullable();
        $table->string('gender')->nullable();
        $table->string('posted')->nullable();
        $table->string('index')->nullable();
        $table->string('ip')->nullable();
        $table->string('rererrer')->nullable();
        $table->string('bi')->nullable();
        $table->string('question6')->nullable();
        $table->string('weight_status')->nullable();
        $table->string('question1')->nullable();
        $table->string('question4')->nullable();
        $table->string('question3')->nullable();
        $table->string('jbt')->nullable();
        $table->string('verification')->nullable();
        $table->string('status')->nullable();
        $table->string('calc')->nullable();
        $table->string('question7a')->nullable();
        $table->string('question7c')->nullable();
        $table->string('encrypt')->nullable();
        $table->string('question2')->nullable();
        $table->string('que_year')->nullable();
        $table->string('question7b')->nullable();
        $table->string('diabetes_score')->nullable();
        $table->string('question5')->nullable();
        $table->string('question11')->nullable();
        $table->string('question7')->nullable();
        $table->string('question9')->nullable();
        $table->string('question12')->nullable();
        $table->string('jbt_verification_status')->nullable();
        $table->string('question8a')->nullable();
        $table->string('question10')->nullable();
        $table->string('question8f')->nullable();
        $table->string('question8b')->nullable();
        $table->string('question8c')->nullable();
        $table->string('quetion8e')->nullable();
        $table->string('question8h')->nullable();
        $table->string('question8d')->nullable();
        $table->string('question8g')->nullable();
        $table->string('question19')->nullable();
        $table->string('question18')->nullable();
        $table->string('question16')->nullable();
        $table->string('question13')->nullable();
        $table->string('question17a')->nullable();
        $table->string('question17b')->nullable();
        $table->string('resumed_form')->nullable();
        $table->string('question17e')->nullable();
        $table->string('question17d')->nullable();
        $table->string('question17c')->nullable();
        $table->string('question17f')->nullable();
        $table->string('question17g')->nullable();
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
        Schema::dropIfExists('JBT_2017_Tests');
    }
}
