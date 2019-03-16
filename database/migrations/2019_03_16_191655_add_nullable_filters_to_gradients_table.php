<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableFiltersToGradientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gradients', function (Blueprint $table) {
            $table->string('color_filter')->nullable()->change();
            $table->string('color_filter_2')->nullable()->change();
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
            $table->string('color_filter')->nullable(false)->change();
            $table->string('color_filter_2')->nullable(false)->change();
        });
    }
}
