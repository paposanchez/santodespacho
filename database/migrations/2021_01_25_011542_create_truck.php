<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTruck extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truck', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->date('ano');
            $table->string('marca');
            $table->string('modelo');
            $table->string('motor');
            $table->string('chasis');
            $table->softDeletes();
            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipo_truck');
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
        Schema::dropIfExists('truck');
    }
}
