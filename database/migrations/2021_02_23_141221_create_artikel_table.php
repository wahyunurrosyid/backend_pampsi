<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kategori',30);
            $table->string('judul');
            $table->text('isi');
            $table->string('image')->nullable();
            $table->integer('user_id');
            $table->integer('views')->default(0);
            $table->enum('visible',['public','private'])->default('private');
            $table->timestamps();

            $table->index('nama_kategori');
            $table->index('user_id');

            $table->foreign('nama_kategori')->references('nama')->on('kategori_artikel')->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel');
    }
}
