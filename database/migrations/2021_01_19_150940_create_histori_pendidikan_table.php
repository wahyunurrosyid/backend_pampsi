<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriPendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histori_pendidikan', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->index('user_id');
            $table->enum('tingkat', ['SD','SMP','SMA','S1','S2','S3']);
            $table->string('nama_lembaga_pendidikan', 255);
            $table->integer('tahun_lulus');
            $table->timestamps();

            $table->index('user_id');
            $table->index('tingkat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histori_pendidikan');
    }
}
