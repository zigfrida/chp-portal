<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Portfolio;

class CustomRegister extends Controller
{
    public function foo(Request $request)
    {
        echo '<h1>User created!</h1>';
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        echo $name;
        echo '<br>';
        echo $email;
        echo '<br>';
        echo $password;
        echo '<br>';

        echo auth()->id();

        echo '<br>';

        $user = new User(); //same as App/User() but had to do it this way to resolve namespace conflicts
        $user->name = $name;
        $user->password = Hash::make($password);
        $user->email = $email;
        $user->role = 'standard';
        $user->save();

        \Invytr::invite($user);

        Portfolio::create([
            'user_id' => $user['id'],
            'balance' => 0,
        ]);
    }
}
