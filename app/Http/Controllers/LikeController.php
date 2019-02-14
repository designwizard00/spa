<?php

namespace App\Http\Controllers;

use App\Model\Like;
use Illuminate\Http\Request;
use App\Model\Reply;

class LikeController extends Controller
{

    public function __construct()
    {
        $this->middleware('JWT', ['except' => ['likeIt', 'unLikeIt']]);
    }


    public function likeIt(Reply $reply) {
        
        $reply->like()->create(
            [
               //'user_id' => auth()->id();
               // becacuse we do not have authentication in 
               // place so we will hardode 1 for now
               'user_id' => '1'
            ]
        );
    }

    public function unLikeIt(Reply $reply) {
        //for future when we have authentication in place uncomment first line
        // $reply->like->where(['user_id', auth()->id()])->first()->delete();
        $reply->like->where('user_id', '1')->first()->delete();
    }
    

 

  

   

    
}
