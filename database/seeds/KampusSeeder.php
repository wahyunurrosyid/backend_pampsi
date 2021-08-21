<?php

use App\Models\Jurusan;
use App\Models\Universitas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");
        Jurusan::truncate();
        Universitas::truncate();
        DB::statement("SET foreign_key_checks=1");

        //universitas
        $universitas = Universitas::create(['nama' => 'Universitas Gajah Mada']);

        //jurusan
        $jurusan = Jurusan::create(['kode' => 'KLI', 'universitas_id' => 1, 'nama' => 'Psikologi Klinis']);
        $jurusan = Jurusan::create(['kode' => 'PIO', 'universitas_id' => 1, 'nama' => 'Psikologi Industri & Organisasi']);
        $jurusan = Jurusan::create(['kode' => 'PDK', 'universitas_id' => 1, 'nama' => 'Psikologi Pendidikan']);

        //bidang
        DB::table('bidang')->insert(['nama'=>'Psikologi Klinis']);
        DB::table('bidang')->insert(['nama'=>'Psikologi Industri & Organisasi']);
        DB::table('bidang')->insert(['nama'=>'Psikologi Pendidikan']);

        //kategori
        DB::table('kategori')->insert(['nama'=>'Psikologi Klinis']);
        DB::table('kategori')->insert(['nama'=>'Psikologi Industri & Organisasi']);
        DB::table('kategori')->insert(['nama'=>'Psikologi Pendidikan']);

        //kategori artikel
        DB::table('kategori_artikel')->insert(['nama'=>'Psikologi Klinis']);
        DB::table('kategori_artikel')->insert(['nama'=>'Psikologi Industri & Organisasi']);
        DB::table('kategori_artikel')->insert(['nama'=>'Psikologi Pendidikan']);

        //kategori forum
        DB::table('kategori_forum')->insert(['nama'=>'Psikologi Klinis']);
        DB::table('kategori_forum')->insert(['nama'=>'Psikologi Industri & Organisasi']);
        DB::table('kategori_forum')->insert(['nama'=>'Psikologi Pendidikan']);

        //kategori vacancies
        DB::table('kategori_vacancies')->insert(['nama'=>'Psikologi Klinis']);
        DB::table('kategori_vacancies')->insert(['nama'=>'Psikologi Industri & Organisasi']);
        DB::table('kategori_vacancies')->insert(['nama'=>'Psikologi Pendidikan']);
    }
}
