<?php

namespace App\Http\Controllers;

use App\User;
use App\PISummary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        // $password = $request->input('password');
        $telephone = $request->input('telephone');
        $address = $request->input('address');
        $salary = $request->input('salary');
        $class = $request->input('class');
        $user = new User(); //same as App/User() but had to do it this way to resolve namespace conflicts
        $user->name = $name;
        //$user->password = Hash::make(str_random(16));
        $user->password = '111111';
        $user->password = Hash::make($user->password);
        $user->email = $email;
        $user->telephone = $telephone;
        $user->address = $address;
        $user->salary = $salary;
        $user->class = $class;
        $user->role = 'standard';
        $user->save();

        // \Invytr::invite($user);

        PISummary::create([
            'user_id' => $user['id'],
            'class' => $user['class'],
            'name' => $user['name'],
        ]);

        return redirect('/admin')->with('success', 'User created!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\User                $user
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
    }
}
