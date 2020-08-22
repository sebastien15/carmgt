<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fares', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('veh_id');
            $table->boolean('company_wise')->nullable();
            $table->unsignedBigInteger('Floc_id');
            $table->unsignedBigInteger('Tloc_id');
            $table->string('fare');
            $table->timestamps();
            
            $table->foreign('veh_id')->references('id')->on('vehicles'); 
            $table->foreign('Floc_id')->references('id')->on('locations'); 
            $table->foreign('Tloc_id')->references('id')->on('locations'); 
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fares');
    }
}
