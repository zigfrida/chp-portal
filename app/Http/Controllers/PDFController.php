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
  

		public function filledform($id){

				$user = DB::table('form_users')->join('users', 'form_users.user_id', '=' , 'users.id')
																			 ->join('p_i_summaries', 'form_users.user_id', '=', 'p_i_summaries.user_id')
																			 ->join('signatures' , 'form_users.user_id', '=', 'signatures.user_id')
																		  	->where('form_users.user_id', $id)->get();
															

														  

				$htmlstring = view('pdf.subscription-filled', compact('user'))->render();
				$options = new Options();
				$options->set('defaultFont', 'Arial');

	
				$pdf = new Dompdf($options);
	
				$pdf->loadHtml($htmlstring);


				$pdf->setPaper('A4', 'Portrait');
				$pdf->render();

				return $pdf->stream();

	  }
		public function test($id){
				$user = DB::table('form_users')->join('users', 'form_users.user_id', '=' , 'users.id')
																			->join('p_i_summaries', 'form_users.user_id', '=', 'p_i_summaries.user_id')
																			->join('signatures' , 'form_users.user_id', '=', 'signatures.user_id')
																			->where('form_users.user_id', $id)->get();
				
				return view('pdf.subscription-filled', compact('user'))->render();
		}
    
}
