<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();                    
            $table->string('vehicle_type');
            $table->string('noofpassenger');
            $table->string('noofsuitecases');
            $table->string('handluggage');
            $table->string('noofmiles');
            $table->string('startrate');
            $table->string('fImage');
            $table->string('tColor');
            $table->string('bgColor');
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
        Schema::dropIfExists('vehicles');
    }
}
