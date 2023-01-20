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
        Schema::create('story_assets', function (Blueprint $table) {
            $table->comment('');
            $table->string('_id', 30)->nullable();
            $table->string('_oldid', 30)->nullable();
            $table->integer('_newid', true);
            $table->integer('story')->nullable()->index('FK_storyAssets_stories');
            $table->integer('asset')->nullable()->index('FK_storyAssets_assets');
            $table->text('caption')->nullable();
            $table->tinyInteger('position')->nullable();
            $table->string('annotations', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('story_assets');
    }
};
