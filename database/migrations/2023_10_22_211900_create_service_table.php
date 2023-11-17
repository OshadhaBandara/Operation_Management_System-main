<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('citizen_id')->nullable(false);
            $table->string('service_type')->nullable(false);
            $table->string('certificate_type')->nullable();
            $table->string('nic_service_type')->nullable();
            $table->string('passport_type')->nullable();
            $table->string('v_emission_type')->nullable();
            $table->string('appointment_type')->nullable();
            $table->string('appointment_date')->nullable();
            $table->string('appointment_time')->nullable();
            $table->string('appointment_description')->nullable();
            $table->string('old_passport_id_Number')->nullable();
            $table->string('old_nic_id_Number')->nullable();
            $table->string('delivary_method')->nullable();
            $table->decimal('item_price', 10, 2)->nullable();
            $table->decimal('delivery_price', 10, 2)->nullable();
            $table->decimal('total', 10, 2)->nullable();
            $table->boolean('service_status')->default(false);
            $table->boolean('service_payment')->default(false);
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
        Schema::dropIfExists('services');
    }





}
