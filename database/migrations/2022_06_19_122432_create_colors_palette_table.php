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
        Schema::create('colors_palette', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('palette_id');
            $table->unsignedBigInteger('colors_id');

            $table->foreign('palette_id')->references('id')->on('palettes');
            $table->foreign('colors_id')->references('id')->on('colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colors_palette');
    }
};
