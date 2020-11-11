<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TweetsController extends Controller
{
    //
    public function tweets() {
        $tweets = DB::table('tweets')
                ->join('users', 'users.id', '=', 'tweets.user_id')
                ->get();
        return view('tweets.all')->with( 'tweets', $tweets );
    }


    public function createTweet() {
        return view('tweets.create');
    }

    public function postTweet( Request $request ) {
        $body = $request->input('body');
        $current_user_id = User::latest()->first()->id;
        if($current_user_id) {
            Tweet::create([
                'user_id'   => $current_user_id,
                'body'      => $body,
                'created_at' => now()
            ]);
            return redirect()->route('tweets');
        }else {
            return redirect()->route('register');
        }
    }
}
