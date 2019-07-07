<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('amount')->nullable();
            $table->string('frequency')->default('Monthly');
            $table->integer('sponsor_id')->unsigned();

            $table->foreign('sponsor_id')->references('id')->on('sponsorships');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crises');
    }
}
