@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Tambah Lowongan</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-body">
					<form action="{{route('pers.store')}}" method="post" enctype="multipart/form-data">
						{{csrf_field()}}
					</form>
					
					
					<div class="table-responsive">
						<table class="table">
				<thead>
					<tr>
						<th>Tanggal Rilis</th>
						<th>Perusahaan</th>
						<th>Profil</th>
						<th>Membutuhkan</th>
						<th>Jabatan</th>
						<th>Lokasi</th>
						<th>Pendidikan</th>
						<th>Gaji</th>
						<th>Daftar Pelamar</th>
						@role('member')
						<th colspan="2">Action</th>
						@endrole
					</tr>
				</thead>
				<tbody>
					@foreach($lowongan as $data)
					<tr> 
						<td>{{$data->created_at}}</td>
						<td><a href="{{route('lowongans.show', $data->id)}}">{{$data->nama}}</a></td>
						<td><img src="{{asset('img/'.$data->cover)}}" height="50px"></td>
						<td>{{$data->perusahaan}}</td>
						<td>{{$data->jabatan}}</td>
						<td>{{$data->lokasi}}</td>
						<td>{{$data->pendidikan}}</td>
						<td>{{$data->gaji}}</td>
						@php
        				$pelamar = App\Civi::where('lowongan_id', '=', $data->id)->get();
        				@endphp
						<td>@foreach($pelamar as $datta) {{$datta->nama}} <br> @endforeach</td>
						@role('member')
						<td>
                                <a class="btn btn-warning" href="{{ url('/member/civi/tambah',$data->id) }}">Lamar Pekerjaan</a></td>
                        @endrole
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

<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Tambah Lowongan</h2>
				</div>
				<div class="panel-body">
					{!! Form::open(['url'=>route('pers.store'), 'method'=>'post', 'files'=>'true','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
					@include('pers._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection