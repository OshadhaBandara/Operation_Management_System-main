<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            $table->id();
           // $table->foreignId('service_id')->nullable();
           /*  $table->foreignId('document_id')->nullable(); */
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('nic')->unique()->nullable(false);
            $table->string('email')->unique()->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('password')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('district')->nullable(false);
            $table->string('division')->nullable(false);
            $table->string('profile_image')->default('img.jpg');
            $table->boolean('is_registered')->default(false);
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
        Schema::dropIfExists('citizens');
    }



}
