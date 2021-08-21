<?php

namespace App\Http\Controllers;

use App\Http\Resources\PengalamanKerjaCollection;
use Illuminate\Http\Request;
use App\Models\PengalamanKerja;
use Illuminate\Support\Facades\Auth;

/**
 * @group Pengalaman Kerja
 * @authenticated
 */
class PengalamanKerjaController extends Controller
{
    /**
     * List Pengalaman Kerja
     * list pengalaman tanpa pagging
     * @urlParam id int required
     * @responseFile storage/responses/user.pengalaman.json
     */
    public function listPengalamanKerja($id)
    {
        $model = PengalamanKerja::where('user_id',$id)->get();
        return new PengalamanKerjaCollection($model);
    }
    /**
     * create pengalaman Kerja
     * untuk create pengalaman
     * @bodyParam nama_perusahaan string required
     * @bodyParam posisi_jabatan string required
     * @bodyParam periode int required
     * 
     * @response{
     * "status": "success/failed",
     * "message": "Berhasil tambah pengalaman",
     * "data": "data"
     * }
     */
    public function createPengalamanKerja(Request $req)
    {
        $auth = Auth::user();
        $rules = [
            'nama_perusahaan' => 'required',
            'posisi_jabatan' => 'required',
            'periode' => 'required'
        ];
    
        $customMessages = [
            'required' => 'kolom :attribute harus diisi!'
        ];

        //validasi form
        $this->validate($req, $rules, $customMessages);

        $pengalaman = PengalamanKerja::create([
            'user_id' => $auth->id,
            'nama_perusahaan' => $req->nama_perusahaan,
            'posisi_jabatan' => $req->posisi_jabatan,
            'periode' => $req->periode,
            'keterangan' => $req->keterangan
        ]);

        if(!is_null($pengalaman)){
            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil tambah pengalaman',
                'data' => $pengalaman
            ]);
        }else{
            return response()->json([
                'status' => 'failed',
                'message' => 'Gagal tambah pengalaman',
                'data' => $pengalaman
            ]);
        }

    }
    /**
     * update pengalaman Kerja
     * untuk update pengalaman
     * @urlParam id required id user
     * @bodyParam nama_perusahaan string required
     * @bodyParam posisi_jabatan string required
     * @bodyParam periode int required
     * 
     * @response{
     * "status": "success/failed",
     * "message": "Berhasil update pengalaman",
     * "data": "data"
     * }
     */
    public function updatePengalamanKerja(Request $req,$id)
    {
        $pengalaman = PengalamanKerja::find($id);
        
        if(!is_null($pengalaman)){
            $pengalaman->update($req->all());
            $pengalaman->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Update pengalaman berhasil',
                'data' => $pengalaman
            ],200);
        }else{
            return response()->json([
                'status' => 'failed',
                'message' => 'pengalaman tidak ditemukan',
                'data' => $pengalaman
            ],402);
        }
    }
    /**
     * delete pengalaman Kerja
     * untuk hapus pengalaman
     * @urlParam id required id pengalaman
     * 
     * @response{
     * "status": "success/failed",
     * "message": "Berhasil hapus pengalaman",
     * "data": "data"
     * }
     */
    public function deletePengalamanKerja($id)
    {
        $pengalaman = PengalamanKerja::find($id);
        if(!is_null($pengalaman)){
            $pengalaman->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Hapus pengalaman berhasil',
                'data' => $pengalaman
            ],200);
        }else{
            return response()->json([
                'status' => 'failed',
                'message' => 'pengalaman tidak ditemukan',
                'data' => $pengalaman
            ],402);
        }
    }
}
