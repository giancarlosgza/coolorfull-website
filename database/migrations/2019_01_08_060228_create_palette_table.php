<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaletteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palettes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('user_id')->unsigned(); // ids de usuarios
            $table->foreign('user_id') 
                    ->references('id')
                    ->on('users') 
                    ->onUpdate('CASCADE')
                    ->onDelete('CASCADE'); 

            $table->string('name'); //rojo fuego
            $table->string('color_1'); //#3q232
            $table->string('color_2'); //#00043
            $table->string('color_3'); //#00043
            $table->string('color_4'); //#00043
            $table->string('image_name'); //firered.jpeg
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('palettes');
    }
}
