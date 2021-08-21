<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use App\Http\Resources\SurveyCollection;
use App\Http\Resources\SurveyResource;
use App\Models\Survey;
use App\Models\SurveyJawaban;
use App\Models\SurveySoal;
use Carbon\Carbon;
use Carbon\Exceptions\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\DB;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Survey
 * @authenticated
 */
class SurveyController extends Controller
{
    /**
     * View Survey
     * untuk view survey
     * @urlParam id string required
     * @queryParam fields[survey] string select kolom 'id','user_id','kategori','close'
     * ,'judul','keterangan','file_panduan'
     * @queryParam filter[id] string Filter by id.
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional 
     * @queryParam include string get data relasi (dataUser,dataSoal,dataJawaban). 
     */
    public function viewSurvey($id)
    {
        $model = QueryBuilder::for(Survey::where('id',$id))
            ->allowedSorts(['id','user_id','kategori','close','judul','keterangan','file_panduan'])
            ->allowedFilters(['id','user_id','kategori','close','judul','keterangan','file_panduan','visible','status_survey'])
            ->jsonPaginate()->appends(Request()->input());
        return new SurveyCollection($model);
    }
    /**
     * List Survey
     * untuk list survey
     * @queryParam fields[survey] string select kolom 'id','user_id','kategori','close'
     * ,'judul','keterangan','file_panduan'
     * @queryParam filter[id] string Filter by id.
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional 
     * @queryParam include string get data relasi (dataUser). 
     */
    public function listSurvey()
    {
        $model = QueryBuilder::for(Survey::orderBy('created_at','desc'))
            ->allowedSorts(['id','user_id','kategori','close','judul','keterangan','file_panduan'])
            ->allowedFilters(['id','user_id','kategori','close','judul','keterangan','file_panduan','visible','status_survey'])
            ->jsonPaginate()->appends(Request()->input());
        return new SurveyCollection($model);
    }
    /**
     * List Survey Public
     * @group Public API
     * @unauthenticated
     * @queryParam fields[survey] string select kolom 'id','user_id','kategori','close'
     * ,'judul','keterangan','file_panduan'
     * @queryParam filter[id] string Filter by id.
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional 
     * @queryParam include string get data relasi (dataUser,dataSoal,dataJawaban). 
     */
    public function listSurveyPublic()
    {
        $query = Survey::where('visible','public')->where('status_survey',1)->where('close','>=',Carbon::today()->format('Y-m-d'))->orderBy('created_at','desc');
        $model = QueryBuilder::for($query)
            ->allowedSorts(['id','user_id','kategori','close','judul','keterangan','file_panduan'])
            ->allowedFilters(['id','user_id','kategori','close','judul','keterangan','file_panduan','status_survey'])
            ->jsonPaginate()->appends(Request()->input());
        return new SurveyCollection($model);
    }
    /**
     * Create Survey
     * untuk create survey
     * @bodyParam kategori string required
     * @bodyParam close date required
     * @bodyParam judul string optional
     * @bodyParam keterangan string optional
     * @bodyParam objFile file optional
     */
    public function createSurvey(Request $req)
    {
        $auth = Auth::user();
        $model = new Survey;
        $model->fill($req->input());
        $model->id = IdGenerator::generate(['table' => 'survey', 'length' => 10, 'prefix' =>'S-']);
        $model->user_id = $auth->id;
        $model->objFile = $req->objFile;
        $validation = $model->validate();

        if(!is_null($model->objFile)){
            $ex = $model->objFile->getClientOriginalExtension();
            $fileName = time().".".$ex;
            $model->file_panduan = $fileName;
        }

        if(!$validation->fails()){
            $model->save();
            if(!is_null($model->objFile)){
                $model->objFile->move('survey/file_panduan/'.$auth->id.'', $fileName, 'local');
            }
            activity()->causedBy($auth->id)->log('Berhasil create survey');
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new SurveyResource($model)
            ]);
        }
    }
    /**
     * Update Survey
     * untuk update survey
     * @bodyParam kategori string optional
     * @bodyParam close date optional
     * @bodyParam judul string optional
     * @bodyParam keterangan string optional
     * @bodyParam objFile file optional
     */
    public function updateSurvey(Request $req,$id)
    {
        $auth = Auth::user();
        $model = $this->findData($id);
        $this->authorize('updateSurvey',[Survey::class,$model->user_id]);
        $model->fill($req->input());
        if(!is_null($req->objFile)){
            $model->objFile=$req->objFile;
        }
        $validation = $model->validate();
        $file = $req->objFile;
        if(!is_null($file)){
            $ex = $file->getClientOriginalExtension();
            $fileName = time().".".$ex;
            $model->file_panduan=$fileName;
        }
        if(!$validation->fails()){
            $model->save();
            if(!is_null($file)){
                $file->move('survey/file_panduan/'.$auth->id.'', $fileName, 'local');
            }
            activity()->causedBy($auth->id)->log('Berhasil update survey');
            return response()->json([
                'status' => 'success',
                'message' => 'Survey berhasil diupdate',
                'data' => new SurveyResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Delete Survey
     * untuk delete survey
     * @urlParam id string required
     */
    public function deleteSurvey($id)
    {
        $result = DB::transaction(function()use($id){
            try{
                $model = $this->findData($id);
                $this->authorize('deleteSurvey',[Survey::class,$model->user_id]);
                if(!is_null($model)){
                    $model->delete();
                    $deleteSurveySoal = SurveySoal::where('survey_id',$id);
                    if(!empty($deleteSurveySoal)){
                        $deleteSurveySoal->delete();
                    }
                    $deleteJawabanSurvey = SurveyJawaban::where('survey_id',$id);
                    if(!empty($deleteJawabanSurvey)){
                        $deleteJawabanSurvey->delete();
                    }
                    activity()->causedBy(Auth::user()->id)->log('Berhasil hapus survey');
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Data Survey berhasil dihapus',
                    ]);
                }

                DB::commit();
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Data Survey tidak ditemukan',
                ]);
            }catch(Exception $e){
                DB::rollBack();
                return $e->getMessage();
            }
        });

        return $result;
    }

    /**
     * Survey response by me
     * @queryParam page int optional
     * @queryParam per_page inte optional
     */
    public function responseByMe(Request $req)
    {
        $auth = Auth::user();
        if(@$auth){
            if($req->has('id')){
                $jawaban = SurveyJawaban::join('survey','survey.id','=','survey_jawaban.survey_id')
                                    ->select(
                                        'survey_jawaban.id as idSurveyJawaban',
                                        'survey.id as idSurvey',
                                        'survey_jawaban.survey_id as survey_id',
                                        'user_id as idPembuatSurvey',
                                        'kategori',
                                        'close',
                                        'judul',
                                        'keterangan',
                                        'file_panduan',
                                        'visible',
                                        'nama',
                                        'email',
                                        'jawaban'
                                    )
                                    ->where('survey_jawaban.id',$req->id)
                                    ->where('email',$auth->email)->paginate();
            }else{
                $jawaban = SurveyJawaban::join('survey','survey.id','=','survey_jawaban.survey_id')
                                    ->select(
                                        'survey_jawaban.id as idSurveyJawaban',
                                        'survey.id as idSurvey',
                                        'survey_jawaban.survey_id as survey_id',
                                        'user_id as idPembuatSurvey',
                                        'kategori',
                                        'close',
                                        'judul',
                                        'keterangan',
                                        'file_panduan',
                                        'visible',
                                        'nama',
                                        'email',
                                        'jawaban'
                                    )
                                    ->where('email',$auth->email)->paginate();
            }

            if(@$jawaban){
                return response()->json([
                    'status'=>'success',
                    'message'=>'Berhasil get response',
                    'data'=>$jawaban
                ]);
            }
        }
    }

    public function findData($id){
        $model = Survey::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }
}
