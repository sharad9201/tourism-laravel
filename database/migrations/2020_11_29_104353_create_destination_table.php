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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('Full_name')->unique();
            $table->string('gmail')->unique();
            $table->string('trip_date');
            $table->BigInteger('phone_number')->unique();
            $table->mediumText('extra');
            $table->timestamps();
            $table->BigInteger('user_id')->unsigned();
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