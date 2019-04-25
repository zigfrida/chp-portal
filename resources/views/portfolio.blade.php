@extends('layouts.portfolio-master')

@section('client-portfolio')
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
	<div class="tile is-parent">
		<article class="tile is-child box">
			<section class="hero is-dark is-bold">
				<h1 class="title">Partner Investment Summary</h1>
			</section>
			<table id="summaryTable">
				<tr>
					<th>Class of Units</th>
					<td>{{$user[0]->class}}</td>
				</tr>
				<tr>
					<th>Units</th>
					<td>{{$thisUser[0]->units}}</td>
				</tr>
				<tr>
					<th>NAV Per Unit</th>
					<td>${{$thisUser[0]->NAVPerUnit}}</td>
				</tr>
				<tr>
					<th>Net Asset Value</th>
					<td>${{$thisUser[0]->NAV}}</td>
				</tr>
				<tr>
					<th>Cost Base</th>
					<td>${{$thisUser[0]->cost}}</td>
				</tr>
				<tr>
					<th>Cumulative Pref<br>Distribution</th>
					<td>${{$thisUser[0]->cumulative_pref_distribution}}</td>
				</tr>
				<tr>
					<th>{{$thisUser[0]->month_distribution}}<br>Distribution</th>
					<td>${{$thisUser[0]->amount_distribution}}</td>
				</tr>
				<tr>
					<th>Year Profit Share</th>
					<td>{{$thisUser[0]->year_profit_share}}</td>
				</tr>                                        
			</table>
		</article>
	</div>
</div>

<div class="tile is-ancestor">
	<div class="tile">
		<div class="tile is-parent is-7">
			<div class="tile">
				<article class="tile is-child box">
					<section class="hero is-dark is-bold">
						<h1 class="title">LP Performance Data</h1>
					</section>
					<table>
						<tr>
							<td class="lptable"></td>
							@for($i = 1; $i <= 4; $i++)
								<th class="lptable">{{"Q" . $i}}</th>
							@endfor
							<th class="lptable">YTD</th>
						</tr>
						@foreach ($years as $year)
							<tr>
							<th>{{"20" . $year->year}}</th>
							@for ($i = 1; $i <=12; $i = $i + 3)
								<?php
								$quater = ""; 
								$count = DB::table('l_p_performances')->select('value')
									->whereBetween('month', [$i, $i+2])
									->where('year','=', $year->year)
									->where('class','LIKE', $user[0]->class)->count();
								if ($count == 3){
									$values = DB::table('l_p_performances')->select('value')
										->whereBetween('month', [$i, $i+2])
										->where('year','=', $year->year)
										->where('class','LIKE', $user[0]->class)->get();
									
										if(isset($values[0]->value))
										$quater = $values->sum('value') * 100 . "%";
								}?>
								<td>{{$quater}}</td>
							@endfor
							
							{{-- Displaying YTD on LPPerformace table --}}
							<?php
							$countMonths = DB::table('l_p_performances')
									->where('year','=', $year->year)
									->where('month','!=', 0)
									->where('class','LIKE', $user[0]->class)->count();

							if ($countMonths % 3 == 0){
								$ytdValues = DB::table('l_p_performances')
								->where('month', '!=', 0)
								->where('year','=', $year->year)
								->where('class','LIKE', $user[0]->class)->sum('value'); 
								$ytd = $ytdValues * 100 . "%";
							}else{
								$ytd = "";
							}?>
							<td>{{$ytd}}</td>
							</tr>
						@endforeach
					</table>
				</article>
			</div>
		</div>
		<div class="tile is-parent">
			@if(auth()->user()->userType() == 'admin')
				<div class="tile">
					<article class="tile is-child box">
						<section class="hero is-bold">
							<h1 class="title"><span class="decor">New LP Data for</span><span class="le-decor"> Class {{$user[0]->class}}</span></h1>
						</section>
						<form id="newLP" method="POST" action="/{{$user[0]->user_id}}/portfolio/editLP">
							@csrf
							<div class="lpInputContainer">
								<div>
									<p class="lpinputTitle">Select Month: </p>
								</div>
								<div class="lpinput">
									<div class="field">
										<div class="control">
											<div class="select is-warning">
												<select name="month" required>
													<option disabled selected value="">Select dropdown</option>
													<option value="1">Janurary</option>
													<option value="2">Februrary</option>
													<option value="3">March</option>
													<option value="4">April</option>
													<option value="5">May</option>
													<option value="6">June</option>
													<option value="7">July</option>
													<option value="8">August</option>
													<option value="9">September</option>
													<option value="10">October</option>
													<option value="11">November</option>
													<option value="12">December</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="lpInputContainer">
								<div>
									<p class="lpinputTitle">Select Year: </p>
								</div>
								<div class="lpinput">
									<div class="field">
										<div class="control">
											<div class="select is-warning">
												<select name="year" required>
													<option  disabled selected value="">Select dropdown</option>
														@for ($i = -1; $i <= 299; $i++)
													<option value="{{date("y") + $i}}">{{date("Y") + $i}}</option>
														@endfor
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="lpInputContainer">
								<div>
									<p class="lpinputTitle">LP Data Value: </p>
								</div>
								<div class="lpinput">
									<div class="field">
										<div class="control">
											<input class="input is-warning" type="text" name="value" placeholder="LP Data value as decimal" required>
										<input type="hidden" name="class" value="{{$user[0]->class}}" required>
										<input type="hidden" name="id" value="{{$user[0]->user_id}}" required>
										</div>
									</div>
								</div>
							</div>

							<div id="lpInputButton">
								<div class="control">
									<button class="button is-warning" type="submit">Save</button>
									<button class="button is-light" type="reset">Cancel</button>
								</div>
							</div>
						</form>
					</article>
				</div>
			@else 
				<div class="tile">
					<article class="tile is-child box">
						<section class="hero is-bold">
							<h1 class="title"><span class="decor">Comments for</span><span class="le-decor"> {{$user[0]->subscriber_name}}</span></h1>
						</section>
						<?php
							$comment = "";
							if(isset($thisUser[0]->comment)){
								$comment = $thisUser[0]->comment;
							} ?>
						<p class="subtitle">{{$comment}}</p>
					</article>
				</div>
			@endif
		</div>
	</div>
</div>

<div class="tile is-ancestor">
	<div class="tile is-parent">
			<div class="tile">
				<article class="tile is-child box">
					<section class="hero is-dark is-bold">
						<h1 class="title">Performance Analysis</h1>
					</section>
				</article>
			</div>
	</div>
</div>

<div class="tile is-ancestor">
	<div class="tile is-parent">
		<article class="tile is-child box">
			<table>	
				<tr>
					<th class="tableName" colspan = "2">Return Summary</th>
				</tr>
				<tr>
					<td># of Months</td>
					<td>{{$classAPA[0]->n_of_months}}</td>
				</tr>
				<tr>
					<td>Last 12 Months</td>
					<td>{{number_format($classAPA[0]->ltm * 100,2). "%"}}</td>
				</tr>
				<tr>
					<td>Total Return since Inception</td>
					<td>{{number_format($classAPA[0]->overall * 100,2). "%"}}</td>
				</tr>
			</table>
		</article>
	</div>
	<div class="tile is-parent">
		<article class="tile is-child box">
			<table>
				<tr>
					<th class="tableName" colspan = "2">Risk Summary</th>
				</tr>
				<tr>
					<td>Sharpe Ratio</td>
					<td>{{number_format($classAPA[0]->sharpe_ratio,2)}}</td>
				</tr>
				<tr>
					<td># of Negative Months</td>
					<td>{{$classAPA[0]->wml}}</td>
				</tr>
				<tr>
					<td>Standard Deviation</td>
					<td>{{number_format($classAPA[0]->st_deviation* 100,2). "%"}}</td>
				</tr>
			</table>
		</article>
	</div>
	<div class="tile is-parent is-3">
		<article class="tile is-child box">
			<p style="font-size:13px"><i>* The indicated monthly rates of return are the cumulative historical daily holding period returns which includes prorated dividends and net profits earned throughout a month based on realized loan losses and estimated future value. The rate of returns are historical in nature and not intended to reflect future values of the limited partnership.</i></p>
		</article>
	</div>
</div>

<div class="tile is-ancestor">
	<div class="tile is-parent">
		<div class="tile">
			<article class="tile is-child box">
				<section class="hero is-dark is-bold">
					<h1 class="title">Portfolio Metrics</h1>
				</section>
			</article>
		</div>
	</div>
</div>
<div class="tile">
	<div class="tile is-parent">
		<article class="tile is-child box">
			<table>
				<tr>
					<th class="tableName" colspan = "2">Consumer Loan Portfolio Metrics</th>
				</tr>
				<tr>
					<td>Weighted Avg Duration (months)</td>
					<td>{{number_format($metrics[0]->duration,2)}}</td>
				</tr>
				<tr>
					<td>Weighted Avg Credit Score</td>
					<td>{{number_format($metrics[0]->credit_score,2)}}</td>
				</tr>
				<tr>
					<td>Weighted Avg Loan Size</td>
					<td>{{number_format($metrics[0]->loan_size,2)}}</td>
				</tr>
				<tr>
					<td>Number of Loans</td>
					<td>{{number_format($metrics[0]->number_of_loans,2)}}</td>
				</tr>
				<tr>
					<td>Weighted Average Interest Rate of Portfolio</td>
					<td>{{number_format($metrics[0]->int_rate* 100,2). "%"}}
					</td>
				</tr>
			</table>
		</article>
	</div>
	<div class="tile is-parent">
		<article class="tile is-child box">
			<table style="height: 100%;">
				<tr>
					<th class="tableName" colspan = "2">SME Portfolio Metrics</th>
				</tr>
				<tr>
					<td>Weighted Avg Duration (months)</td>
					<td>{{number_format($metrics[0]->duration_a,2)}}</td>
				</tr>
				<tr>
					<td>Weighted Avg Advance Size</td>
					<td>{{number_format($metrics[0]->loan_size_a,2)}}</td>
				</tr>
				<tr>
					<td>Weighted Avg Interest Rate of Portfolio</td>
					<td>{{number_format($metrics[0]->int_rate_a * 100,2)."%"}}</td>
				</tr>
			</table>
		</article>
	</div>
</div>

<div class="tile is-ancestor">
	<div class="tile is-parent">
		<div class="tile">
			<article class="tile is-child box">
				@if($user[0]->class == 'A')
					<img src="/upload/Graph/A/ClassAGraph.PNG" alt="Graph image">
				@elseif($user[0]->class == 'B')
					<img src="/upload/Graph/B/ClassBGraph.PNG" alt="Graph image">
				@endif
			</article>
		</div>
	</div>
</div>

<div class="tile is-ancestor">
	<div class="tile is-parent">
		<div class="tile">
			<article class="tile is-child box">
				<section class="hero is-dark is-bold">
					<h1 class="title">Fund Information</h1>
				</section>
				<form method="POST" action="/{{$user[0]->user_id}}/portfolio/editFI">
					@csrf
					@if(auth()->user()->userType() == 'admin')
						<table>
							<tr>
								<td>Inception Date</td>
							<td><input class="input is-warning is-small" type="text" name="inception_date" value="{{$fundInfo[0]->inception_date}}"></td>
							</tr>
							<tr>
								<td>Minimum Investment</td>
							<td><input class="input is-warning is-small" type="text" name="min_investment" value="{{$fundInfo[0]->min_investment}}"></td>
							</tr>
							<tr>
								<td>Distributions</td>
								<td><input class="input is-warning is-small" type="text" name="distributions" value="{{$fundInfo[0]->distributions}}"></td>
							</tr>
							<tr>
								<td>Preferred Return</td>
								<td><input class="input is-warning is-small" type="text" name="preferred_return" value="{{$fundInfo[0]->preferred_return}}"></td>
							</tr>
							<tr>
								<td>Performance Fee</td>
								<td><input class="input is-warning is-small" type="text" name="performance_fee" value="{{$fundInfo[0]->performance_fee}}"></td>
							</tr>
							<tr>
								<td>Redemption</td>
								<td><input class="input is-warning is-small" type="text" name="redemption" value="{{$fundInfo[0]->redemption}}"></td>
							</tr>
							<tr>
								<td>Subscription</td>
								<td><input class="input is-warning is-small" type="text" name="subscription" value="{{$fundInfo[0]->subscription}}"></td>
							</tr>
						</table>
						<br>
						<button class="button is-warning" type="submit">Save</button>
						<button class="button is-light" type="reset">Cancel</button>
						<input type="hidden" name="class" value="{{$user[0]->class}}">
						<input type="hidden" name="id" value="{{$user[0]->user_id}}">
						@else
							<table>
								<tr>
									<td>Inception Date</td>
									<td>{{$fundInfo[0]->inception_date}}</td>
								</tr>
								<tr>
									<td>Minimum Investment</td>
								<td>{{$fundInfo[0]->min_investment}}</td>
								</tr>
								<tr>
									<td>Distributions</td>
									<td>{{$fundInfo[0]->distributions}}</td>
								</tr>
								<tr>
									<td>Preferred Return</td>
									<td>{{$fundInfo[0]->preferred_return}}</td>
								</tr>
								<tr>
									<td>Performance Fee</td>
									<td>{{$fundInfo[0]->performance_fee}}</td>
								</tr>
								<tr>
									<td>Redemption</td>
									<td>{{$fundInfo[0]->redemption}}</td>
								</tr>
								<tr>
									<td>Subscription</td>
									<td>{{$fundInfo[0]->subscription}}</td>
								</tr>
							</table>
						@endif
					</form>
			</article>
		</div>
	</div>
	<div class="tile is-parent">
		<div class="tile">
			<article class="tile is-child box">
				<section class="hero is-dark is-bold">
					<h1 class="title" style="font-size:27px">About Cypress Hills Partners</h1>
				</section>
				<p style="font-size:18px">Cypress Hills Partners is a boutique alternative merchant banking firm based out of Vancouver. The company specializes in the origination of private equity, specialty private debt, and other uniquely structured products. CHP has historically delivered a consistent high yield, low volatility income-type strategy for institutional investors and family offices and aims to build innovative structures to limit the downside volatility and protect investors in recessionary periods. CHP’s strategy remains uncorrelated to traditional alternative strategies.</p>
			</article>
		</div>
	</div>
	<div class="tile is-parent is-vertical">
		<div class="tile">
			<article class="tile is-child box">
				<section class="hero is-dark is-bold">
					<h1 class="title">Service Providers</h1>
				</section>
				<form method="POST" action="/{{$user[0]->user_id}}/portfolio/editEI">
					@csrf
					@if(auth()->user()->userType() == 'admin')
						<table>
							<tr>
								<th>Auditor</th>
								<td><input class="input is-warning is-small" type="text" name="auditor" value="{{$extraInfo[0]->auditor}}"></td>
							</tr>
							<tr>
								<th>Legal Counsel</th>
								<td><input class="input is-warning is-small" type="text" name="legal_counsel" value="{{$extraInfo[0]->legal_counsel}}"></td>
							</tr>
						</table>
						<br>
						<section class="hero is-dark is-bold">
							<h1 class="title">Contact Information</h1>
						</section>
						<input class="input is-warning" type="text" name="contact_info_name" value="{{$extraInfo[0]->contact_info_name}}">
						<br><br>
						<textarea class="textarea is-warning" placeholder="Small textarea" name="contact_info">{{$extraInfo[0]->contact_info}}</textarea>
						<br>
						<button class="button is-warning" type="submit">Save</button>
						<button class="button is-light" type="reset">Cancel</button>
					@else
						<br>
						<table>
							<tr>
								<th>Auditor</th>
								<td>{{$extraInfo[0]->auditor}}</td>
							</tr>
							<tr>
								<th>Legal Counsel</th>
								<td>{{$extraInfo[0]->legal_counsel}}</td>
							</tr>
						</table>
						<hr>
						<section class="hero is-dark is-bold">
							<h1 class="title">Contact Information</h1>
						</section>
						<p style="font-size:17px"><b>{{$extraInfo[0]->contact_info_name}}</b></p>
						<p style="font-size:17px">{{$extraInfo[0]->contact_info}}</p>
					@endif
				</form>
			</article>
		</div>
	</div>
</div>

<div class="tile is-ancestor">
	<div class="tile is-parent">
		<div class="tile">
			<article class="tile is-child box">
				<section class="hero is-dark is-bold">
					<h1 class="title">Disclosure</h1>
				</section>
				<p style="font-size: 16px">This fact sheet for CHP Master I LP (the "Fund"), furnished on a confidential basis to the recipient, is neither an offer to sell nor a solicitation of any offer to buy any securities, investment product or investment advisory services, including interests in the Fund. This fact sheet is subject to a more complete description and does not contain all of the information necessary to make an investment decision, including, but not limited to, the risks, fees and investment strategies of the Fund. All investors must be "accredited investors" and "qualified clients" as defined in the securities laws before they can invest in the Fund. An investment in the Fund is speculative and involves substantial risks. There can be no guarantee that the Fund will achieve its investment objectives. This document is not, and may not be relied upon in any manner as legal, tax or investment advice.  PAST PERFORMANCE IS NOT NECESSARILY INDICATIVE OF FUTURE RESULTS. The potential for profit is accompanied by the possibility of loss, including the possibility of a total loss. Current or future characteristics and other information may vary from those provided herein and the Fund undertakes no obligation to notify recipients of any such variances.   This fact sheet is not an advertisement and is not intended for public use or distribution and is intended exclusively for the use of the person to whom it has been delivered. </p>
			</article>
		</div>
	</div>
</div>





@endsection


@section('client-comment')
<form method="post" action="/{{$user[0]->user_id}}/portfolio/comment">
	@csrf
		<div class="field">
			<div class="control">
				<?php
				$comment = "New comment";
				if(isset($thisUser[0]->comment)){
					$comment = $thisUser[0]->comment;
				}
				?>
				<textarea class="textarea is-warning is-medium" name="comment">{{$comment}}</textarea>
			</div>
			<br>
			<div class="columns is-centered is-8" style="margin-top: 10px;">
				<button class="button is-warning" type="submit">Save</button>
				<button class="button is-light" type="reset">Cancel</button>
			</div>
		</div>
</form>
@endsection

@section('fileuploadbetter')
<form action="/fileupload" method="post" enctype="multipart/form-data">
	@csrf
	<div class="field">
		<div class="file is-warning has-name is-boxed">
			<label class="file-label">
			<input class="file-input" type="file" name="filelolol" id="file-upload">
			<span class="file-cta">
				<span class="file-icon">
				<i class="fas fa-cloud-upload-alt"></i>
				</span>
				<span class="file-label">
				Choose File..
				</span>
			</span>
			<span class="file-name" id="filename"></span>
			</label>
		</div>
	</div>
	<input type="hidden" name="user_id" value="{{ $user[0]->user_id }}">
	<input type="hidden" name="file_type" value="I">
	<div class="columns is-centered" style="margin-top: 10px;">
		<button type="submit" class="button is-warning">Submit</button>
	</div>
	<script>
		var input = document.getElementById( 'file-upload' );
		var infoArea = document.getElementById( 'filename' );
		input.addEventListener( 'change', showFileName );

		function showFileName( event ) {
				var input = event.srcElement;
				var fileName = input.files[0].name;
				infoArea.textContent = fileName;
		}
	</script>
</form>
@endsection


@section('show-files')
<br><br><br>
	<div class="columns is-multiline">
		@foreach ($files as $file)
				<div class="column is-one-quarter">
						{{ $file->filename  }} <br>
						{{ $file->created_at }} <br>
					<a href="portfolio/{{ $file->file_type}}/{{ $file->filename }}" class="button is-warning">Download</a>
					  
      @if (auth()->user()->isAdmin())
            
					<div class="dropdown is-hoverable">
						<div class="dropdown-trigger">
							<button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
								
								<span class="icon is-small">
									<i class="fas fa-angle-down" aria-hidden="true"></i>
								</span>
							</button>
						</div>
						<div class="dropdown-menu" id="dropdown-menu4" role="menu">
							<div class="dropdown-content">
								<div class="dropdown-item">
									edit
								</div>
								<div class="dropdown-item">
									@if ($file->user_id != 1)
											
									
									<form method="post" action="portfolio/{{$file->filename}}">
										@csrf
										@method('delete')
										
										<a href="#" onclick="$(this).closest('form').submit()">delete</a>
									</form>
									@endif
 								</div>
							</div>
						</div>
					</div>
				@endif  <!-- drop down menu for file deletion -->

						<hr>
				</div>
		@endforeach
</div>
@endsection



