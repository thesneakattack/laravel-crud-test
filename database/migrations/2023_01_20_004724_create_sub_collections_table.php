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
        Schema::create('sub_collections', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->string('_oldid', 30)->nullable();
            $table->integer('parentCollection')->nullable()->index('FK_sub_collections_collections');
            $table->string('title', 40);
            $table->text('stories')->nullable();
            $table->text('stories_new')->nullable();
            $table->string('subTitle', 80)->default('');
            $table->string('mainImage', 80)->nullable();
            $table->tinyInteger('position')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_collections');
    }
};
