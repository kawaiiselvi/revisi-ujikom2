@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Input CV</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Input CV</h2>
				</div>
				<div class="panel-body">
					{!! Form::open(['url'=>route('civis.store'), 'method'=>'post', 'files'=>'true','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
					<input type="hidden" name="lowongan_id" value="{{$lowongan->id}}">
					@include('civis._form')
					{!! Form::close() !!}
				</div>

			</div>
		</div>
	</div>
</div>
@endsection