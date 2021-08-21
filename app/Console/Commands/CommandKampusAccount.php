<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CommandKampusAccount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'account:kampus';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Untuk create akun admin, role_id = 2';

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
        //cari admin kampus
        $find = User::where('role_id',2)->first();

        //jika sudah ada maka hapus
        if(!is_null($find)){
            $find->delete();
        }

        //lalu buat baru
        $user = new User;
        $user->username = 'kampus';
        $user->email = 'kampus@gmail.com';
        $user->password = app('hash')->make('12345678');
        $user->role_id = 2;
        $user->save();

        echo "Admin kampus berhasil dibuat";
    }
}
