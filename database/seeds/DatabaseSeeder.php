<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //add admin
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@psikologicare.com',
            'password' => app('hash')->make('bmmrhdb2021!'),
            'role_id' => 1,
            'status' => 3
        ]);

        //add kampus
        DB::table('users')->insert([
            'username' => 'kampus',
            'email' => 'kampus@psikologicare.com',
            'password' => app('hash')->make('bmmrhdb2021!'),
            'role_id' => 2,
            'status' => 3
        ]);

        //seed role
        $this->call([RoleSeeder::class]);

        //seed kampus
        $this->call([KampusSeeder::class]);
    }
}
