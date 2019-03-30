<?php

namespace App\Http\Controllers;

use App\ExtraInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ExtraInfoController extends Controller
{
        /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\User                $user
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $auditor = $request->input('auditor');
        $legal_counsel = $request->input('legal_counsel');
        $contact_info_name = $request->input('contact_info_name');
        $contact_info = $request->input('contact_info');

        ExtraInfo::where('id', 1)->update(['auditor' => $auditor,
         'legal_counsel' => $legal_counsel, 'contact_info_name' => $contact_info_name, 'contact_info' => $contact_info]);

        return redirect('/'.$id.'/portfolio');
    }
}
