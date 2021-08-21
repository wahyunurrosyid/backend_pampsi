<?php

namespace App\Traits;

use Exception;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Maatwebsite\Excel\Facades\Excel;

trait ApiResource
{
    //fungsi untuk menampilkan field
     /* 
    * menampilkan field
    * @param \Illuminate\Http\Request $request
    */
    public function showFields($request){
        $attributes = $this->attributes;
        $show = [];
        if($request->has("fields.$this->model") AND !empty($request->input("fields.$this->model"))){
            $req = $request->fields;
            $selects = explode(',', $req[$this->model]);
            if(count($selects)>0){//jika select kolom tidak kosong
                foreach($selects as $select){
                    if (in_array($select, $attributes)) {
                        $show[$select] = $this->{$select};
                    }
                }
            }else{//jika select kolom kosong, dianggap select *
                foreach($attributes as $select){
                    $show[$select] = $this->{$select};
                }
            }
        
        }else{
            foreach($attributes as $select){
                $show[$select] = $this->{$select};
            }
        }

        return $this->merge($show);
    }

    /* 
    * show data include
    */
    public function showIncludes($request){
        return $this->mergeWhen($this->requestedIncludes($request)->isNotEmpty(), [
            'relationships' => $this->relationships($request),
        ]);
    }

    /**
     * Customize the outgoing response for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Response  $response
     * @return void
     */

    public function requestedIncludes($request)
    {
        //jika tidak ada include, atau include kosong
        if (!$request->has("include") or empty($request->include)) {
            return collect([]);
        }

        $includes = collect(explode(',', $request->input("include")));

        $includes->each(function ($include) {
            if (!in_array($include, $this->allowedIncludes)) {
                throw new Exception("Data relasi tidak ditemukan : {$include}");
            }
        });

        return $includes;
    }
}
