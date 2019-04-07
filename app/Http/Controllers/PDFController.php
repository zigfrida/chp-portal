<?php

namespace App\Http\Controllers;


use Config;
use DB;
use Dompdf\Dompdf;
use Dompdf\Options;

use Illuminate\Http\Request;

/*

documentation. need security
https://github.com/dompdf/dompdf/wiki/Usage

*/

class PDFController extends Controller
{
    public function pdf($id){




		// $pdf = \App::make('dompdf.wrapper');

		// $pdf->loadHtml($this->convert_html_to_pdf($id));
		// //$pdf->setPaper('A4', 'portriat');
        
        // return $pdf->stream();



	}

	public function test(){
		return view('pdf.subscription-filled')->render();
	}
public function filledform($id){

	$user = DB::table('form_users')->join('users', 'form_users.user_id', '=' , 'users.id')
															->join('p_i_summaries', 'form_users.user_id', '=', 'p_i_summaries.user_id')
															->where('form_users.user_id', $id)->get();
															

														  

	$htmlstring = view('pdf.subscription-filled', compact('user'))->render();
	$options = new Options();
	$options->set('defaultFont', 'Arial');

	//need security handling
	//$options->set('isRemoteEnabled', true);

	$pdf = new Dompdf($options);
	// $context = stream_context_create([ 
	// 	'ssl' => [ 
	// 		'verify_peer' => FALSE, 
	// 		'verify_peer_name' => FALSE,
	// 		'allow_self_signed'=> TRUE 
	// 	] 
	// ]);
		// $pdf->setHttpContext($context);

	$pdf->loadHtml($htmlstring);


	$pdf->setPaper('A4', 'Portrait');
	$pdf->render();

	return $pdf->stream();

}
    
}
