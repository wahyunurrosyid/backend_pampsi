<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use App\Http\Resources\PortfolioCollection;
use App\Http\Resources\PortfolioResource;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @group Portfolio
 * @authenticated
 */
class PortfolioController extends Controller
{
    /**
     * list Portfolio
     * untuk list portfolio
     * @urlParam id integer required
     * @apiResource App\Http\Resources\PortfolioCollection
     * @apiResourceModel App\Models\Portfolio
     */
    public function listPortfolio($id)
    {
        $model = Portfolio::where('user_id',$id)->get();
        return new PortfolioCollection($model);
    }
    /**
     * view Portfolio
     * untuk view portfolio
     * @urlParam id integer required
     * @apiResource App\Http\Resources\PortfolioCollection
     * @apiResourceModel App\Models\Portfolio
     */
    public function viewPortfolio($id)
    {
        $auth = Auth::user();
        $model = Portfolio::where(['id'=>$id,'user_id'=>$auth->id])->first();
        return $model;
    }
    /**
     * Create Portfolio
     * untuk create portfolio
     * @bodyParam layanan string required
     * @bodyParam kategori string required
     * @bodyParam klien string required
     * @bodyParam start_date date required
     * @bodyParam end_date date required
     * @bodyParam type enum required (Project Based, Individual Service)
     * @bodyParam location text required
     * @bodyParam deskripsi text required
     * @bodyParam position string optional
     * @responseFile storage/responses/portfolio.create.json
     */
    public function createPortfolio(Request $req)
    {
        $auth = Auth::user();
        $model = new Portfolio();
        $model->fill($req->input());
        //validasi
        $validation = $model->validate();

        if(!$validation->fails()){
            $model->user_id = $auth->id;
            $model->save();
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new PortfolioResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * update Portfolio
     * untuk update portfolio
     * @urlParam id integer required
     * @bodyParam layanan string optional
     * @bodyParam kategori string optional
     * @bodyParam klien string optional
     * @bodyParam tanggal date optional
     * @responseFile storage/responses/portfolio.update.json
     */
    public function updatePortfolio(Request $req,$id)
    {
        $portfolio = $this->findData($id);
        //isi dengan data baru
        $portfolio->fill($req->input());
        //validasi input
        $validation = $portfolio->validate();
        //jika data valid
        if(!$validation->fails()){
            $portfolio->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Portfolio berhasil diupdate',
                'data' => new PortfolioResource($portfolio)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Delete Portfolio
     * untuk delete portfolio
     * @urlParam id integer required
     * @response{
     *       "status": "success",
     *       "message": "Data Portfolio berhasil dihapus"
     *   }
     */
    public function deletePortfolio($id)
    {
        $portfolio = $this->findData($id);
        
        if(!is_null($portfolio)){
            $portfolio->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Data Portfolio berhasil dihapus',
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'Data Portfolio tidak ditemukan',
        ]);
    }

    //find data
    public function findData($id){
        $model = Portfolio::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }
}
