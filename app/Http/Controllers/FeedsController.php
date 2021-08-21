<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Feed;
use App\Http\Resources\FeedCollection;
use App\Http\Resources\FeedResource;
use App\Exceptions\DataNotFound;
use App\Models\Like;
use App\Models\User;
use App\Notifications\LikeNotification;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Feeds
 * @authenticated
 */
class FeedsController extends Controller
{
    /**
     * List Feed
     * untuk list Feed
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @queryParam include string get data relasi (dataUser,comments,likers). 
     * @apiResource App\Http\Resources\FeedCollection
     * @apiResourceModel App\Models\Feed
     * */
    public function listFeeds()
    {
        $feeds = QueryBuilder::for(Feed::class)
            ->allowedIncludes(['dataUser','comments','likers'])
            ->allowedSorts(['user_id','content','created_at'])
            ->allowedFilters(['user_id','content','id'])
            ->jsonPaginate()->appends(Request()->input());

        return new FeedCollection($feeds);
    }
    /**
     * view Feeds
     * @urlParam id integer required
     */
    public function viewFeeds($id)
    {
        $feeds = Feed::find($id);
        $user = User::find(Auth::user()->id);
        return response()->json([
            'status'=>'success',
            'data'=>[
                'isLike'=>$user->hasLiked($feeds),
                'likers'=>$feeds->likers->count(),
                'feeds'=>$feeds,
                'dataComment'=>$feeds->comments,
                'dataUser'=>$feeds->dataUser,
            ]
        ]);
    }
    /**
     * MyFeeds
     * untuk melihat feed saya
     * @queryParam fields[feeds] string select kolom 'id','user_id','content','created_at','updated_at'
     * @responseFile storage/responses/feed.json
     */
    public function MyFeeds()
    {
        $auth=Auth::user();
        $model=Feed::where('user_id',$auth->id)->get();
        return new FeedCollection($model);
    }
    /**
     * Create Feed
     * untuk membuat feed
     * @bodyParam content string required
     * @responseFile storage/responses/feed.create.json
     */
    public function createFeed(Request $req)
    {
        $auth = Auth::user();
        $model = new Feed();
        $model->fill($req->input());
        $model->user_id=$auth->id;
        //validasi
        $validation = $model->validate();

        if(!$validation->fails()){
            $model->save();
            activity()->causedBy($auth->id)->performedOn(new Feed)->log('menambah feed baru');
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new FeedResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Update Feed
     * untuk update feed
     * @urlParam id integer required
     * @bodyParam content string
     * @responseFile storage/responses/feed.update.json
     */
    public function updateFeed(Request $req,$id)
    {
        $auth = Auth::user();
        $feed = $this->findData($id);
        $this->authorize('updateFeed',[Feed::class,$feed->user_id]);
        //isi dengan data baru
        $feed->fill($req->input());
        //validasi input
        $validation = $feed->validate();
        //jika data valid
        if(!$validation->fails()){
            $feed->save();
            activity()->causedBy($auth->id)->performedOn(new Feed)->log('mengubah feed');
            return response()->json([
                'status' => 'success',
                'message' => 'Feed berhasil diupdate',
                'data' => new FeedResource($feed)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Delete Feed
     * untuk delete feed
     * @urlParam id integer required
     * @responseFile storage/responses/feed.delete.json
     */
    public function deleteFeed($id)
    {
        $feed = $this->findData($id);
        $this->authorize('deleteFeed',[Feed::class,$feed->user_id]);
        if(!is_null($feed)){
            $feed->delete();
            activity()->causedBy(Auth::user()->id)->performedOn(new Feed)->log('menghapus feed');
            return response()->json([
                'status' => 'success',
                'message' => 'Data Feed berhasil dihapus',
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'Data Feed tidak ditemukan',
        ]);
    }
    /**
     * Like Feed
     * untuk like feed
     * @urlParam id integer required
     * @responseFile storage/responses/feed.like.json
     */
    public function likeFeed($id)
    {
        $auth = Auth::user();
        $feed = Feed::find($id);
        $user = User::find($auth->id);
        $user->like($feed);
        activity()->causedBy($auth->id)->performedOn(new Feed)->log('menyukai feed');
        $userNotif = User::find($feed->user_id);
        $userNotif->notify(new LikeNotification($feed,$auth,'Feed'));
        return response()->json([
            'status'=>'success',
            'message'=>'Berhasil like feed',
            'data'=>$user->like($feed)
        ]);
    }
    /**
     * Unlike Feed
     * untuk unlike feed
     * @urlParam id integer required
     * @responseFile storage/responses/feed.unlike.json
     */
    public function unLikeFeed($id)
    {
        $auth = Auth::user();
        $feed = Feed::find($id);
        $user = User::find($auth->id);
        $user->unlike($feed);
        activity()->causedBy($auth->id)->performedOn(new Feed)->log('unlike feed');
        return response()->json([
            'status'=>'success',
            'message'=>'Berhasil unlike feed',
            'data'=>$user->unlike($feed)
        ]);
    }


    //find data
    public function findData($id){
        $model = Feed::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }
}
