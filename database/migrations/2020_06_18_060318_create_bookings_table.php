<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('from');
            $table->string('to');
            $table->string('p_notes');
            $table->string('d_notes');
            $table->string('p_point');
            $table->string('d_point');
            $table->unsignedBigInteger('veh_id');
            $table->string('j_type');
            $table->integer('passenger');
            $table->integer('luggages');
            $table->string('c_name');
            $table->string('tel_no');
            $table->string('mobile_no');
            $table->string('email');
            $table->string('p_date');
            $table->string('p_hour');
            $table->unsignedBigInteger('driver_id');
            $table->string('special');
            $table->timestamps();
            
            $table->foreign('veh_id')->references('id')->on('vehicles')->onDelete('cascade');
            $table->foreign('driver_id')->references('id')->on('drivers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
