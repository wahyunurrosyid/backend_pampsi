<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nama_lengkap',100)->nullable();
            $table->string('tempat_lahir',50)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('kota1_id')->nullable();
            $table->integer('kota2_id')->nullable();
            $table->string('no_hp',15)->nullable();
            $table->integer('tahun_masuk')->nullable();
            $table->integer('tahun_lulus')->nullable();
            $table->string('nomor_ijazah',30)->nullable();
            $table->string('no_sipp',30)->nullable();
            $table->text('skill_kompetensi')->nullable(); //isinya dipisah koma
            $table->text('profile_singkat')->nullable();
            $table->float('longitude')->nullable();
            $table->float('latitude')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nama_lengkap');
            $table->dropColumn('tempat_lahir');
            $table->dropColumn('tanggal_lahir');
            $table->dropColumn('kota1_id');
            $table->dropColumn('kota2_id');
            $table->dropColumn('no_hp');
            $table->dropColumn('tahun_masuk');
            $table->dropColumn('tahun_lulus');
            $table->dropColumn('nomor_ijazah');
            $table->dropColumn('no_sipp');
            $table->dropColumn('skill_kompetensi');
            $table->dropColumn('profile_singkat');
            $table->dropColumn('longitude');
            $table->dropColumn('latitude');
        });
    }
}
