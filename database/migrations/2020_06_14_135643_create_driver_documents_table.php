<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_documents', function (Blueprint $table) {
            $table->id();
            $table->dateTime('expiry_date');
            $table->string('document_title');
            $table->string('file_no');
            $table->unsignedBigInteger('driver_id')->unsigned();
            $table->timestamps();

            $table->foreign('driver_id')
                    ->references('id')->on('drivers')
                    ->onDelete('cascade');
                        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver_documents');
    }
}
