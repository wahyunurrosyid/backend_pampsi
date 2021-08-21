<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CommandAdminAccount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'account:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Untuk create akun admin, role_id = 1';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //cari admin
        $find = User::where('role_id',1)->first();

        //jika sudah ada maka hapus
        if(!is_null($find)){

            $find->delete();

        }
        
        //lalu buat baru
        $user = new User;
        $user->username = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = app('hash')->make('12345678');
        $user->role_id = 1;
        $user->save();

        echo "Admin berhasil dibuat";
        
    }
}
