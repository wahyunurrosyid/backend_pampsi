<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification as Notif;
use App\Models\TokenFcm;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public $database;
    public $auth;

    public function __construct()
    {
        $factory = (new Factory)
        ->withServiceAccount(base_path(). '/pampsimessage-firebase-adminsdk-bq3sz-33bcc29967.json');
        $this->auth = $factory->createAuth();
        $firestore = $factory->createFirestore();
        $this->database=$firestore->database();
    }
    public function storeChat(Request $req){
        $chatCollection = $this->database->collection('chat_thread')->documents();
        $resourceChat = [];
        if(isset($chatCollection)){
            $counter = 0;
            foreach($chatCollection as $value){
                if($value->penerima==$req->penerim||$value->pengirim==Auth::user()->id){
                    $resourceChat[$counter]=$value;
                    $counter++;
                }
            }
        }   

        if(!empty($resourceChat)){
            $this->database->collection('thread');
        }
    }
    public function sendNotificationChat(Request $req){
        $model=DB::table('token_fcm')->get();
        if(isset($model)){
            foreach($model as $value){
                if($value->user_id==$req->user_id){
                    $factory = (new Factory)->withServiceAccount(base_path() . env('PATH_FIRE_JSON'));
                    $messaging = $factory->createMessaging();
                    $message = CloudMessage::withTarget('token', $value->token)
                                        ->withNotification(Notif::create('Pesan baru','Anda telah menerima pesan baru'));
                    $messaging->send($message);
                    return response()->json([
                        'status'=>'success',
                        'message'=>'Berhasil kirim notifikasi'
                    ]);
                }
            }
        }
    }
}
