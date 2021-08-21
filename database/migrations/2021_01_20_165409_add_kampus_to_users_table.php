<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKampusToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('universitas_id')->nullable()->after('no_hp');
            $table->integer('jurusan_id')->nullable()->after('universitas_id');

            $table->index('universitas_id');
            $table->index('jurusan_id');
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
            $table->dropColumn('universitas_id');
            $table->dropColumn('jurusan_id');
        });
    }
}
