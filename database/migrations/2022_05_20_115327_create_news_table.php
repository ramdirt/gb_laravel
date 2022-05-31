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
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('title', 255);
            $table->string('description')->nullable();
            $table->string('author')->default('admin');
            $table->enum('status', ['DRAFT', 'ACTIVE', 'BLOCKED'])
                ->default('DRAFT');
            $table->string('image')->nullable();
            $table->string('slug', 255)->nullable();
            $table->timestamps();

            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};