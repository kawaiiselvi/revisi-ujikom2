@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Member</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Member</h2>
				</div>
				<div class="panel-body">
					
					<div class="table-responsive">

					<table class="table">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Email</th>
								<th colspan="2">Action</th>
							</tr>
						</thead>
					
					<tbody>
						@foreach($pekerja as $data)
						<tr>
							<td>{{$data->name}}</td>
							<td>{{$data->email}}</td>
							<td><form action="{{route('pekerjas.destroy',$data->id)}}" method="post">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token" >
								<input type="submit" class="btn btn-danger" value="Delete">
						</form>
					</td>
				</tr>
				@endforeach
				</tbody>
			</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection