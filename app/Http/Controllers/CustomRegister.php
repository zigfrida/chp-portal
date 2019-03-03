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
        $name = $request->input('name');
        $email = $request->input('email');
        // $password = $request->input('password');
        $telephone = $request->input('telephone');
        $address = $request->input('address');
        $salary = $request->input('salary');

        $hairType = $request->input('hairType'); // fix this later. don't just want to see 'on'

        $personType = $request->input('personType');

        $user = new User(); //same as App/User() but had to do it this way to resolve namespace conflicts
        $user->name = $name;
        // $user->password = Hash::make($password);
        $user->password = Hash::make(str_random(16));
        $user->email = $email;
        $user->telephone = $telephone;
        $user->address = $address;
        $user->salary = $salary;
        $user->hairType = $hairType;
        $user->personType = $personType;
        $user->role = 'standard';
        $user->save();

        // \Invytr::invite($user);

        Portfolio::create([
            'user_id' => $user['id'],
            'balance' => 0,
        ]);

        return redirect('/admin');
    }
}
