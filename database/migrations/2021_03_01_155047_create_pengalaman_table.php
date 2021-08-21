<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengalamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalaman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->enum('portfolio',['Project Based','Individual Service'])->default('Project Based');
            $table->string('project_kategori',30)->nullable();
            $table->string('service_kategori',30)->nullable();
            $table->string('klien',50)->nullable();
            $table->enum('klien_kategori',['child','teenager','adult','the elderly'])->default('child');
            $table->string('lokasi',255)->nullable();
            $table->integer('member')->nullable();
            $table->string('role',50)->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('deskripsi',255)->nullable();
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengalaman');
    }
}
