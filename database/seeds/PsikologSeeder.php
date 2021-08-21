<?php

use App\Models\Kota;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class PsikologSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $kota = Kota::all();
        $i = 0;
        foreach ($kota as $k) {
            for ($j = 1; $j <= 2; $j++) {
                if ($k->id == $k->id) {
                    $explode = explode(' ', $faker->name());
                    $username = implode('', $explode);
                    $user = User::create([
                        "username" => strtolower($username),
                        "email" => $faker->safeEmail,
                        "nama_lengkap" => $faker->name(),
                        "password" => '$2y$10$XO3V58WgB6scMrFpTs2k5uUe3IwABy6CaJq1t/b0M4jwZCPkZ.1Ku',
                        "email_verified_at" => now(),
                        "role_id" => 3,
                        "status" => 2,
                        "kota1_id" => $k->id,
                        "member_id" => 'sample/' . $k->id . '/' . $i++ . '',
                        'akun_verified_at' => now(),
                        'akun_verified_by' => 'admin'
                    ]);
                    $role = Role::find(3);        
                    $user->assignRole($role->name);
                }
            }
        }
    }
}
