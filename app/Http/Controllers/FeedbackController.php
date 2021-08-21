<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

/**
 * @group Feedback
 * @unauthenticated
 */
class FeedbackController extends Controller
{
    /**
     * list feedback
     * @queryParam page
     * @queryParam per_page
     */
    public function listFeedback()
    {
        if(Request()->has('search')){
            if(Request()->search == ''){
                $model = Feedback::orderBy('created_at','desc')->paginate();
            }else{
                $model = Feedback::orderBy('created_at','desc')->where('isi','like','%'.Request()->search.'%')
                                ->orWhere('judul','like','%'.Request()->search.'%')->paginate();
            }
        }else{
            $model = Feedback::orderBy('created_at','desc')->paginate();
        }
        return $model;
    }
    /**
     * create feedback
     * @bodyParam judul
     * @bodyParam isi
     */
    public function createFeedback(Request $req)
    {
        $model = new Feedback;
        $model->fill($req->input());
        if($model->save()){
            return response()->json([
                'status'=>'success',
                'message'=>'Berhasil membuat feedback',
                'data'=>$model
            ]);
        }
    }
    /**
     * delete feedback
     * @urlParam id required
     */
    public function deleteFeedback($id)
    {
        $model = Feedback::find($id);
        if($model->delete()){
            return response()->json([
                'status'=>'success',
                'message'=>'Berhasil menghapus feedback',
                'data'=>$model
            ]);
        }
    }
}
