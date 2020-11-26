<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    public function showHome() {
        $tweets = DB::table('tweets')
            ->join('users', 'users.id', '=', 'tweets.user_id')
            ->get();
        return view('home')
            ->with('tweets', $tweets);
    }

    public function showProfile() {
        return view('profile.index');
    }
}
