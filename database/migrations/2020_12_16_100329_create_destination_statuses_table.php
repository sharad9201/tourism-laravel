<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::dropIfExists('destination_statuses');
        Schema::create('destination_statuses', function (Blueprint $table) {
            $table->id();
            $table->string("status");
            $table->unsignedBigInteger('destination_id')->nullable();
            $table->timestamps();
            $table->foreign('destination_id')->references('id')->on('destinations')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destination_statuses');
    }
}