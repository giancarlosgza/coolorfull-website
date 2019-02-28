<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateGradientsAddIsPublicColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gradients', function (Blueprint $table) {
            $table->boolean('is_public')->default(false)->after('color_filter_2');
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
            $table->dropColumn(['is_public']);
        });
    }
}
