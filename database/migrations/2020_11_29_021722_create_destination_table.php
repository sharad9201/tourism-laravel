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
            $table->biginteger('phone_number')->unique();
            $table->mediumText('extra');
            $table->timestamps();
            // $table->integer('user_id')->unsigned;

        });

        // Schema::table('destination', function (Blueprint $table) {
        //     $table-> foreign('user_id')->reference('id')->On('user')->Ondelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destination');
    }
}
