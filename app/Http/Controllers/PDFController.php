<?php

namespace App\Http\Controllers;


use Config;
use DB;
use Dompdf\Dompdf;
use Dompdf\Options;

use Illuminate\Http\Request;

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
    
}
