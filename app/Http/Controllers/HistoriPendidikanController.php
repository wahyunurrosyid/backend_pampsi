<?php

namespace App\Http\Controllers;

use App\Http\Resources\HistoriPendidikanCollection;
use App\Models\HistoriPendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @group Histori Pendidikan
 * @authenticated
 */
class HistoriPendidikanController extends Controller
{
    /**
     * List Histori Pendidikan
     * list histori pendidikan tanpa pagging
     * @urlParam id int required
     * @responseFile storage/responses/user.historiPendidikan.json
     */
    public function listHistoriPendidikan($id)
    {
        $model = HistoriPendidikan::where('user_id',$id)->get();
        return new HistoriPendidikanCollection($model);
    }
    /**
     * create histori pendidikan
     * untuk create histori pendidikan
     * @bodyParam tingkat string enum required 'SD','SMP','SMA','S1','S2','S3'
     * @bodyParam nama_lembaga_pendidikan string required
     * @bodyParam tahun_lulus int required
     * 
     * @response{
     * "status": "success/failed",
     * "message": "Berhasil tambah histori",
     * "data": "data"
     * }
     */
    public function createHistoriPendidikan(Request $req)
    {
        $auth = Auth::user();
        $rules = [
            'tingkat' => 'required',
            'nama_lembaga_pendidikan' => 'required',
            'tahun_lulus' => 'required'
        ];
    
        $customMessages = [
            'required' => 'kolom :attribute harus diisi!'
        ];

        //validasi form
        $this->validate($req, $rules, $customMessages);

        $histori = HistoriPendidikan::create([
            'user_id' => $auth->id,
            'tingkat' => $req->tingkat,
            'nama_lembaga_pendidikan' => $req->nama_lembaga_pendidikan,
            'tahun_lulus' => $req->tahun_lulus
        ]);

        if(!is_null($histori)){
            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil tambah histori pendidikan',
                'data' => $histori
            ]);
        }else{
            return response()->json([
                'status' => 'failed',
                'message' => 'Gagal tambah histori pendidikan',
                'data' => $histori
            ]);
        }
    }
    /**
     * update histori pendidikan
     * untuk create histori pendidikan
     * 
     * @urlParam id required id histori
     * @bodyParam tingkat string enum required 'SD','SMP','SMA','S1','S2','S3'
     * @bodyParam nama_lembaga_pendidikan string required
     * @bodyParam tahun_lulus int required
     * 
     * @response{
     * "status": "success/failed",
     * "message": "Berhasil update histori",
     * "data": "data"
     * }
     */
    public function updateHistoriPendidikan(Request $req)
    {
        $histori = HistoriPendidikan::find($req->id);
        
        if(!is_null($histori)){
            $histori->update($req->all());
            $histori->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Update histori pendidikan berhasil',
                'data' => $histori
            ],200);
        }else{
            return response()->json([
                'status' => 'failed',
                'message' => 'Histori pendidikan tidak ditemukan',
                'data' => $histori
            ],402);
        }
    }
    /**
     * delete histori pendidikan
     * untuk hapus histori pendidikan
     * 
     * @urlParam id required id histori
     * 
     * @response{
     * "status": "success/failed",
     * "message": "Berhasil hapus histori",
     * "data": "data"
     * }
     */
    public function deleteHistoriPendidikan(Request $req)
    {
        $histori = HistoriPendidikan::find($req->id);
        if(!is_null($histori)){
            $histori->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Hapus histori pendidikan berhasil',
                'data' => $histori
            ],200);
        }else{
            return response()->json([
                'status' => 'failed',
                'message' => 'Histori pendidikan tidak ditemukan',
                'data' => $histori
            ],402);
        }
    }
}
