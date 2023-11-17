<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
          //  $table->bigInteger('citizen_id')->nullable(false);
            $table->bigInteger('service_id')->nullable(false);
            $table->string('product_item')->nullable();
            $table->string('item_price')->nullable();
            $table->string('delivery_price')->nullable();
            $table->string('delivary_method')->nullable();
            $table->decimal('total', 10, 2)->nullable();
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
        Schema::dropIfExists('payments');
    }
}
