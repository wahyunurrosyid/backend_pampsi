<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveySoalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_soal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('survey_id');
            $table->enum('tipe',['single','multiple'])->default('single');
            $table->text('soal');
            $table->text('pilihan')->nullable();
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
        Schema::dropIfExists('survey_soal');
    }
}
