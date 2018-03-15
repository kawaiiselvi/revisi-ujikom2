@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Daftar Pelamar</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Daftar Pelamar</h2>
				</div>
				<div class="panel-body">
					<form action="{{route('pegawais.store')}}" method="post" enctype="multipart/form-data">
						{{csrf_field()}}

					</form>
						
					
					<div class="table-responsive">
						<table class="table">
				<thead>
					<tr>
						<th>Tanggal Melamar</th>
						<th>Nama Pelamar</th>
						<th>Profil</th>
						<th>No Telepon</th>
						<th>Kewarganegaraan</th>
						<th>Email</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pegawai as $data)
					<tr> 
						<td>{{$data->created_at}}</td>
						<td><a href="{{route('pegawais.show', $data->id)}}">{{$data->nama}}</a></td>
						<td><img src="{{asset('img/'.$data->cover)}}" height="50px"></td>
						<td>{{$data->notlp}}</td>
						<td>{{$data->kewarganegaraan}}</td>
						<td>{{$data->email}}</td>
						<td><form action="{{route('pegawais.destroy',$data->id)}}" method="post">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token" >
								<input type="submit" class="btn btn-danger" value="Delete">{{csrf_field()}}
						</form></td>
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