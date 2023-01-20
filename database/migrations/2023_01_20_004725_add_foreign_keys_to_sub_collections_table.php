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
        Schema::table('sub_collections', function (Blueprint $table) {
            $table->foreign(['parentCollection'], 'FK_sub_collections_collections')->references(['id'])->on('collections')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub_collections', function (Blueprint $table) {
            $table->dropForeign('FK_sub_collections_collections');
        });
    }
};
