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
        Schema::table('storyAssets', function (Blueprint $table) {
            $table->foreign(['story'], 'FK_storyAssets_stories')->references(['_newid'])->on('stories')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->foreign(['asset'], 'FK_storyAssets_assets')->references(['_newid'])->on('assets')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('storyAssets', function (Blueprint $table) {
            $table->dropForeign('FK_storyAssets_stories');
            $table->dropForeign('FK_storyAssets_assets');
        });
    }
};
