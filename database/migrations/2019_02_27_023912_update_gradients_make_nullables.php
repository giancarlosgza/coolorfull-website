<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateGradientsMakeNullables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gradients', function (Blueprint $table) {
            $table->string('image_name')->nullable()->change();
            $table->string('name')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gradients', function (Blueprint $table) {
            $table->string('image_name')->nullable(false)->change();
            $table->string('name')->nullable(false)->change();
        });
    }
}
