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
        Schema::table('story_assets', function (Blueprint $table) {
            $table->foreign(['story'], 'FK_story_assets_stories')->references(['id'])->on('stories')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->foreign(['asset'], 'FK_story_assets_assets')->references(['id'])->on('assets')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('story_assets', function (Blueprint $table) {
            $table->dropForeign('FK_story_assets_stories');
            $table->dropForeign('FK_story_assets_assets');
        });
    }
};
