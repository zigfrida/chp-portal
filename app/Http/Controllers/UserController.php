<?php

namespace App\Http\Controllers;

use App\User;
use App\PISummary;
use App\form_user;
use App\Signature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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

    // public function storeFormstack(Request $request, $id)
    // {
    //     $request->validate([
    //         'clientType' => 'bail|required',
    //     ]);
    //     if ($request->clientType == 'individual') { // user selected Individual
    //         $request->validate([
    //             'subscriber_name' => 'required',
    //             'city' => 'required',
    //             'street' => 'required',
    //             'postal_code' => 'required',
    //             'province' => 'required',
    //             'country' => 'required',
    //             'sin' => 'required',
    //             'phone' => 'required',
    //             'email' => 'required',
    //         ]);
    //     } elseif ($request->clientType == 'business') { // user selected Non-Individual
    //         $request->validate([
    //             'subscriber_name' => 'required',
    //             'street' => 'required',
    //             'city' => 'required',
    //             'postal_code' => 'required',
    //             'province' => 'required',
    //             'country' => 'required',
    //             'phone' => 'required',
    //             'email' => 'required',
    //             'business_number' => 'required',
    //             'signatory_first_name' => 'required',
    //             'signatory_last_name' => 'required',
    //             'official_capacity_or_title_of_authorized_signatory' => 'required',
    //         ]);
    //     }

    //     $redirectPath = '/'.$id.'/portfolio';
    //     // $user = DB::table('users')->where('id', $id)->get();
    //     DB::table('users')
    //         ->where('id', $id)
    //         ->update(['form_level' => 1]);

    //     return redirect($redirectPath);
    // }

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
        $user = new User(); //same as App/User() but had to do it this way to resolve namespace conflicts
        $user->name = $name;
        // $user->password = Hash::make(str_random(16));
        $user->password = '111111';
        $user->password = Hash::make($user->password);
        $user->email = $email;
        $user->role = 'standard';
        $user->save();

        // \Invytr::invite($user);

        form_user::create([
            'user_id' => $user['id'],
            'subscriber_name' => $user['name'],
        ]);

        PISummary::create([
            'user_id' => $user['id'],
        ]);

        Signature::create([
            'user_id' => $user['id'],
            'form_signature' => ' ',
            'sub_signature' => ' ',
        ]);

        return redirect('/admin')->with('success', 'User created!');
    }

    public function storeExisting(Request $request){
        $name = $request->input('subscriber_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $street = $request->input('street');
        $city = $request->input('city');
        $province = $request->input('province');
        $postal_code = $request->input('postal_code');
        $country = $request->input('country');

        $clientType = $request->input('clientType');
        $class = $request->input('class');

        $user = new User();
        $user->name = $name;
        // $user->password = Hash::make(str_random(16));
        $user->password = '111111';
        $user->password = Hash::make($user->password);
        $user->email = $email;
        $user->role = 'standard';
        $user->save();

        // \Invytr::invite($user);

        form_user::create([
            'user_id' => $user['id'],
            'subscriber_name' => $name,
            'class' => $class,
            'clientType' => $clientType,
            'street' => $street,
            'city' => $city,
            'province' => $province,
            'postal_code' => $postal_code,
            'country' => $country,
            'phone' => $phone,
            'email' => $email,
            'access_level' => 2,
            'form_level' => 2,
        ]);

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
