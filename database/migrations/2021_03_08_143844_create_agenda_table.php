<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kategori')->index();
            $table->string('judul',50);
            $table->text('deskripsi',255);
            $table->string('lokasi',255);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('fasilitas',100);
            $table->string('pemateri',50);
            $table->string('poster',100);
            $table->enum('visible',['private','public'])->default('public');
            $table->timestamps();

            $table->foreign('nama_kategori')->references('nama')->on('kategori')->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda');
    }
}
