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
        Schema::table('lflb_sub_collections', function (Blueprint $table) {
            $table->foreign(['parentCollection'], 'FK_lflb_sub_collections_lflb_collections')->references(['id'])->on('lflb_collections')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lflb_sub_collections', function (Blueprint $table) {
            $table->dropForeign('FK_lflb_sub_collections_lflb_collections');
        });
    }
};
