<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Destination;

class CreateDestinationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::dropIfExists('destinations');
        Schema::create('destinations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id()->unsigned();
            $table->string('Full_name');
            $table->string('gmail');
            $table->string('trip_date');
            $table->BigInteger('phone_number');
            $table->mediumText('extra');
            // $table->string('destination');
            $table->timestamps();
            $table->Integer('trip_id')->unsigned();
          $table->foreign('trip_id')->references('id')->on('trips')->ondelete('cascade');

            // $table->string('destination');
            $table->Integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->ondelete('cascade');
        });

        // Schema::table('destinations', function (Blueprint $table) {
        //     $table->foreign('user_id')->references('id')->on('users')->ondelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinations');
    }
}