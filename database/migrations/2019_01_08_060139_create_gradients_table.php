<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gradients', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('user_id')->unsigned(); // ids de usuarios
            $table->foreign('user_id') 
                    ->references('id')
                    ->on('users') 
                    ->onUpdate('CASCADE')
                    ->onDelete('CASCADE'); 

            $table->string('name'); //fire red, dusk, dawn
            $table->string('color_1'); //#3q232
            $table->string('color_2'); //#00043
            $table->string('image_name'); //firered.jpeg
            $table->string('color_filter'); //red, blue, green
            $table->string('color_filter_2'); //red, blue, green
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gradients');
    }
}
