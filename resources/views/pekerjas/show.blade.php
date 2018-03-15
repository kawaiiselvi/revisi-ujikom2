@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Detail Perusahaan</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Detail Perusahaan</h2>
				</div>

				<div class="panel-body">
					<div class="col-md-6">
						Nama Perusahaan
					</div>
					<div class="col-md-6">
						{{$pekerja->perusahaan}}
					</div>
					<div class="col-md-6">
						Jabatan
					</div>
					<div class="col-md-6">
						{{$pekerja->jabatan}}
					</div>
					<div class="col-md-6">
						Lokasi
					</div>
					<div class="col-md-6">
						{{$pekerja->lokasi}}
					</div>
					<div class="col-md-6">
						Pendidikan
					</div>
					<div class="col-md-6">
						{{$pekerja->pendidikan}}
					</div>
					<div class="col-md-6">
						Deskripsi
					</div>
					<div class="col-md-6">
						{{$pekerja->deskripsi}}
					</div>
					<div class="col-md-6">
						Gaji
					</div>
					<div class="col-md-6">
						{{$pekerja->gaji}}
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection