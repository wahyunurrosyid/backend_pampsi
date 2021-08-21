<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use App\Http\Resources\AgendaCollection;
use App\Http\Resources\AgendaParticipantCollection;
use App\Http\Resources\AgendaResource;
use App\Models\Agenda;
use App\Models\AgendaParticipant;
use App\Spatie\AgendaFilter;
use App\Spatie\AgendaParticipantFilter;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Agenda
 * @authenticated
 */
class AgendaController extends Controller
{
    /**
     * View Agenda
     * untuk view agenda
     * @urlParam id integer required
     * @apiResource App\Http\Resources\AgendaResource
     * @apiResourceModel App\Models\Agenda
     */
    public function viewAgenda($id)
    {
        $model = $this->findData($id);
        return new AgendaResource($model);
    }
    /**
     * List Agenda
     * untuk list agenda
     * @queryParam fields[agenda] string select kolom 'nama_kategori','judul','deskripsi','lokasi','start_date','end_date','fasilitas'
     * ,'pemater','poster','visible'
     * @queryParam filter[nama_kategori] string Filter by nama nama_kategori. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     */
    public function listAgenda()
    {
        $agenda = QueryBuilder::for(Agenda::class)
            ->allowedSorts(['nama_kategori','judul','deskripsi','lokasi','start_date','end_date','fasilitas','pemateri','poster','visible'])
            ->allowedFilters(AllowedFilter::custom('agenda', new AgendaFilter))
            ->jsonPaginate()->appends(Request()->input());

        return new AgendaCollection($agenda);
    }
    /**
     * Create Agenda
     * untuk create agenda
     * @bodyParam nama_kategori string required
     * @bodyParam judul string required
     * @bodyParam deskripsi text optional
     * @bodyParam lokasi string required
     * @bodyParam start_date dateTime required
     * @bodyParam end_date dateTime required
     * @bodyParam fasilitas string optional
     * @bodyParam pemateri string required
     * @bodyParam objPoster file optional
     * @apiResource App\Http\Resources\AgendaResource
     * @apiResourceModel App\Models\Agenda
     */
    public function createAgenda(Request $req)
    {
        $model = new Agenda;
        $model->fill($req->input());
        if(!is_null($req->objPoster))
            $model->objPoster=$req->objPoster;
        $validation = $model->validate();

        $image = $req->objPoster;
        if(!is_null($image)){
            $ex = $image->getClientOriginalExtension();
            $imageName = time().".".$ex;
            $model->poster=$imageName;
        }

        if(!$validation->fails()){
            $model->save();
            if(!is_null($image)){
                $image->move('agenda/', $imageName, 'local');
            }
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new AgendaResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Update Agenda
     * untuk update agenda
     * @bodyParam nama_kategori string optional
     * @bodyParam judul string optional
     * @bodyParam deskripsi text optional
     * @bodyParam lokasi string optional
     * @bodyParam start_date dateTime optional
     * @bodyParam end_date dateTime optional
     * @bodyParam fasilitas string optional
     * @bodyParam pemateri string optional
     * @bodyParam objPoster file optional
     * @apiResource App\Http\Resources\AgendaResource
     * @apiResourceModel App\Models\Agenda
     */
    public function updateAgenda(Request $req,$id)
    {
        $agenda = $this->findData($id);
        $agenda->fill($req->input());
        if(!is_null($req->objPoster)){
            $agenda->objPoster=$req->objPoster;
        }

        $validation = $agenda->validate();
        $image = $req->objPoster;
        if(!is_null($image)){
            $ex = $image->getClientOriginalExtension();
            $imageName = time().".".$ex;
            $agenda->poster=$imageName;
        }

        if(!$validation->fails()){
            $agenda->save();
            if(!is_null($image)){
                $image->move('agenda/', $imageName, 'local');
            }
            return response()->json([
                'status' => 'success',
                'message' => 'Agenda berhasil diupdate',
                'data' => new AgendaResource($agenda)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Delete Agenda
     * untuk hapus agenda
     * @urlParam id integer required
     */
    public function deleteAgenda($id)
    {
        $agenda = $this->findData($id);
        if(!is_null($agenda)){
            $agenda->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Data Agenda berhasil dihapus',
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'Data Agenda tidak ditemukan',
        ]);
    }

    /**
     * daftar agenda
     * @urlParam id integer id agenda
     * @urlPaaram idUser integer id user
     */
    public function daftarAgenda($id,$idPsikolog)
    {
        $model = AgendaParticipant::updateOrCreate(['agenda_id'=>$id,'user_id'=>$idPsikolog],['agenda_id'=>$id,'user_id'=>$idPsikolog]);
        return response()->json([
            'status'=>'success',
            'message'=>'Berasil mengikuti agenda',
            'data'=>$model
        ]);
    }

    /**
     * data participant agenda
     * @urlParam id integer id agenda
     */
    public function dataParticipantAgenda($id)
    {
        $agendaParticipant = QueryBuilder::for(AgendaParticipant::where('agenda_id',$id))
            ->allowedSorts(['agenda_id','user_id','created_at'])
            ->allowedFilters(AllowedFilter::custom('participant', new AgendaParticipantFilter($id)))
            ->jsonPaginate()->appends(Request()->input());

        return new AgendaParticipantCollection($agendaParticipant);
    }

    public function findData($id){
        $model = Agenda::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }
}
