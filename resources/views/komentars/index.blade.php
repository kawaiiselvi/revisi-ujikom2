@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Dashboard</a></li>
					<li class="active">Komentar</li>
				</ul>
				<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Komentar</h2>
				</div>
				<div class="panel-body">

			<table class="table">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Komentar</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
			</table>

					

					<div class="panel-body">
						<table class="table">
							<tbody>
								
							</tbody>
						</table>
						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection