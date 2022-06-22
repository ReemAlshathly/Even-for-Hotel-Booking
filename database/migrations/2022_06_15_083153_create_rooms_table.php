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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image');
            $table->integer('code');
            $table->integer('floor');
            $table->decimal('cost', 10, 2);
            $table->boolean("status")->default(1);
            $table->boolean("is_active")->default(1);
            $table->integer('bids');
            $table->boolean("TV")->nullable()->default(0);
            $table->boolean("wifi")->nullable()->default(0);
            $table->boolean("parking")->nullable()->default(0);
            $table->boolean("AC")->nullable()->default(0);
            $table->boolean("pool")->nullable()->default(0);
            $table->enum('type', array_keys(['Junior Suite', 'Standard Room', 'Double Room']))->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
