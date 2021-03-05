<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otherservices', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->string('oServices')->nullable(true);
            $table->string('oLevel')->nullable(true);
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
        Schema::dropIfExists('otherservices');
    }
}
