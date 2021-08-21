<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebook', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('judul',100);
            $table->string('author',25);
            $table->text('synopsis',255)->nullable();
            $table->enum('visible',['public','private'])->default('private');
            $table->integer('bidang_id');
            $table->string('file',255)->nullable();
            $table->string('image',255)->nullable();
            $table->timestamps();

            $table->index('user_id');
            $table->index('bidang_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ebook');
    }
}
