@extends('layouts.portfolio-master')

@section('client-portfolio')
<div class="container">
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
		<?php
		$thisUser = DB::table('p_i_summaries')->where('user_id', $user[0]->id)->get();
		?>
		<div class="tile is-parent">
			<article class="tile is-child box">
				<section class="hero is-dark is-bold">
					<h1 class="title">Partner Investment Summary</h1>
				</section>
				<table id="summaryTable">
					<tr>
						<th>Class of Units</th>
						<td>{{$thisUser[0]->class}}</td>
					</tr>
					<tr>
						<th>Units</th>
						<td>{{$thisUser[0]->units}}</td>
					</tr>
					<tr>
						<th>NAV Per Unit</th>
						<td>{{$thisUser[0]->NAVPerUnit}}</td>
					</tr>
					<tr>
						<th>Net Asset Value</th>
						<td>{{$thisUser[0]->NAV}}</td>
					</tr>
					<tr>
						<th>Cost Base</th>
						<td>{{$thisUser[0]->cost}}</td>
					</tr>
					<tr>
						<th>Cumulative Pref<br>Distribution</th>
						<td>{{$thisUser[0]->cumulative_pref_distribution}}</td>
					</tr>
					<tr>
						<th>Q4 2018<br>Distribution</th>
						<td>{{$thisUser[0]->month_distribution}}</td>
					</tr>
					<tr>
						<th>2018 Profit Share</th>
						<td>{{$thisUser[0]->year_profit_share}}</td>
					</tr>                                        
				</table>
			</article>
		</div>
	</div>

	<div class="tile is-ancestor">
		<div class="tile is-vertical">
			<div class="tile is-parent">
				<div class="tile">
					<article class="tile is-child box">
						<section class="hero is-dark is-bold">
							<h1 class="title">LP Performace Data</h1>
						</section>
						<table>
							<?php
								$years = DB::table('l_p_performances')->select('year')->distinct()->where('class', 'LIKE', $thisUser[0]->class)->get();
							?>
							<tr>
								<td class="lptable"></td>
								@for($i = 1; $i <= 4; $i++)
									<th class="lptable">{{"Q" . $i}}</th>
									{{-- <th>{{date('F', mktime(0,0,0,$i,1))}}</th> --}}
								@endfor
								<th class="lptable">YTD</th>
							</tr>
							@foreach ($years as $year)
								<tr>
								<th>{{"20" . $year->year}}</th>
								@for ($i = 1; $i <=12; $i = $i + 3)
									<?php $values = DB::table('l_p_performances')->select('value')
										->whereBetween('month', [$i, $i+2])
										->where('year','=', $year->year)
										->where('class','LIKE', $thisUser[0]->class)->get();
										if(isset($values[0]->value))
											$quater = $values->sum('value') * 100 . "%";
										else
											$quater = ""; ?>
									<td>{{$quater}}</td>
								@endfor
								<?php $ytdValues = DB::table('l_p_performances')->select('value')
									->where('month','=',0)
									->where('year','=', $year->year)
									->where('class','LIKE', $thisUser[0]->class)->get(); 
									if(isset($ytdValues[0]->value))
										$ytd = $ytdValues[0]->value * 100 . "%";
									else
										$ytd = ""; ?>
								<td>{{$ytd}}</td>
								</tr>
							@endforeach
						</table>
					</article>
				</div>
			</div>
			<div class="tile is-parent">
				<div class="tile">
					<article class="tile is-child box">
						<section class="hero is-dark is-bold">
							<h1 class="title">Performace Analysis</h1>
						</section>
					</article>
				</div>
			</div>
		</div>
	</div>

	<div class="tile is-ancestor">
		<div class="tile is-parent">
			<article class="tile is-child box">
				<p class="title">Return Summary</p>
			</article>
		</div>
		<div class="tile is-parent">
			<article class="tile is-child box">
				<p class="title">Consumer Loan Portfolio<br>Metrics</p>
			</article>
		</div>
		<div class="tile is-parent">
			<article class="tile is-child box">
				<p class="title">SME Portfolio Metrics</p>
			</article>
		</div>
	</div>

</div>

@endsection


@section('client-comment')
<div class="container">
	<div class="tile is-ancestor">
		<div class="has-text-centered">
			<h1 class="title"><span class="decor">Create comment for </span> <span class="le-decor">{{$thisUser[0]->name}}</span></h1>
		<form method="post" action="/portfolio">
				<div class="field">
					<div class="control">
						<textarea class="textarea is-warning" name="comment">{{$thisUser[0]->comment}}</textarea>
					</div>
					<br>
					<div class="control">
						<button class="button is-warning" type="submit">Save</button>
						<button class="button is-light">Cancel</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<hr>



@endsection


@section('fileupload')

<div class="tile">
	<article class="tile is-child box">
		<p class="title"> Files</p>
		<?php
			 $files = Storage::files('/upload/'.$user[0]->id);

			// $files = Storage::disk('public')->files('upload/'.$user[0]->id);
		?>
		<ul>
			@foreach($files as $file)
			<li><a href="{{asset($file)}}" download>{{basename($file)}}</a></li>
			@endforeach	
		</ul>		
<br>
<div class="tile">
	<article class="tile is-child box">
		<p class="title"> Darren do dis	</p>
	</article>
</div>
<form action="<?php echo e(URL::to($user[0]->id.'/store')); ?>" enctype="multipart/form-data" method="post">
	@csrf
	<div class="file has-name is-fullwidth">
		<label class="file-label">
		  <input class="file-input" id="file-upload" type="file" name="image">
		  <span class="file-cta">
			<span class="file-icon">
			  <i class="fas fa-upload"></i>
			</span>
			<span class="file-label">
			  Choose a file…
			</span>
		  </span>
		  <div style="width:90%">
		  	<span class="file-name" id="file-upload-filename">
			Nothing Choose
			</span>
		  		  </div>
		  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		  <button type="submit" name="button" class="button is-link">Upload File</button>
		</label>
	   </div>

	   <script>
			var input = document.getElementById( 'file-upload' );
			var infoArea = document.getElementById( 'file-upload-filename' );
			input.addEventListener( 'change', showFileName );

			function showFileName( event ) {
 			var input = event.srcElement;
  			var fileName = input.files[0].name;
  			infoArea.textContent = fileName;
			}
	   </script>


	
</form>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Include this after the sweet alert js file -->
@include('sweet::alert')
@endsection

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('sweet::alert')
