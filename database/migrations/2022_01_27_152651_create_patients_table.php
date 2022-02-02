<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('second_name');
            $table->string('last_name');
            $table->date('birthday');
            $table->string('street');
            $table->integer('street_number');
            $table->string('interior_number')->nullable();
            $table->string('settlement');
            $table->string('zip_code');
            $table->string('country')->default('Mexico');
            $table->string('state')->default('Michoacan');
            $table->string('city')->default('Morelia');
            $table->string('phone_number')->nullable();
            $table->string('cell_number');
            $table->string('email')->nullable();
            $table->string('kind_patient');
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
        Schema::dropIfExists('patients');
    }
}
