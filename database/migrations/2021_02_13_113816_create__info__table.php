<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->nullable();
            $table->string('gender')->nullable();
            $table->string('type')->nullable();
            $table->integer('ranking')->nullable();
            $table->string('player')->nullable();
            $table->string('country')->nullable();
            $table->integer('age')->nullable();
            $table->string('points')->nullable();
            $table->integer('tournaments')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info');
    }
}
