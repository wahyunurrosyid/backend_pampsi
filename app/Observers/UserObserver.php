<?php

namespace App\Observers;

use App\Jobs\ProcessVerifikasi;
use Spatie\Permission\Models\Role;

trait UserObserver {

    protected static function boot(){

        parent::boot();
        
        static::created(function($user){

            //cari role yg diassign
            $role = Role::find($user->role_id);
             //assign role sesuai id yg disimpan di data user
            $user->assignRole($role->name);

            dispatch(new ProcessVerifikasi($user));

        });

        static::updating(function($model){
            //set member id saat konfirmasi data oleh admin
            //cek jika ini adalah proses konfirmasi, bukan update data lainnya
            //cek jika disetujui admin
            if($model->getOriginal('status')==1 AND $model->status==2){
                $model->generateMemberID();
            }
        });

    }
}