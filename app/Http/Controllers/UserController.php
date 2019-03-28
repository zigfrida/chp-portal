<?php

namespace App\Http\Controllers;

use App\User;
use App\PISummary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Storage;

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
        $class = $request->input('class');
        $user = new User(); //same as App/User() but had to do it this way to resolve namespace conflicts
        $user->name = $name;
        //$user->password = Hash::make(str_random(16));
        $user->password = '111111';
        $user->password = Hash::make($user->password);
        $user->email = $email;
        $user->telephone = $telephone;
        $user->address = $address;
        $user->class = $class;
        $user->role = 'standard';
        $user->save();

        // \Invytr::invite($user);

        PISummary::create([
            'user_id' => $user['id'],
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

    public function uploadFile(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $originalname = $file->getClientOriginalName();
            $extend = $file->getClientOriginalExtension();
            //    $request->image->store('upload/'.$id);
            Storage::disk('local')->put('/upload/'.$id.'/'.$originalname, $request->file);
            $request->image->move(public_path('upload/'.$id), $originalname);
        }

        $str = $id.'/portfolio';
        alert()->success('File got uploaded', 'Good Bye!');

        return redirect($str)->with('success', 'File uploaded!');
    }
}
