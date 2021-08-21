<?php
/* 
* friendship sistem
* 2003dendy@gmail.com
*/
namespace App\Traits;

use App\Models\Friendship;
use App\Models\User;
use App\Notifications\ConnectionAccepted;
use App\Notifications\RequestConnectionFriend;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

trait FriendConnection
{
    //model connection
    public $connection_model; 
    //status connection
    public $connection_status='tidak terkoneksi';

    //check connection
    public function hasConnectionWith($target){
        $myConnection = $this->isMyConnection($target);
        $urConnection = $this->isYourConnection($target);

        if(is_null($myConnection) AND is_null($urConnection))
            return false;

        return true;
    } 

    //cek my connection
    public function isMyConnection($target){
        $connection = Friendship::where(['first_user'=>$this->id,'second_user'=>$target->id])->first();

        if(!is_null($connection)){
            $this->connection_model = $connection;
            $this->connection_status = $connection->status;
        }

        return $connection;
    }

    //cek their connection
    public function isYourConnection($target){
        $connection = Friendship::where(['second_user'=>$this->id,'first_user'=>$target->id])->first();

        if(!is_null($connection)){
            $this->connection_model = $connection;
            $this->connection_status = $connection->status;
        }

        return $connection;
    }

    //send request
    public function sendConnectionRequest($target){
        //@TODO
        //kirim notif
        //log
        
        //cek apakah target tersedia
        if(is_null($target))
            return ['status'=>'failed','message'=>'user tidak ditemukan'];

        //jika first==second
        if($this->id==$target->id)
        return ['status'=>'failed','message'=>'target user tidak valid'];

        //cek apakah sudah punya connection
        if($this->hasConnectionWith($target)){
            if($this->connection_status=='blocked')
                return ['status'=>'failed','message'=>'status blocked!'];

            return ['status'=>'failed','message'=>'user sudah terkoneksi atau masih menunggu konfirmasi koneksi'];
        }
        $req = Friendship::create([
            'first_user'=>$this->id, //pengirim
            'second_user'=>$target->id, //pengirim
            'acted_user'=>$this->id,
            'status'=> Friendship::PENDING
        ]);

        $user = User::find($target->id);
        $user->notify(new RequestConnectionFriend($this->id));

        return ['status'=>'success','message'=>'silahkan tunggu konfirmasi dari user yang bersangkutan','data'=>$req];
    }

    //accept request
    public function acceptConnectionRequest($requestID){
        //@TODO
        //kirim notifn
        //log

        $request = Friendship::find($requestID);

        //jika tidak ada request
        if(is_null($request))
            return ['status'=>'failed','message'=>'request tidak ditemukan'];

        //jika bukan target user
        if($request->second_user != $this->id OR $request->status != Friendship::PENDING)
            return ['status'=>'failed','message'=>'data tidak valid!'];

        $req = $request->update([
            'acted_user'=>$this->id,
            'status'=> Friendship::CONFIRMED
        ]);

        $user = User::find($request->second_user);
        $user->notify(new ConnectionAccepted($request->first_user));

        if($req){
            return ['status'=>'success','message'=>'Anda telah menerima permintaan pertemanan'];
        }
    }

    //reject request
    public function rejectConnectionRequest($requestID){
        //@TODO
        //kirim notif
        //log

        $request = Friendship::find($requestID);

        //jika tidak ada request
        if(is_null($request))
            return ['status'=>'failed','message'=>'request tidak ditemukan'];

        //jika bukan target user atau bukan pending request
        if($request->second_user != $this->id OR $request->status != Friendship::PENDING)
            return ['status'=>'failed','message'=>'data tidak valid!'];
        
        //reject == delete
         if($request->delete()){
            return ['status'=>'success','message'=>'Anda telah menolak permintaan pertemanan'];
         }
    }

    //cek apakah target adalah teman
    public function isFriend($target){
        if($this->hasConnectionWith($target) AND $this->connection_status == Friendship::CONFIRMED){
            return true;
        }

        return false;
    }

    //cek apakah target status pending
    public function isPending($target){
        if($this->hasConnectionWith($target) AND $this->connection_status == Friendship::PENDING){
            return true;
        }

        return false;
    }

    //cek apakah target diblock
    public function isBlocked($target){
        if($this->hasConnectionWith($target) AND $this->connection_status == Friendship::BLOCKED){
            return true;
        }

        return false;
    }


    //block user
    public function blockUser($target){
        if(is_null($target)){
            return ['status'=>'failed','message'=>'data tidak valid!'];
        }

        //cek apakah ada koneksi
        if($this->hasConnectionWith($target)){
            $connection = $this->connection_model;
            //blok jika status belum diblok
            if($this->connection_status !== Friendship::BLOCKED){
                $connection->update([
                    'status'=> Friendship::BLOCKED,
                    'acted_user'=>$this->id
                ]);
            }
        }else{
            //buat connection baru dengan status block
            if($target->id == $this->id){
                return ['status'=>'failed','message'=>'data tidak valid!'];
            }else{
                Friendship::create([
                    'first_user'=>$this->id, 
                    'second_user'=>$target->id, 
                    'acted_user'=>$this->id,
                    'status'=> Friendship::BLOCKED,
                ]);
            }
            
        }

        return ['status'=>'success','message'=>'user blocked!'];
    }

    //unblock user
    public function unblockUser($target){
        //cek apakah dalam status block
        if($this->hasConnectionWith($target) AND $this->connection_status==Friendship::BLOCKED){
            $connection = $this->connection_model;
            //delete
            $connection->delete();
            return ['status'=>'success','message'=>'user unblocked!'];
        }

        return ['status'=>'failed','message'=>'data tidak valid'];
    }

    //unfriend user
    public function unfriendUser($target){
        //cek apakah dalam status friend
        if($this->hasConnectionWith($target) AND $this->connection_status==Friendship::CONFIRMED){
            $connection = $this->connection_model;
            //delete
            $connection->delete();
            return ['status'=>'success','message'=>'user unfriend!'];
        }

        return ['status'=>'failed','message'=>'data tidak valid'];
    }

    //======================== functions to get friends attribute =========================
	// friendship that this user started
	protected function friendsOfThisUser()
	{
        if(Request()->has('cari')){
            return $this->belongsToMany(User::class, 'friendships', 'first_user', 'second_user')
                ->select('users.id','users.username','users.nama_lengkap','users.member_id','users.photo_profile','users.kota1_id','users.bidang_id')
                ->with(['dataKota1','dataKota1.dataProvinsi','dataBidang'])
                ->withPivot('status')
                ->wherePivot('status', 'confirmed')
                ->where('users.username','like','%'.Request()->cari.'%')
                ->orWhere('users.nama_lengkap','like','%'.Request()->cari.'%');
        }else{
            return $this->belongsToMany(User::class, 'friendships', 'first_user', 'second_user')
                ->select('users.id','users.username','users.nama_lengkap','users.member_id','users.photo_profile')
                ->with(['dataKota1','dataKota1.dataProvinsi','dataBidang'])
                ->withPivot('status')
                ->wherePivot('status', 'confirmed');
        }
	}

	// friendship that this user was asked for
	protected function thisUserFriendOf()
	{
        if(Request()->has('cari')){
            return $this->belongsToMany(User::class, 'friendships', 'second_user', 'first_user')
                ->select('users.id','users.username','users.nama_lengkap','users.member_id','users.photo_profile')
                ->withPivot('status')
                ->wherePivot('status', 'confirmed')
                ->where('users.username','like','%'.Request()->cari.'%')
                ->orWhere('users.nama_lengkap','like','%'.Request()->cari.'%');
        }else{
            return $this->belongsToMany(User::class, 'friendships', 'second_user', 'first_user')
                ->select('users.id','users.username','users.nama_lengkap','users.member_id','users.photo_profile')
                ->withPivot('status')
                ->wherePivot('status', 'confirmed');
        }
	}

	// accessor allowing you call $user->friends
	public function getFriendsAttribute()
	{
		if ( ! array_key_exists('friends', $this->relations)) $this->loadFriends();
		return $this->getRelation('friends');
	}

