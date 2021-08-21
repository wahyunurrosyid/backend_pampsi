<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey', function (Blueprint $table) {
            $table->string('id',10);
            $table->integer('user_id')->index();
            $table->string('kategori')->index();
            $table->date('close');
            $table->string('judul',255);
            $table->text('keterangan');
            $table->string('file_panduan',255)->nullable();
            $table->timestamps();

            $table->foreign('kategori')->references('nama')->on('kategori')->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey');
    }
}
