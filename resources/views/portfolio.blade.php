@extends('layouts.portfolio-master')

@section('client-portfolio')
<div class="container">
	<div class="tile is-ancestor">
		<div class="tile is-parent is-7">
			<article class="tile is-child box">
				<p class="title">CHP Master | Limited Partnership</p>
				<p class="subtitle">Subtitle</p>
			</article>
		</div>
		<?php
        $thisUser = DB::table('p_i_summaries')->where('user_id', $user[0]->id)->get();

		?>
		<div class="tile is-parent">
			<article class="tile is-child box">
				<p class="title">Partner Investment Summary</p>
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
						<p class="title"> LP Performace Data</p>
					</article>
				</div>
			</div>
			<div class="tile is-parent">
				<div class="tile">
					<article class="tile is-child box">
						<p class="title"> Performace Analysis</p>
					</article>
				</div>
			</div>
		</div>
	</div>

	<div class="tile is-ancestor">
		<div class="tile is-parent">
			<article class="tile is-child box">
				<p class="title">One</p>
				<p class="subtitle">Subtitle</p>
			</article>
		</div>
		<div class="tile is-parent">
			<article class="tile is-child box">
				<p class="title">Two</p>
				<p class="subtitle">Subtitle</p>
			</article>
		</div>
		<div class="tile is-parent">
			<article class="tile is-child box">
				<p class="title">Three</p>
				<p class="subtitle">Subtitle</p>
			</article>
		</div>
	</div>

</div>

<style>
table {
    border-collapse: collapse;
	width: 100%;
}

table,
th,
td {
    border: 1px solid lightgrey;
	padding-left: 10px;
}

th, td{
	padding: 11px;
}

</style>



@endsection


@section('fileupload')
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
@include('sweet::alert')

@endsection