	protected function loadFriends()
	{
		if ( ! array_key_exists('friends', $this->relations))
		{
		    $friends = $this->mergeFriends();
		    $this->setRelation('friends', $friends);
	    }
	}

	protected function mergeFriends()
	{
		if($temp = $this->friendsOfThisUser)
		    return $temp->merge($this->thisUserFriendOf);
		
		return $this->thisUserFriendOf;
	}
//======================== end functions to get friends attribute =========================

//====================== functions to get blocked_friends attribute ============================

	// friendship that this user started but now blocked
	protected function friendsOfThisUserBlocked()
	{
        if(Request()->has('cari')){
            return $this->belongsToMany(User::class, 'friendships', 'first_user', 'second_user')
                ->select('users.id','users.username','users.nama_lengkap','users.member_id')
                ->withPivot('status', 'acted_user')
                ->wherePivot('status', 'blocked')
                ->wherePivot('acted_user', $this->id)
                ->where('users.username','like','%'.Request()->cari.'%')
                ->orWhere('users.nama_lengkap','like','%'.Request()->cari.'%');
        }else{
            return $this->belongsToMany(User::class, 'friendships', 'first_user', 'second_user')
                ->select('users.id','users.username','users.nama_lengkap','users.member_id')
                ->withPivot('status', 'acted_user')
                ->wherePivot('status', 'blocked')
                ->wherePivot('acted_user', $this->id);
        }
	}

	// friendship that this user was asked for but now blocked
	protected function thisUserFriendOfBlocked()
	{
        if(Request()->has('cari')){
            return $this->belongsToMany(User::class, 'friendships', 'second_user', 'first_user')
                ->select('users.id','users.username','users.nama_lengkap','users.member_id')
                ->withPivot('status', 'acted_user')
                ->wherePivot('status', 'blocked')
                ->wherePivot('acted_user', $this->id)
                ->where('users.username','like','%'.Request()->cari.'%')
                ->orWhere('users.nama_lengkap','like','%'.Request()->cari.'%');
        }else{
            return $this->belongsToMany(User::class, 'friendships', 'second_user', 'first_user')
                ->select('users.id','users.username','users.nama_lengkap','users.member_id')
                ->withPivot('status', 'acted_user')
                ->wherePivot('status', 'blocked')
                ->wherePivot('acted_user', $this->id);
        }
	}

	// accessor allowing you call $user->blocked_friends
	public function getBlockedFriendsAttribute()
	{
		if ( ! array_key_exists('blocked_friends', $this->relations)) $this->loadBlockedFriends();
			return $this->getRelation('blocked_friends');
	}

	protected function loadBlockedFriends()
	{
		if ( ! array_key_exists('blocked_friends', $this->relations))
		{
			$friends = $this->mergeBlockedFriends();
			$this->setRelation('blocked_friends', $friends);
		}
	}

	protected function mergeBlockedFriends()
	{
		if($temp = $this->friendsOfThisUserBlocked)
			return $temp->merge($this->thisUserFriendOfBlocked);
		else
			return $this->thisUserFriendOfBlocked;
	}
// ======================================= end functions to get block_friends attribute =========

    //list friend request dari orang lain
    public function friend_requests()
    {
        if(Request()->has('cari')){
            return $this->hasMany(Friendship::class, 'second_user')
                ->select('friendships.id','friendships.created_at','users.username','users.nama_lengkap','users.photo_profile','users.id as user_id')
                ->leftJoin('users','users.id','=','friendships.first_user')
                ->where('friendships.status', 'pending')
                ->where('users.username','like','%'.Request()->cari.'%')
                ->orWhere('users.nama_lengkap','like','%'.Request()->cari.'%');
        }else{
            return $this->hasMany(Friendship::class, 'second_user')
                ->select('friendships.id','friendships.created_at','users.username','users.nama_lengkap','users.photo_profile','users.id as user_id')
                ->leftJoin('users','users.id','=','friendships.first_user')
                ->where('friendships.status', 'pending');
        }
            
    }

}
