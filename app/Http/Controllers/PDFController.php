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
	
	public function subform(){
		    //be sure this file exists, and works outside of web context etc.)
			//require("admin/store/orders/45/invoice/print");

//		$user = DB::table('form_users')->where('user_id', 2)->get();

		$htmlstring = view('pdf.subform-html')->render();
		$options = new Options();
		$options->set('defaultFont', 'Arial');
		$pdf = new Dompdf($options);
		$pdf->loadHtml($htmlstring);

		// $pdf = new Dompdf();
		// ob_start();
		// $htmlstring = view('pdf.form')->render();
		// $html = ob_get_contents();
		// ob_get_clean();
		// $pdf->loadHtml($html);

		$pdf->setPaper('A4', 'Portrait');
		$pdf->render();
		
		return $pdf->stream();


	}

	public function form(){
		//be sure this file exists, and works outside of web context etc.)
		//require("admin/store/orders/45/invoice/print");

//		$user = DB::table('form_users')->where('user_id', 2)->get();

	$htmlstring = view('pdf.form')->render();
	$options = new Options();
	$options->set('defaultFont', 'Arial');

	//need security handling
	$options->set('isRemoteEnabled', true);

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

	// $pdf = new Dompdf();
	// ob_start();
	// $htmlstring = view('pdf.form')->render();
	// $html = ob_get_contents();
	// ob_get_clean();
	// $pdf->loadHtml($html);

	$pdf->setPaper('A4', 'Portrait');
	$pdf->render();
	
	return $pdf->stream();


}
public function test(){
	//be sure this file exists, and works outside of web context etc.)
	//require("admin/store/orders/45/invoice/print");

//		$user = DB::table('form_users')->where('user_id', 2)->get();
return view('pdf.subscription-filled');
$htmlstring = view('pdf.subscription-filled')->render();
$options = new Options();
$options->set('defaultFont', 'Arial');

//need security handling
$options->set('isRemoteEnabled', true);

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

public function filledform(){

//return view('pdf.subscription-filled');


	$htmlstring = view('pdf.subscription-filled')->render();
	$options = new Options();
	$options->set('defaultFont', 'Arial');

	//need security handling
	$options->set('isRemoteEnabled', true);

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
