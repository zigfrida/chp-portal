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
	<?php
	$thisUser = DB::table('p_i_summaries')->where('user_id', $user[0]->id)->get();
	//$thisUserName = DB::table('users')->where('id', $user[0]->id)->get();
	?>
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
	<div class="tile">
		<div class="tile is-parent is-7">
			<div class="tile">
				<article class="tile is-child box">
					<section class="hero is-dark is-bold">
						<h1 class="title">LP Performace Data</h1>
					</section>
					<table>
						<?php
							$years = DB::table('l_p_performances')->select('year')->distinct()->where('class', 'LIKE', $user[0]->class)->get();
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
									->where('class','LIKE', $user[0]->class)->get();
									if(isset($values[0]->value))
										$quater = $values->sum('value') * 100 . "%";
									else
										$quater = ""; ?>
								<td>{{$quater}}</td>
							@endfor
							<?php $ytdValues = DB::table('l_p_performances')->select('value')
								->where('month','=',0)
								->where('year','=', $year->year)
								->where('class','LIKE', $user[0]->class)->get(); 
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
			@if(auth()->user()->userType() == 'admin')
				<div class="tile">
					<article class="tile is-child box">
						<section class="hero is-bold">
							<h1 class="title"><span class="decor">New LP Data for</span><span class="le-decor"> Class {{$user[0]->class}}</span></h1>
						</section>
						<form id="newLP">
							<div class="lpInputContainer">
								<div>
									<p class="lpinputTitle">Select Month: </p>
								</div>
								<div class="lpinput">
									<div class="field">
										<div class="control">
											<div class="select is-warning">
												<select>
													<option disabled selected>Select dropdown</option>			<option>Janurary</option>
													<option>Februrary</option>
													<option>March</option>
													<option>April</option>
													<option>May</option>
													<option>June</option>
													<option>July</option>
													<option>August</option>
													<option>September</option>
													<option>October</option>
													<option>November</option>
													<option>December</option>
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
												<select>
													<option  disabled selected>Select dropdown</option>
														@for ($i = 0; $i <= 299; $i++)
															<option>{{date("Y") + $i}}</option>
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
											<input class="input is-warning" type="text" placeholder="LP Data value">
										</div>
									</div>
								</div>
							</div>
							<div id="lpInputButton">
								<div class="control">
									<button class="button is-warning" type="submit">Save</button>
									<button class="button is-light">Cancel</button>
								</div>
							</div>
						</form>
					</article>
				</div>	
			@endif
		</div>
	</div>
</div>

<div class="tile is-ancestor">

	<div class="tile is-vertical"> 
		<div class="tile is-parent">
			<div class="tile">
				<article class="tile is-child box">
					<section class="hero is-dark is-bold">
						<h1 class="title">Performace Analysis</h1>
					</section>
				</article>
			</div>
		</div>

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
<br>
<div class="tile ">
	<div class="has-text-centered">
		<h1 class="title"><span class="decor">Create comment for </span> <span class="le-decor">{{$user[0]->name}}</span></h1>
	<form method="post" action="/portfolio">
			<div class="field">
				<div class="control">
					<?php
					$comment = "";
					if(isset($thisUser[0]->comment)){
						$comment = $thisUser[0]->comment;
					}
					?>
					<textarea class="textarea is-warning" name="comment">{{$comment}}</textarea>
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

<hr>
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
			<span class="file-name" id="filename">
				
			</span>
			</label>
		</div>
	  </div>
	  <input type="hidden" name="user_id" value="{{ $user[0]->id }}">
	  
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
					<a href="portfolio/{{ $file->filename }}" class="button is-warning">Download</a>

					<?php dd($file); ?>
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
									
									<form method="post" action="portfolio/{{$file->filename}}">
										@csrf
										@method('delete')
										
										<a href="" onclick="$(this).closest('form').submit()">delete</a>
									</form>
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


@section('uploaded-file')
	<h1>lol</h1>
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
	</article>
</div>
<form action="<?php echo e(URL::to($user[0]->id.'/store')); ?>" enctype="multipart/form-data" method="post">
	@csrf
	<div class="file has-name is-fullwidth">
		<label class="file-label">
		  	<input class="file-input" id="file-upload" type="file" name="image">
		  	<span class="file-cta">
				<span class="file-icon"><i class="fas fa-upload"></i></span>
				<span class="file-label">Choose a file…</span>
		  	</span>
		  	<div style="width:90%">
		  		<span class="file-name" id="file-upload-filename">Nothing Choose</span>
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

