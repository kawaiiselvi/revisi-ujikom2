@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Detail Lowongan</h2>
				</div>

				<div class="panel-body">
					<div class="col-md-6">
						Nama Perusahaan
					</div>
					<div class="col-md-6">
						{{$guest->perusahaan}}
					</div>
					<div class="col-md-6">
						Jabatan
					</div>
					<div class="col-md-6">
						{{$guest->jabatan}}
					</div>
					<div class="col-md-6">
						Lokasi
					</div>
					<div class="col-md-6">
						{{$guest->lokasi}}
					</div>
					<div class="col-md-6">
						Pendidikan
					</div>
					<div class="col-md-6">
						{{$guest->pendidikan}}
					</div>
					<div class="col-md-6">
						Gaji
					</div>
					<div class="col-md-6">
						{{$guest->gaji}}
					</div>
					<div>
						
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection