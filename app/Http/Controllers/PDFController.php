<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function pdf($id){




		$pdf = \App::make('dompdf.wrapper');

		$pdf->loadHtml($this->convert_html_to_pdf($id));
		//$pdf->setPaper('A4', 'portriat');
        
        return $pdf->stream();



    }

    function convert_html_to_pdf($id){

        $user = DB::table('users')->where('id', $id)->get();
		$user_pi = DB::table('p_i_summaries')->where('user_id', $user[0]->id)->get();
		$css_link ='css/portfolio.css';

		$header = '
		<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Portfolio</title>
    <style>
		<body>
			width:300px;
		</body>
    </style>
</head>
<body>
		';
		$bulma =  $header . '
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
			<script defer src="https://use.fontawesome.
			/releases/v5.3.1/js/all.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

			<link rel="stylesheet" type="text/css" href="'.$css_link.'">

			
		';

        $output = $bulma . '
                <div class="container">
                    <div class="has-text-centered">
                    
                        <div class="tile is-ancestor">
	                        <div class="tile is-parent is-7">
    		                    <article class="tile is-child box">
			                        <section class="hero is-dark is-bold">
				                        <h1 class="title">CHP Master | Limited Partnership</h1>
			                        </section>
	                            		<p>The investment objective of the CHP Master I Limited
	                            		Partnership (the LP) is to generate a high yield with minimal
	                            		volatility and low correlation to most traditional asset classes by
	                            		co-originating a portfolio of debt obligations (such as consumer
	                            		loans, SME loans, leases):</p>
	                            		<br>
	                            		<ul>
				                <div>
					<img src="/images/BulletList.JPG" alt="bullet image" class="bulletPoint">
					<li>The credit risk will be primarily with the direct borrower and in certain cases the co-origination platforms;</li>
				</div>
				<div>
					<img src="/images/BulletList.JPG" alt="bullet image" class="bulletPoint">
					<li>The LP will be diversified across various geographical regions and credit bands thereby mitigating concentration risks;</li>
				</div>
				<div>
					<img src="/images/BulletList.JPG" alt="bullet image" class="bulletPoint">
					<li>Monthly cash flow of the LP will include interest and principal with average repayment terms of the underlying monthly vintages of less than 36 months.</li>
				</div>
			</ul>
		</article>
	</div>    
        ';

		$output .= '
		<div class="tile is-parent">
		<article class="tile is-child box">
			<section class="hero is-dark is-bold">
				<h1 class="title">Partner Investment Summary</h1>
			</section>
			<table id="summaryTable">
				<tr>
					<th>Class of Units</th>
					<td>'. $user[0]->class .'</td>
				</tr>
				<tr>
					<th>Units</th>
					<td>'.$user_pi[0]->units.'</td>
				</tr>
				<tr>
					<th>NAV Per Unit</th>
					<td>'.$user_pi[0]->NAVPerUnit.'</td>
				</tr>
				<tr>
					<th>Net Asset Value</th>
					<td>'.$user_pi[0]->NAV.'</td>
				</tr>
				<tr>
					<th>Cost Base</th>
					<td>'. $user_pi[0]->cost . '</td>
				</tr>
				<tr>
					<th>Cumulative Pref<br>Distribution</th>
					<td>'. $user_pi[0]->cumulative_pref_distribution . '</td>
				</tr>
				<tr>
					<th>'. $user_pi[0]->month_distribution . '<br>Distribution</th>
					<td>'. $user_pi[0]->amount_distribution . '</td>
				</tr>
				<tr>
					<th>Year Profit Share</th>
					<td>'. $user_pi[0]->year_profit_share .' </td>
				</tr>                                        
			</table>
		</article>
	</div>
</div>
		';










        $output .= '
                </div>
            </div>';
        return $output;

    }

    
}
