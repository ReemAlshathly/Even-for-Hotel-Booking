<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
           
            $table->string('email');
            $table->integer('onlinefrom');
            $table->integer("onlineto");
            $table->string('facebook');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('twitter');
            $table->string('youtube');
            $table->longText('location');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soials');
    }
};
