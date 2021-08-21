<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use App\Http\Resources\AgendaDokumentasiCollection;
use App\Models\Agenda;
use App\Models\AgendaDokumentasi;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Agenda
 * @authentication
 */
class AgendaDokumentasiController extends Controller
{
    /**
     * List Agenda Dokumentasi
     * @urlParam id integer
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @apiResource App\Http\Resources\AgendaDokumentasiCollection
     * @apiResourceModel App\Models\AgendaDokumentasi
     */
    public function listAgendaDokumentasi($id)
    {
        $agendaDokumentasi = QueryBuilder::for(AgendaDokumentasi::where('agenda_id',$id))
            ->join('agenda','agenda.id','agenda_dokumentasi.agenda_id')
            ->allowedSorts(['id','nama_kategori','judul','deskripsi','lokasi','start_date','end_date','fasilitas','pemateri','poster','visible'])
            ->allowedFilters(['id','nama_kategori','judul','deskripsi','lokasi','start_date','end_date','fasilitas','pemateri','poster','visible','agenda.judul'])
            ->jsonPaginate()->appends(Request()->input());

        return new AgendaDokumentasiCollection($agendaDokumentasi);
    }
    /**
     * Create Agenda Dokumentasi
     * untuk create agenda dokumentasi
     * @bodyParam agenda_id integer
     * @bodyParam objFile image
     */
    public function createAgendaDokumentasi(Request $req)
    {
        if(Request()->has('objFile')){
            $model = new AgendaDokumentasi();
            $model->fill($req->input());
            $model->objFile = $req->objFile;
            $validation = $model->validate();
            if(!$validation->fails()){
                $path = url('dokumentasi');
                $ex = $req->objFile->getClientOriginalExtension();
                $fileName = time().'.'.$ex;
                $model->file = $path.'/'.$req->agenda_id.'/'.$fileName;
                if($model->save()){
                    $req->objFile->move('dokumentasi/'.$req->agenda_id.'', $fileName, 'local');
                    return response()->json([
                        'status'=>'success',
                        'message'=>'Berhasil membuat dokumentasi',
                        'data'=>$model
                    ]);
                }
            }
            return response()->json([
                'status' => 'failed',
                'message' => 'data gagal disimpan!',
                'data' => ['errors'=>$validation->errors()]
            ]);

        }
        return response()->json([
            'status'=>'failed',
            'message'=>'File gambar harus diisi',
            'data'=>[]
        ],400);
    }
    /**
     * Delete Agenda Dokumentasi
     * @urlParam id integer
     */
    public function deleteAgendaDokumentasi($id)
    {
        $model = $this->findDataAgendaDokumentasi($id);
        if(@$model){
            $model->delete();
            return response()->json([
                'status'=>'success',
                'message'=>'Berhasil menghapus data',
                'data'=>$model
            ]);
        }
    }
    
    public function findDataAgenda($id){
        $model = Agenda::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }

    public function findDataAgendaDokumentasi($id){
        $model = AgendaDokumentasi::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }
}
