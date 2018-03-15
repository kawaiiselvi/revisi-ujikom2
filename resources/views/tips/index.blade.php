@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Home</a></li>
				<li class="active">Tips GetJobs</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Tips GetJobs</h2>
				</div>
				<div class="panel-body">
					@role('admin')<p>
						<a class="btn btn-primary" href="{{ url('/admin/tips/create') }}">Tambah</a>@endrole

			<table class="table">
				<thead>
					<tr>
						<th>Judul</th>
						@role('admin') <th colspan="2">Action</th> @endrole
					</tr>
				</thead>
				<tbody>
					@foreach($tip as $data)
					<tr> 
						<td><a href="{{route('tips.show', $data->id)}}">{{$data->Tips}}</a></td>
						@role('admin')
						<td><a class="btn btn-warning" href="tips/{{$data->id}}/edit">Edit</a></td>
						<td><form action="{{route('tips.destroy',$data->id)}}" method="post">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token" >
								<input type="submit" class="btn btn-danger" value="Delete">{{csrf_field()}}
						</form></td> @endrole
					</tr>
					@endforeach
		</tbody>
	</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

