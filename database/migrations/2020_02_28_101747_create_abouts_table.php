<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('country')->nullable(true);
            $table->string('city')->nullable(true); 
            $table->string('monthly')->nullable(true);
            $table->string('english')->nullable(true);
            $table->string('lastPosition')->nullable(true);
            $table->string('available')->nullable(true);
            $table->string('otherLanguages')->nullable(true); 
            $table->longText('bio')->nullable(true); 
            $table->string('gender')->nullable(false); 
            $table->string('phone')->nullable(false); 
            $table->string('level')->nullable(true); 
            $table->string('servicesM')->nullable(true);
            $table->string('status')->default('active');
            $table->string('otherSkills')->nullable(true);
            $table->string('typingSkills')->nullable(true);
            $table->string('otherAdminSkills')->nullable(true);
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
        Schema::dropIfExists('abouts');
    }
}
