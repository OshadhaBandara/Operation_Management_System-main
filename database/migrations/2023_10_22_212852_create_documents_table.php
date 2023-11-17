<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('citizen_id')->nullable(false);
            $table->string('grama_niladari_certificate')->nullable();
            $table->string('nic')->nullable();
            $table->string('v_emission_certificate')->nullable();
            $table->string('birth_certificate')->nullable();
            $table->string('vehicle_license')->nullable();
            $table->string('appointment_attachment')->nullable();
            $table->string('profile_image')->nullable();
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
        Schema::dropIfExists('documents');
    }



}
