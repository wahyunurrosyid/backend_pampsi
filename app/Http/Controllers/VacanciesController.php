<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use App\Http\Resources\KategoriVacanciesCollection;
use App\Http\Resources\KategoriVacanciesResource;
use App\Http\Resources\VacanciesCollection;
use App\Http\Resources\VacanciesResource;
use App\Models\KategoriVacancies;
use App\Models\Vacancies;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Vacancies
 * @authenticated
 */
class VacanciesController extends Controller
{
    /**
     * List Vacancies
     * untuk list vacancies
     * @queryParam fields[agenda] string select kolom 'perusahaan','judul','kota_id','nama_kategori',
     * 'deskripsi','start_date','end_date','logo'
     * @queryParam filter[nama_kategori] string Filter by nama nama_kategori. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @queryParam include string get data relasi (dataKota)
     */
    public function listVacancies()
    {
        $now = Carbon::now()->toDateString();
        $model = QueryBuilder::for(Vacancies::where('end_date','>=',$now))
            ->allowedSorts(['perusahaan','judul','kota_id','nama_kategori','deskripsi','start_date','end_date','logo','created_at'])
            ->allowedFilters(['user_id','perusahaan','judul','kota_id','nama_kategori','deskripsi','start_date','end_date','logo','created_at',AllowedFilter::exact('id')])
            ->jsonPaginate()->appends(Request()->input());
        return new VacanciesCollection($model);
    }
    /**
     * Create Vacancies
     * untuk create vacancies
     * @bodyParam perusahaan string required
     * @bodyParam judul string required
     * @bodyParam kota_id integer required
     * @bodyParam nama_kategori string required
     * @bodyParam deskripsi string optional
     * @bodyParam start_date date optional
     * @bodyParam end_date date required
     * @bodyParam objLogo file optional
     */
    public function createVacancies(Request $req)
    {
        $model = new Vacancies;
        $model->fill($req->input());
        $model->objLogo=$req->objLogo;
        $model->user_id=Auth::user()->id;
        $validation = $model->validate();

        $image = $req->objLogo;
        if(!is_null($image)){
            $ex = $image->getClientOriginalExtension();
            $imageName = time().".".$ex;
            $model->logo=$imageName;
        }

        if(!$validation->fails()){
            $model->save();
            if(!is_null($image)){
                $image->move('vacancies/', $imageName, 'local');
            }
            activity()->causedBy(Auth::user()->id)->log('Berhasil membuat vacancies');
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new VacanciesResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Update Vacancies
     * untuk update vacancies
     * @urlParam id integer required
     * @bodyParam perusahaan string optional
     * @bodyParam judul string optional
     * @bodyParam kota_id integer optional
     * @bodyParam nama_kategori string optional
     * @bodyParam deskripsi string optional
     * @bodyParam start_date date optional
     * @bodyParam end_date date optional
     * @bodyParam objLogo file optional
     */
    public function updateVacancies(Request $req,$id)
    {
        $model = $this->findData($id);
        $model->fill($req->input());
        if(!is_null($req->objLogo)){
            $model->objLogo=$req->objLogo;
        }
        $validation = $model->validate();

        $image = $req->objLogo;
        if(!is_null($image)){
            $ex = $image->getClientOriginalExtension();
            $imageName = time().".".$ex;
            $model->logo=$imageName;
        }

        if(!$validation->fails()){
            $model->save();
            if(!is_null($image)){
                $image->move('vacancies/', $imageName, 'local');
            }
            activity()->causedBy(Auth::user()->id)->log('Berhasil mengubah vacancies');
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil diubah!',
                'data' => new VacanciesResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal diubah!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Delete Vacancies
     * untuk menghapus vacancies
     * @urlParam id integer required
     */
    public function deleteVacancies($id)
    {
        $model = $this->findData($id);
        if(!is_null($model)){
            $model->delete();
            activity()->causedBy(Auth::user()->id)->log('Berhasil menghapus vacancies');
            return response()->json([
                'status' => 'success',
                'message' => 'Data Vacancies berhasil dihapus',
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'Data Vacancies tidak ditemukan',
        ]);
    }
    /**
     * List Kategori Vacancies
     * untuk list kategori vacancies
     */
    public function listKategoriVacancies()
    {
        $kategori = QueryBuilder::for(KategoriVacancies::class)
            ->allowedSorts(['nama'])
            ->allowedFilters(['nama'])
            ->jsonPaginate()->appends(Request()->input());
        return new KategoriVacanciesCollection($kategori);
    }
    /**
     * Create Kategori Vacancies
     * untuk create kategori vacancies
     * @bodyParam nama string
     */
    public function createKategoriVacancies(Request $req)
    {
        $model = new KategoriVacancies;
        $model->fill($req->input());
        $validation = $model->validate();
        if (!$validation->fails()) {
            $model->save();
            activity()->causedBy(Auth::user()->id)->log('Berhasil membuat kategori vacancies');
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new KategoriVacanciesResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors' => $validation->errors()]
        ]);
    }
    /**
     * Update Kategori Vacancies
     * untuk update kategori vacancies
     * @urlParam nama string required
     * @bodyParam nama string 
     */
    public function updateKategoriVacancies(Request $req,$nama)
    {
        $urlNama = explode('%20',$nama);
        $implodeNama = implode(' ',$urlNama);
        $kategori = KategoriVacancies::where('nama',$implodeNama)->first();
        if(@$kategori){
            $kategori->update(['nama'=>$req->nama]);
            return response()->json([
                'status'=>'success',
                'message'=>'Berhasil update kategori vacancies',
                'data'=>$kategori
            ]);
        }
        return response()->json([
            'status'=>'failed',
            'message'=>'Kategori tidak ditemukan',
            'data'=>[]
        ]);
    }
    /**
     * Delete Kategori Vacancies
     * untuk delete kategori vacancies
     * @urlParam nama string required
     */
    public function deleteKategoriVacancies($nama)
    {
        $urlNama = explode('%20',$nama);
        $implodeNama = implode(' ',$urlNama);
        $kategori = KategoriVacancies::where('nama',$implodeNama)->first();
        if(@$kategori){
            $kategori->delete();
            return response()->json([
                'status'=>'success',
                'message'=>'Berhasil delete kategori vacancies',
                'data'=>$kategori
            ]);
        }
        return response()->json([
            'status'=>'failed',
            'message'=>'Kategori tidak ditemukan',
            'data'=>[]
        ]);
    }

    public function findData($id){
        $model = Vacancies::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }
}
