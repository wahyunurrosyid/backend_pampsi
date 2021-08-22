<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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
}
