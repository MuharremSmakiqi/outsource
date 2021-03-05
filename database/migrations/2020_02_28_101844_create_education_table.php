<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('university')->nullable(true);
            $table->string('areaofstudy')->nullable(true);
            $table->string('degree')->nullable(true);
            $table->integer('monthES')->nullable(true);
            $table->integer('yearES')->nullable(true);
            $table->integer('monthEE')->nullable(true); 
            $table->integer('yearEE')->nullable(true); 
            $table->string('workhereE')->nullable(true); 
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('education');
    }
}
