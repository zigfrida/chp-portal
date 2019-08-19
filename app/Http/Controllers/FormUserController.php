<?php

namespace App\Http\Controllers;

use App\form_user;
use App\User;
use Redirect;
use Illuminate\Http\Request;
use Alert;
use Carbon\Carbon;

use Dompdf\Dompdf;
use Dompdf\Options;

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
    



        $request->validate([
            'clientType' => 'bail|required',
            'req_brokerage' => 'bail|required',
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
                'total_investment' => 'required',
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
                'business_number' => 'required',
                'signatory_first_name' => 'required',
                'signatory_last_name' => 'required',
                'official_capacity_or_title_of_authorized_signatory' => 'required',
            ]);
        }

        $redirectPath = '/'.$id.'/portfolio';

        if ($request->clientType == 'individual') {
            \DB::table('form_users')
                ->where('user_id', $id)
                ->update(['subscriber_name' => $request->subscriber_name,
                        'clientType' => $request->clientType,
                        'city' => $request->city,
                        'province' => $request->province,
                        'street' => $request->street,
                        'postal_code' => $request->postal_code,
                        'country' => $request->country,
                        'sin' => $request->sin,
                        'phone' => $request->phone,
                        'total_investment' => number_format($request->total_investment, 2, ".", ","),
                        'ind_ck1' => $request->input('ind_ck1') !== null,
                        'ind_ck2' => $request->input('ind_ck2') !== null,
                        'ind_ck3' => $request->input('ind_ck3') !== null,
                        'ind_ck4' => $request->input('ind_ck4') !== null,
                        'ind_ck5' => $request->input('ind_ck5') !== null,
                        'ind_ck6' => $request->input('ind_ck6') !== null,
                        'req_brokerage' => $request->input('req_brokerage'),
                        'yass_ck' => $request->input('yass_ck') !== null,
                    ]);
        } elseif ($request->clientType == 'business') {
            \DB::table('form_users')
                ->where('user_id', $id)
                ->update(['subscriber_name' => $request->subscriber_name,
                'clientType' => $request->clientType,
                'city' => $request->city,
                'province' => $request->province,
                'street' => $request->street,
                'postal_code' => $request->postal_code,
                'country' => $request->country,
                'phone' => $request->phone,
                'business_number' => $request->business_number,
                'signatory_first_name' => $request->signatory_first_name,
                'official_capacity_or_title_of_authorized_signatory' => $request->official_capacity_or_title_of_authorized_signatory,
                'signatory_last_name' => $request->signatory_last_name,
                'total_investment' => number_format($request->total_investment, 2, ".", ","),
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
                'req_brokerage' => $request->input('req_brokerage'),
                ]);
        }
        // store the INITIALS!
        \DB::table('signatures')
            ->where('user_id', $id)
            ->update([
                'form_signature' => $request->input('form_signature'),
            ]);
        // store the SIGNATURE!
        \DB::table('signatures')
            ->where('user_id', $id)
            ->update([
                'sub_signature' => $request->input('sub_signature'),
            ]);

        $registration_name = $request->registration_name ?? '';
        $registration_account_reference = $request->registration_account_reference ?? '';
        $registration_address = $request->registration_address ?? '';

        $delivery_contact = $request->delivery_contact ?? '';
        $delivery_telephone = $request->delivery_telephone ?? '';
        $delivery_account_reference = $request->delivery_account_reference ?? '';
        $delivery_address = $request->delivery_address ?? '';

        \DB::table('form_users')
            ->where('user_id', $id)
            ->update(
                [
                    'registration_name' => $registration_name,
                    'registration_account_reference' => $registration_account_reference,
                    'registration_address' => $registration_address,
                    'delivery_contact' => $delivery_contact,
                    'delivery_telephone' => $delivery_telephone,
                    'delivery_account_reference' => $delivery_account_reference,
                    'delivery_address' => $delivery_address,
                ]
            );

        // finished the first form
        \DB::table('form_users')
            ->where('user_id', $id)
            ->update(['form_level' => 1]);

        return redirect($redirectPath);
    }

    /**
     * Admin confirms that the data from the form is gucci.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\form_user           $form_user
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, form_user $form_user, $id)
    {
        $clientType = $request->input('clientType');

        $subscriber_name = $request->input('subscriber_name');

        // do class thing here
        $class = $request->class ?? '';
        $steet = $request->input('street');
        $city = $request->input('city');
        $province = $request->input('province');
        $postal_code = $request->input('postal_code');
        $country = $request->input('country');
        $phone = $request->input('phone');
        $total_investment = $request->input('total_investment');

        if ($clientType == 'individual') {
            \DB::table('form_users')
            ->where('user_id', $id)
            ->update([
                'subscriber_name' => $subscriber_name,
                'class' => $class,
                'clientType' => $request->clientType,
                'city' => $request->city,
                'province' => $request->province,
                'street' => $request->street,
                'postal_code' => $request->postal_code,
                'country' => $request->country,
                'sin' => $request->sin,
                'phone' => $request->phone,
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
            \DB::table('form_users')
                ->where('user_id', $id)
                ->update([
                    'subscriber_name' => $subscriber_name,
                    'class' => $class,
                    'clientType' => $request->clientType,
                    'province' => $request->province,
                    'street' => $request->street,
                    'postal_code' => $request->postal_code,
                    'city' => $request->city,
                    'country' => $request->country,
                    'sin' => $request->sin,
                    'phone' => $request->phone,
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
            \DB::table('form_users')
                ->where('user_id', $id)
                ->update(['access_level' => 1]);
        }


        // insert class A/B into DB

        \DB::table('form_users')
            ->where('user_id', $id)
            ->update(['access_level' => 2]);
        \DB::table('form_users')
            ->where('user_id', $id)
            ->update(['form_level' => 2]);


        /*
            "Jun 25, 2019".
            Pretend like signed_year1 does everything.
        */
        $today = Carbon::now();

        $formatted_date = $today->toFormattedDateString();
        
        \DB::table('form_users')
        ->where('user_id', $id)
        ->update(
            [
                'signed_year1' => $formatted_date,
            ]
        );

        $newPath = 'https://script.google.com/a/macros/chillspartners.com/s/AKfycbwIDFbA6G7JDss8S1ZaSB7jAwDlO_01HJCYIb5mJz1V/dev?user_id='.$id.'&name='.$subscriber_name.'&class='.$class.'&method=updateSpreadUser_idClassName';

        /**Saving subagreement into Google Drive */
        $user = \DB::table('form_users')
            ->join('users', 'form_users.user_id', '=', 'users.id')
            ->join('p_i_summaries', 'form_users.user_id', '=', 'p_i_summaries.user_id')
            ->join('signatures', 'form_users.user_id', '=', 'signatures.user_id')
            ->where('form_users.user_id', $id)->get();

        $htmlstring = view('pdf.subscription-filled', compact('user'))->render();
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $pdf = new Dompdf($options);
        $pdf->loadHtml($htmlstring);
        $pdf->setPaper('A4', 'Portrait');
        $pdf->render();
        $fileName = $user[0]->subscriber_name . '_Subscription_Agreement';
        $fileSave = $pdf->output();
        \Storage::cloud()->put($fileName, $fileSave);

        return redirect($newPath);
    }

    public function storeSubAgreement(Request $request, $id)
    {
        $signed_day1 = $request->signed_day1;
        $signed_month1 = $request->signed_month1;
        $signed_year1 = $request->signed_year1;

        // $registration_name = $request->registration_name ?? '';
        // $registration_account_reference = $request->registration_account_reference ?? '';
        // $registration_address = $request->registration_address ?? '';

        // $delivery_contact = $request->delivery_contact ?? '';
        // $delivery_telephone = $request->delivery_telephone ?? '';
        // $delivery_account_reference = $request->delivery_account_reference ?? '';
        // $delivery_address = $request->delivery_address ?? '';

        $risk_ck1 = $request->risk_ck1;
        $risk_ck2 = $request->risk_ck2;
        $risk_ck3 = $request->risk_ck3;
        $risk_ck4 = $request->risk_ck4;
        $risk_ck5 = $request->risk_ck5;
        $risk_ck6 = $request->risk_ck6;
        $risk_ck7 = $request->risk_ck7;
        $risk_chk8 = $request->risk_chk8;

        $request->validate([
            'risk_ck1' => 'required',
            'risk_ck2' => 'required',
            'risk_ck3' => 'required',
            'risk_ck4' => 'required',
            'risk_ck5' => 'required',
            'risk_ck6' => 'required',
            'risk_ck7' => 'required',
            'risk_chk8' => 'required',
        ]);

        // print_or_type_name missing. so is the picture img thingy. put that shit in!
        \DB::table('form_users')
            ->where('user_id', $id)
            ->update([
                'signed_day1' => $signed_day1,
                'signed_month1' => $signed_month1,
                'signed_year1' => $signed_year1,
                // 'registration_name' => $registration_name,
                // 'registration_account_reference' => $registration_account_reference,
                // 'registration_address' => $registration_address,
                // 'delivery_contact' => $delivery_contact,
                // 'delivery_telephone' => $delivery_telephone,
                // 'delivery_account_reference' => $delivery_account_reference,
                // 'delivery_address' => $delivery_address,
                'risk_ck1' => $risk_ck1,
                'risk_ck2' => $risk_ck2,
                'risk_ck3' => $risk_ck3,
                'risk_ck4' => $risk_ck4,
                'risk_ck5' => $risk_ck5,
                'risk_ck6' => $risk_ck6,
                'risk_ck7' => $risk_ck7,
                'risk_chk8' => $risk_chk8,
            ]);

        \DB::table('form_users')
            ->where('user_id', $id)
            ->update(['form_level' => 2]);

        $redirectPath = '/'.$id.'/'.'portfolio';

        return redirect($redirectPath);
    }

    public function updateSubAgreement(Request $request, $id)
    {
        $name = \DB::table('form_users')
                ->where('user_id', $id)
                ->get();

        $subscriber_name = $name[0]->subscriber_name;

        $signed_day1 = $request->signed_day1;
        $signed_month1 = $request->signed_month1;
        $signed_year1 = $request->signed_year1;

        $registration_name = $request->registration_name ?? '';
        $registration_account_reference = $request->registration_account_reference ?? '';
        $registration_address = $request->registration_address ?? '';

        $delivery_contact = $request->delivery_contact ?? '';
        $delivery_telephone = $request->delivery_telephone ?? '';
        $delivery_account_reference = $request->delivery_account_reference ?? '';
        $delivery_address = $request->delivery_address ?? '';
        $class = $request->class ?? '';

        // print_or_type_name missing. so is the picture img thingy. put that shit in!
        \DB::table('form_users')
            ->where('user_id', $id)
            ->update([
                'class' => $class,
                'registration_name' => $registration_name,
                'registration_account_reference' => $registration_account_reference,
                'registration_address' => $registration_address,
                'delivery_contact' => $delivery_contact,
                'delivery_telephone' => $delivery_telephone,
                'delivery_account_reference' => $delivery_account_reference,
                'delivery_address' => $delivery_address,
            ]);

        \DB::table('form_users')
            ->where('user_id', $id)
            ->update(['access_level' => 2]);

        $redirectPath = '/'.$id.'/'.'portfolio';
        $testPath = 'https://script.google.com/macros/s/AKfycbx7Of-_WXvFyY3XvB3pTVQvf3U2Mn3tMzkhKfbf1MtkRQPnciZc/dev?user_id='.$id.'&name='.$subscriber_name.'&class='.$class.'&method=updateSpreadUser_idClassName';
        return redirect($testPath);
    }

    public function updateProfile(Request $request, $id)
    {
        $old_name = \DB::table('users')
            ->select('name')
            ->where('id', $id)
            ->get();

        $current_name = \DB::table('form_users')
            ->select('subscriber_name')
            ->where('user_id', $id)
            ->get();

        $subscriber_name = $request->input('subscriber_name');
        $new_subscriber_name = $request->input('new_subscriber_name');
        
        // don't need email anymore: get from User table
        //$email = $request->input('email');
        $steet = $request->input('street');
        $city = $request->input('city');
        $province = $request->input('province');
        $postal_code = $request->input('postal_code');
        $country = $request->input('country');
        $phone = $request->input('phone');
        $phone_mobile = $request->input('phone_mobile');

        $email = $request->input('email');

        //This innformation will always be updated, dosen't matter if it is an admin or not. However, redirect path changes if changes were made by an admin, and the name of the client was also part of the change (affect path).
        \DB::table('form_users')
            ->where('user_id', $id)
            ->update([
                'street' => $request->street,
                'city' => $request->city,
                'province' => $request->province,
                'postal_code' => $request->postal_code,
                'country' => $request->country,
                'phone' => $request->phone,
                'phone_mobile' => $request->phone_mobile,
                'email' => $request->email,
        ]);

        \DB::table('users')
            ->where('id', $id)
            ->update([
                'email' => $email,
        ]);

        if (!auth()->user()->isAdmin()) {
            //Change made by client
            \DB::table('users')
                    ->where('id', $id)
                    ->update([
                        'name' => $subscriber_name,
                ]);

            \DB::table('form_users')
                ->where('user_id', $id)
                ->update([
                    'profile_changed' => 1,
            ]);

            return redirect('/'.$id.'/edit_profile')->with('success', 'Your request has been submitted, pending admin approval.');;

        } else {
            //Change made by admin
            $newPath = '';

            \DB::table('form_users')
                ->where('user_id', $id)
                ->update([
                    'profile_changed' => 0,
            ]);

            if ($old_name[0]->name != $current_name[0]->subscriber_name) {
                //Names, are not the same, changes were made by the client
                //Accept name change
                \DB::table('users')
                    ->where('id', $id)
                    ->update([
                        'name' => $request->input('new_subscriber_name'),
                ]);

                \DB::table('form_users')
                    ->where('user_id', $id)
                    ->update([
                        'subscriber_name' => $request->input('new_subscriber_name'),
                ]);

                $newPath = 'https://script.google.com/a/macros/chillspartners.com/s/AKfycbwIDFbA6G7JDss8S1ZaSB7jAwDlO_01HJCYIb5mJz1V/dev?user_id='.$id.'&name='.$new_subscriber_name.'&method=updateUserName';

        

            //return redirect('/'.$id.'/edit_profile');
            } elseif ($old_name[0]->name == $current_name[0]->subscriber_name) {
                //Client did not change name, but admin did
                //Both names are the same, but an admin changed user name
                \DB::table('users')
                    ->where('id', $id)
                    ->update([
                        'name' => $subscriber_name,
                ]);

                \DB::table('form_users')
                    ->where('user_id', $id)
                    ->update([
                        'subscriber_name' => $subscriber_name,
                ]);

                $newPath = 'https://script.google.com/a/macros/chillspartners.com/s/AKfycbwIDFbA6G7JDss8S1ZaSB7jAwDlO_01HJCYIb5mJz1V/dev?user_id='.$id.'&name='.$subscriber_name.'&method=updateUserName';
            //return redirect('/'.$id.'/edit_profile');
            } else {
                //means everything else was updated except name
                $newPath = 'https://script.google.com/a/macros/chillspartners.com/s/AKfycbwIDFbA6G7JDss8S1ZaSB7jAwDlO_01HJCYIb5mJz1V/dev?user_id='.$id.'&method=updateUserNameOnlyInvestor';
            }

            return redirect($newPath);
        }
    }

    public function updateProfileCheckboxes(Request $request, $id)
    {
        // get the user
        $user = \DB::table('form_users')
            ->where('user_id', $id)
            ->get();
        dd($user);


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
