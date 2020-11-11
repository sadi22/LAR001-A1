<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function create() {
        return view('registration.create');
    }

    public function processRegistration( Request $request ) {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::create([
            'email'     => $email,
            'name'      => $name,
            'password'  => $password
        ]);

        if($user) {
            return redirect()->route('tweets');
        }else {
            return 'No user created';
        }
    }
}
