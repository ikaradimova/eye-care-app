<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEyeDeseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eye_diseases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('symptoms');
            $table->longText('causes');
            $table->longText('risk_factors');
            $table->longText('complications');
            $table->longText('treatment');
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
        Schema::dropIfExists('eye_deseases');
    }
}
