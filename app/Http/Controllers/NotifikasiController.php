<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Feed;
use App\Models\Forum;
use App\Models\Friendship;
use App\Models\Notifikasi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\DatabaseNotification;

/**
 * @group Notifikasi
 * @authenticated
 */
class NotifikasiController extends Controller
{
    /**
     * List Notifikasi
     * untuk list notifikasi
     * @bodyParam page integer required
     * @bodyParam per_page integer required
     */
    public function listNotifikasi(Request $req)
    {
        $auth = Auth::user();
        $list = [];
        foreach($auth->notifications  as $notif){
            if(array_key_exists('tipeModel',$notif->data)){
                $list[] = [
                    'idNotif'=>$notif->id,
                    'tipeModel'=>$notif->data['tipeModel'],
                    'idModel'=>$notif->data['idModel'],
                    'idUser'=>$notif->data['idUser'],
                    'keterangan'=>$notif->data['keterangan'],
                    'read_at'=>$notif->read_at,
                    'created_at'=>$notif->created_at
                ];
            }
        }

        return $this->paginate($list, $perPage = $req->per_page, $page = $req->page, $options = []);
    }
    /**
     * View Notifikasi
     * saat di view maka notifikasi akan hilang di list notifikasi
     * @urlParam id string required id notifikasi
     */
    public function viewNotifikasi($id)
    {
        $notifikasi = DatabaseNotification::find($id);
        $data = $notifikasi->data;
        switch($data['tipeModel']){
            case 'Feed':
                $model = Feed::find($data['idModel']);
                break;
            case 'Forum':
                $model = Forum::find($data['idModel']);
                break;
            case 'Artikel':
                $model = Artikel::find($data['idModel']);
                break;
            case 'Ebook':
                $model = Ebook::find($data['idModel']);
                break;
            case 'Connection':
                $model = 'Connection';
                break;
            default:
                $model = null;
        }
        if(!is_null($model)){
            $notifikasi->markAsRead();
            return response()->json([
                'status'=>'success',
                'message'=>'Berhasil view notifikasi',
                'data'=>$notifikasi
            ]);
        }else{
            return response()->json([
                'status'=>'failed',
                'message'=>'Halaman sudah tidak tersedia',
                'data'=>[]
            ]);
        }  
    }

    public function paginate($items, $per_page = 15, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator(array_values($items->forPage($page, $per_page)->toArray()), $items->count(), $per_page, $page, $options);
    }
}
