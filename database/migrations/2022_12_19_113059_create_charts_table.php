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
        Schema::create('charts', function (Blueprint $table) {
            $table->id();
            $table->string('county');
            $table->bigInteger('total_population');
            $table->bigInteger('male_population');
            $table->bigInteger('female_population');
            $table->bigInteger('households');
            $table->bigInteger('av_hh_size');
            $table->bigInteger('land_area');
            $table->bigInteger('population_density');
            $table->bigInteger('population_in_2009');
            $table->bigInteger('population_change');
            $table->bigInteger('intersex_population');
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
        Schema::dropIfExists('charts');
    }
};
