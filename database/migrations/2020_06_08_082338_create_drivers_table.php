<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('pda_pass')->nullable();
            $table->string('pda_mobile');
            $table->boolean('rent');
            $table->string('driver_no');
            $table->boolean('active');
            $table->boolean('has_pda');
            $table->string('driver_name');
            $table->string('driver_lName');
            $table->string('email');
            $table->string('tel_no');
            $table->string('address');
            $table->date('date_of_birth');
            $table->string('mobile_no');
            $table->string('Ni');
            $table->string('driver_type');
            $table->string('monthly_rent');
            $table->string('profile_image');
            $table->string('vehicle_make');
            $table->date('assigned_on');
            $table->date('end_on');
            $table->string('vehicle_type');
            $table->string('vehicle_color');
            $table->string('vehicle_no');
            $table->string('owner');
            $table->string('vehicle_model');
            $table->date('available_on');
            $table->date('end_at');
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
        Schema::dropIfExists('drivers');
    }
}
