<?php

namespace App\Http\Controllers;

use App\helpers\collection;
use App\Http\Resources\FriendsCollection;
use App\Http\Resources\FriendsResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @group Friendship / connection
 * @authenticated
 */
class FriendshipController extends Controller
{
    public $size = 30;
    public $number = 1;

    /** 
     * List friends
     * data user yang sudah terkoneksi sebagai teman
     * @queryParam page integer nomor halaman. No-example
     * @queryParam per_page integer jumlah per halaman. No-example
     * @queryParam cari string cari username. No-example
     * @response {
     *   [
     *      id: 1,
     *      username: "john",
     *      nama_lengkap: null,
     *      member_id: null,
     *      pivot: []
     *   ]
     * }
     */
    public function friends(){
        if(Request()->has('per_page') AND !empty(Request()->per_page))
            $this->size = Request()->input('per_page');

        if(Request()->has('page') AND !empty(Request()->page))
            $this->number = Request()->input('page');
        //user login
        $user = Auth::user();
        //list friend
        $friends = $user->friends;
        //gunakan paging
        $data = (new collection($friends))->paginate($this->size,null,$this->number)->appends(Request()->input());
        return new FriendsCollection($data);
    }

    /** 
     * List Blocked friends
     * data user yang yang diblock oleh user login
     * @queryParam page integer nomor halaman. No-example
     * @queryParam per_page integer jumlah per halaman. No-example
     * @queryParam cari string cari username. No-example
     * @response {
     *   [
     *      id: 1,
     *      username: "john",
     *      nama_lengkap: null,
     *      member_id: null,
     *      pivot: []
     *   ]
     * }
     */
    public function blocks(){
        if(Request()->has('per_page') AND !empty(Request()->per_page))
            $this->size = Request()->input('per_page');

        if(Request()->has('page') AND !empty(Request()->page))
            $this->number = Request()->input('page');
        //user login
        $user = Auth::user();
        //list friend
        $blocked = $user->blocked_friends;
        //gunakan paging
        $data = (new collection($blocked))->paginate($this->size,null,$this->number)->appends(Request()->input());
        return new FriendsCollection($data);
    }

    /** 
     * List friends request
     * data permintaan pertemanan dari user lain
     * @queryParam page integer nomor halaman. No-example
     * @queryParam per_page integer jumlah per halaman. No-example
     * @queryParam cari string cari username. No-example
     * @response {
     *   [
     *      id: 1,
     *      username: "john",
     *      nama_lengkap: null,
     *      member_id: null,
     *      pivot: []
     *   ]
     * }
     */
    public function listRequest(){
        if(Request()->has('per_page') AND !empty(Request()->per_page))
            $this->size = Request()->input('per_page');

        if(Request()->has('page') AND !empty(Request()->page))
            $this->number = Request()->input('page');
        //user login
        $user = Auth::user();
        //list friend
        $req = $user->friend_requests;
        //gunakan paging
        $data = (new collection($req))->paginate($this->size,null,$this->number)->appends(Request()->input());
        return new FriendsCollection($data);
    }

    /** 
     * Kirim friends request
     * kirim permintaan pertemanan ke user lain
     * @bodyParam target_id integer id user target. No-example
     * @response {
     *   [
     *      status: "success",
     *      message: "silahkan tunggu",
     *      data: []
     *   ]
     * }
     */
    public function friendRequest(){
        //user login
        $user = Auth::user();
        $target = User::find(Request()->target_id);
        //kirim request
        return $user->sendConnectionRequest($target);
    }

    /** 
     * Approval friends request
     * menyetujui permintaan pertemanan ke user lain
     * @bodyParam request_id integer id request. No-example
     * @response {
     *   [
     *      status: "success",
     *      message: "Anda telah menyetujui permintaan pertemanan",
     *   ]
     * }
     */
    public function approve(){
        //user login
        $user = Auth::user();
        //kirim request
        return $user->acceptConnectionRequest(Request()->request_id);
    }

    /** 
     * Reject friends request
     * menolak permintaan pertemanan ke user lain
     * @bodyParam request_id integer id request. No-example
     * @response {
     *   [
     *      status: "success",
     *      message: "Anda telah menolak permintaan pertemanan",
     *   ]
     * }
     */
    public function reject(){
        //user login
        $user = Auth::user();
        //kirim request
        return $user->rejectConnectionRequest(Request()->request_id);
    }

    /** 
     * Block user
     * block user
     * @bodyParam target_id integer id target. No-example
     * @response {
     *   [
     *      status: "success",
     *      message: "Anda telah mem-block user",
     *   ]
     * }
     */
    public function block(){
        //user login
        $user = Auth::user();
        $target = User::find(Request()->target_id);
        //kirim request
        return $user->blockUser($target);
    }

    /** 
     * UnBlock user
     * unblock user
     * @bodyParam target_id integer id target. No-example
     * @response {
     *   [
     *      status: "success",
     *      message: "Anda telah meng-unblock user",
     *   ]
     * }
     */
    public function unblock(){
        //user login
        $user = Auth::user();
        $target = User::find(Request()->target_id);
        //kirim request
        return $user->unblockUser($target);
    }

    /** 
     * Unfriend user
     * unfriend user
     * @bodyParam target_id integer id target. No-example
     * @response {
     *   [
     *      status: "success",
     *      message: "user unfriend!",
     *   ]
     * }
     */
    public function unfriend(){
        //user login
        $user = Auth::user();
        $target = User::find(Request()->target_id);
        //kirim request
        return $user->unfriendUser($target);
    }
}
