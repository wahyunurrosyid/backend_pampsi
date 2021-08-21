<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('perusahaan')->length(100);
            $table->string('judul')->length(100);
            $table->integer('kota_id');
            $table->string('nama_kategori');
            $table->text('deskripsi')->length(255)->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('logo')->nullable();
            $table->timestamps();

            $table->index('kota_id');
            $table->index('nama_kategori');

            $table->foreign('nama_kategori')->references('nama')->on('kategori_vacancies')->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
}
