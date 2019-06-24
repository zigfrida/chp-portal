<?php

namespace App\Http\Controllers;

use DB;
use Dompdf\Dompdf;
use Dompdf\Options;

class PDFController extends Controller
{
    public function filledform($id)
    {
        if ($id != auth()->id() && \Auth::user()->role != 'admin') {
            abort(403);
        } else {
            $user = DB::table('form_users')
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

            //Storing pdf subagreement on Google Drive
            // $fileName = $user[0]->subscriber_name . '_Subscription_Agreement';
            // $fileSave = $pdf->output();

            // \Storage::cloud()->put($fileName, $fileSave);

            return $pdf->stream();
        }
    }

    public function test($id)
    {
        if ($id != auth()->id() && \Auth::user()->role != 'admin') {
            abort(403);
        } else {
            $user = DB::table('form_users')
                ->join('users', 'form_users.user_id', '=', 'users.id')
                ->join('p_i_summaries', 'form_users.user_id', '=', 'p_i_summaries.user_id')
                ->join('signatures', 'form_users.user_id', '=', 'signatures.user_id')
                ->where('form_users.user_id', $id)->get();

            return view('pdf.subscription-filled', compact('user'))->render();
        }
    }
}
