@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Detail Pelamar</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Detail Pelamar</h2>
				</div>

				<div class="panel-body">
					<div class="col-md-6">
						Nama Lengkap
					</div>
					<div class="col-md-6">
						{{$pegawai->nama}}
					</div>
					<div class="col-md-6">
						Tanggal Lahir
					</div>
					<div class="col-md-6">
						{{$pegawai->ttl}}
					</div>
					<div class="col-md-6">
						Alamat
					</div>
					<div class="col-md-6">
						{{$pegawai->alamat}}
					</div>
					<div class="col-md-6">
						Nomor Telepon
					</div>
					<div class="col-md-6">
						{{$pegawai->notlp}}
					</div>
					<div class="col-md-6">
						Jenis Kelamin
					</div>
					<div class="col-md-6">
						{{$pegawai->jk}}
					</div>
					<div class="col-md-6">
						Agama
					</div>
					<div class="col-md-6">
						{{$pegawai->agama}}
					</div>
					<div class="col-md-6">
						Kewarganegaraan
					</div>
					<div class="col-md-6">
						{{$pegawai->kewarganegaraan}}
					</div>
					<div class="col-md-6">
						Status
					</div>
					<div class="col-md-6">
						{{$pegawai->status}}
					</div>
					<div class="col-md-6">
						Email
					</div>
					<div class="col-md-6">
						{{$pegawai->email}}
					</div>
					<div class="col-md-6">
						Hobi
					</div>
					<div class="col-md-6">
						{{$pegawai->hoby}}
					</div>
					<div class="col-md-6">
						Sekolah Dasar
					</div>
					<div class="col-md-6">
						{{$pegawai->sd}}
					</div>
					<div class="col-md-6">
						Sekolah Menengah Pertama
					</div>
					<div class="col-md-6">
						{{$pegawai->smp}}
					</div>
					<div class="col-md-6">
						Sekolah Menengah Akhir / Sekolah Menengah Kejuruan
					</div>
					<div class="col-md-6">
						{{$pegawai->sma}}
					</div>
					<div class="col-md-6">
						Perguruan Tinggi
					</div>
					<div class="col-md-6">
						{{$pegawai->pt}}
					</div>
					<div class="col-md-6">
						Pengalaman Kerja
					</div>
					<div class="col-md-6">
						{{$pegawai->pk}}
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection