<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('destination');
            $table->string('trip_difficulty');
            $table->string('trip_style');
            $table->string('transport');
            $table->integer('price_low');
            $table->text('know_before_booking');
            $table->text('itinerary');
            $table->text('higlight');
            $table->integer('day');
            $table->integer('night');
            $table->text('included');
            $table->text('not_included');
            // $table->string('image');
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
        Schema::dropIfExists('trips');
    }
}
