<?php

namespace App\Http\Controllers;

use App\form_user;
use Illuminate\Http\Request;

class FormUserController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param \App\form_user $form_user
     *
     * @return \Illuminate\Http\Response
     */
    public function show(form_user $form_user)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\form_user $form_user
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(form_user $form_user)
    {
    }

    public function storeFormstack(Request $request, $id)
    {
        $user_id = \DB::table('form_users')
        ->select('user_id')
        ->where('id', $id)
        ->get();

        $request->validate([
            'clientType' => 'bail|required',
        ]);
        if ($request->clientType == 'individual') { // user selected Individual
            $request->validate([
                'subscriber_name' => 'required',
                'city' => 'required',
                'street' => 'required',
                'postal_code' => 'required',
                'province' => 'required',
                'country' => 'required',
                'sin' => 'required',
                'phone' => 'required',
                'email' => 'required',
            ]);
        } elseif ($request->clientType == 'business') { // user selected Non-Individual
            $request->validate([
                'subscriber_name' => 'required',
                'street' => 'required',
                'city' => 'required',
                'postal_code' => 'required',
                'province' => 'required',
                'country' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'business_number' => 'required',
                'signatory_first_name' => 'required',
                'signatory_last_name' => 'required',
                'official_capacity_or_title_of_authorized_signatory' => 'required',
            ]);
        }

        $redirectPath = '/'.$user_id[0]->user_id.'/portfolio';

        \DB::table('form_users')
            ->where('id', $id)
            ->update(['form_level' => 1]);
        if ($request->clientType == 'individual') {
            \DB::table('form_users')
                ->where('id', $id)
                ->update(['subscriber_name' => $request->subscriber_name,
                'clientType' => $request->clientType,
                'city' => $request->city,
                'province' => $request->province,
                'street' => $request->street,
                'postal_code' => $request->postal_code,
                'country' => $request->country,
                'sin' => $request->sin,
                'phone' => $request->phone,
                'email' => $request->email,
                'total_investment' => $request->total_investment,
                'ind_ck1' => $request->input('ind_ck1') !== null,
                'ind_ck2' => $request->input('ind_ck2') !== null,
                'ind_ck3' => $request->input('ind_ck3') !== null,
                'ind_ck4' => $request->input('ind_ck4') !== null,
                'ind_ck5' => $request->input('ind_ck5') !== null,
                'ind_ck6' => $request->input('ind_ck6') !== null,
                ]);
        } elseif ($request->clientType == 'business') {
            \DB::table('form_users')
                ->where('id', $id)
                ->update(['subscriber_name' => $request->subscriber_name,
                'clientType' => $request->clientType,
                'province' => $request->province,
                'street' => $request->street,
                'postal_code' => $request->postal_code,
                'country' => $request->country,
                'sin' => $request->sin,
                'phone' => $request->phone,
                'email' => $request->email,
                'business_number' => $request->business_number,
                'signatory_first_name' => $request->signatory_first_name,
                'official_capacity_or_title_of_authorized_signatory' => $request->official_capacity_or_title_of_authorized_signatory,
                'signatory_last_name' => $request->signatory_last_name,
                'total_investment' => $request->total_investment,
                'bus_ck1' => $request->input('bus_ck1') !== null,
                'bus_ck2' => $request->input('bus_ck2') !== null,
                'bus_ck3' => $request->input('bus_ck3') !== null,
                'bus_ck4' => $request->input('bus_ck4') !== null,
                'bus_ck5' => $request->input('bus_ck5') !== null,
                'bus_ck6' => $request->input('bus_ck6') !== null,
                'bus_ck7' => $request->input('bus_ck7') !== null,
                'bus_ck8' => $request->input('bus_ck8') !== null,
                'bus_ck9' => $request->input('bus_ck9') !== null,
                'bus_ck10' => $request->input('bus_ck10') !== null,
                ]);
        }

        return redirect($redirectPath);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\form_user           $form_user
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, form_user $form_user, $id)
    {
        $clientType = $request->input('clientType');

        $user_id = \DB::table('form_users')
            ->select('user_id')
            ->where('user_id', $id)
            ->get();

        $subscriber_name = $request->input('subscriber_input');
        $steet = $request->input('street');
        $city = $request->input('city');
        $province = $request->input('province');
        $postal_code = $request->input('postal_code');
        $country = $request->input('country');
        $phone = $request->input('phone');
        $total_investment = $request->input('total_investment');
        $class = $request->input('class');

        if ($clientType == 'individual') {
            $sin = $request->input('sin');
            \DB::table('form_users')
            ->where('user_id', $id)
            ->update(['subscriber_name' => $request->subscriber_name,
                'clientType' => $request->clientType,
                'class' => $request->class,
                'city' => $request->city,
                'province' => $request->province,
                'street' => $request->street,
                'postal_code' => $request->postal_code,
                'country' => $request->country,
                'sin' => $request->sin,
                'phone' => $request->phone,
                'email' => $request->email,
                'total_investment' => $request->total_investment,
                'ind_ck1' => $request->input('ind_ck1') !== null,
                'ind_ck2' => $request->input('ind_ck2') !== null,
                'ind_ck3' => $request->input('ind_ck3') !== null,
                'ind_ck4' => $request->input('ind_ck4') !== null,
                'ind_ck5' => $request->input('ind_ck5') !== null,
                'ind_ck6' => $request->input('ind_ck6') !== null,
                ]);

            \DB::table('form_users')
            ->where('user_id', $id)
            ->update(['access_level' => 1]);
        } elseif ($clientType == 'business') {
            $signatory_first_name = $request->input('signatory_first_name');
            $signatory_last_name = $request->input('signatory_last_name');
            $official_capacity_or_title_of_authorized_signatory = $request->input('official_capacity_or_title_of_authorized_signatory');
            $business_number = $request->input('business_number');
            \DB::table('form_users')
                ->where('user_id', $id)
                ->update(['subscriber_name' => $request->subscriber_name,
                'clientType' => $request->clientType,
                'class' => $request->class,
                'province' => $request->province,
                'street' => $request->street,
                'postal_code' => $request->postal_code,
                'country' => $request->country,
                'sin' => $request->sin,
                'phone' => $request->phone,
                'email' => $request->email,
                'business_number' => $request->business_number,
                'signatory_first_name' => $request->signatory_first_name,
                'official_capacity_or_title_of_authorized_signatory' => $request->official_capacity_or_title_of_authorized_signatory,
                'signatory_last_name' => $request->signatory_last_name,
                'total_investment' => $request->total_investment,
                'bus_ck1' => $request->input('bus_ck1') !== null,
                'bus_ck2' => $request->input('bus_ck2') !== null,
                'bus_ck3' => $request->input('bus_ck3') !== null,
                'bus_ck4' => $request->input('bus_ck4') !== null,
                'bus_ck5' => $request->input('bus_ck5') !== null,
                'bus_ck6' => $request->input('bus_ck6') !== null,
                'bus_ck7' => $request->input('bus_ck7') !== null,
                'bus_ck8' => $request->input('bus_ck8') !== null,
                'bus_ck9' => $request->input('bus_ck9') !== null,
                'bus_ck10' >= $request->input('bus_ck10') !== null, ]);

            \DB::table('form_users')
            ->where('user_id', $id)
            ->update(['access_level' => 1]);
        }
        $redirectPath = '/'.$user_id[0]->user_id.'/portfolio';

        return redirect($redirectPath);
    }

    public function storeSubAgreement(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\form_user $form_user
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(form_user $form_user)
    {
    }
}
