<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('company')->nullable(true);
            $table->string('wcountry')->nullable(true);
            $table->string('roletitle')->nullable(true);
            $table->integer('monthWS')->nullable(true);
            $table->integer('yearWS')->nullable(true);
            $table->integer('monthWE')->nullable(true); 
            $table->integer('yearWE')->nullable(true); 
            $table->string('workhereW')->nullable(true); 
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
        Schema::dropIfExists('works');
    }
}
