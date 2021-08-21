<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");
        DB::table('role_has_permissions')->truncate();
        Role::truncate();
        Permission::truncate();
        DB::statement("SET foreign_key_checks=1");

        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        /* start list permission */
        //Permission::create(['name' => 'manage akun']);
        /* end list permission */

        //role admin
        $role = Role::create(['name' => 'ADMIN']);
        $role->givePermissionTo(Permission::all());

        //role kampus
        $role = Role::create(['name' => 'KAMPUS']);
        $role->givePermissionTo(Permission::all());

        //role psikolog
        $role = Role::create(['name' => 'PSIKOLOG']);
        //$role->givePermissionTo(Permission::all());

        //role public
        $role = Role::create(['name' => 'PUBLIC']);
        //$role->givePermissionTo(Permission::all());

        //role moderator
        $role = Role::create(['name' => 'MODERATOR']);

        //add admin dan kampus role
        $admin = User::where('username','admin')->first();
        if(!is_null($admin)){
            $admin->assignRole('ADMIN');
        }

        $kampus = User::where('username','kampus')->first();
        if(!is_null($kampus)){
            $kampus->assignRole('KAMPUS');
        }
    }
}
