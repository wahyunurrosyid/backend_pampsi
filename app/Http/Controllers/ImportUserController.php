<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\DataAlumniImport;
use App\Imports\RegistrasiAkun;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

/**
 * @group Registrasi
 */
class ImportUserController extends Controller
{
    /**
     * Import Data Alumni UGM
     * untuk import data alumni
     * @authenticated
     * @bodyParam file file required
     */
    public function importAlumni(Request $req)
    {
        if(!is_null($req->file)){

            $this->validate($req,['file'=>'mimes:xlsx'],['mimes'=>'Format :attributes harus excel']);
    
            $file = $req->file;
            $excel = Excel::import(new DataAlumniImport, $file);
            if(!is_null($excel)){
                return response()->json([
                    'status' => 'success',
                    'message' => 'Berhasil import user!'
                ],200);
            }
        }
        
        return response()->json([
            'status'=>'failed',
            'message'=>'Data tidak ditemukan!'
        ]);
    }

    /**
     * Import Data User UGM
     * @authenticated
     * @bodyParam file file required
     */
    public function importUser(Request $req)
    {
        if(!is_null($req->file)){
            $this->validate($req,['file'=>'mimes:xlsx'],['mimes'=>'Format :attributes harus excel']);

            $file = $req->file;
            $excel = Excel::import(new RegistrasiAkun, $file);
            if(!is_null($excel)){
                return response()->json([
                    'status' => 'success',
                    'message' => 'Berhasil import user!'
                ],200);
            }
        }
    }
}
