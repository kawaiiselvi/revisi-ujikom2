@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Detail Pekerja</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Detail Perusahaan</h2>
				</div>

				<div class="panel-body">
					<div class="col-md-6">
						Nama Pekerja
					</div>
					<div class="col-md-6">
						{{$civi->nama}}
					</div>
					<div class="col-md-6">
						Ttl
					</div>
					<div class="col-md-6">
						{{$civi->ttl}}
					</div>
					<div class="col-md-6">
						Alamat
					</div>
					<div class="col-md-6">
						{{$civi->alamat}}
					</div>
					<div class="col-md-6">
						Nomor Telepon
					</div>
					<div class="col-md-6">
						{{$civi->notlp}}
					</div>
					<div class="col-md-6">
						Jenis Kelamin
					</div>
					<div class="col-md-6">
						{{$civi->jk}}
					</div>
					<div class="col-md-6">
						Agama
					</div>
					<div class="col-md-6">
						{{$civi->agama}}
					</div>
					<div class="col-md-6">
						Kewarganegaraan
					</div>
					<div class="col-md-6">
						{{$civi->kewarganegaraan}}
					</div>
					<div class="col-md-6">
						Status
					</div>
					<div class="col-md-6">
						{{$civi->status}}
					</div>
					<div class="col-md-6">
						Email
					</div>
					<div class="col-md-6">
						{{$civi->email}}
					</div>
					<div class="col-md-6">
						Hobi
					</div>
					<div class="col-md-6">
						{{$civi->hoby}}
					</div>
					<div class="col-md-6">
						SD
					</div>
					<div class="col-md-6">
						{{$civi->sd}}
					</div>
					<div class="col-md-6">
						SMP
					</div>
					<div class="col-md-6">
						{{$civi->smp}}
					</div>
					<div class="col-md-6">
						PT
					</div>
					<div class="col-md-6">
						{{$civi->pt}}
					</div>
					<div class="col-md-6">
						PK
					</div>
					<div class="col-md-6">
						{{$civi->pk}}
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection