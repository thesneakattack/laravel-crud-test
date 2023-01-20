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
        Schema::create('collections', function (Blueprint $table) {
            $table->comment('');
            $table->string('_id', 30)->nullable();
            $table->string('_oldid', 30)->nullable();
            $table->integer('_newid', true);
            $table->string('title', 50);
            $table->string('description', 100)->nullable();
            $table->string('coverPhoto', 80)->nullable();
            $table->text('subCollections')->nullable();
            $table->text('subCollections_new')->nullable();
            $table->string('featured', 10)->default('FALSE');
            $table->string('introText')->nullable()->default('');
            $table->string('bodyText')->nullable()->default('');
            $table->string('mainImage', 80)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collections');
    }
};
