<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('perusahaan','Membutuhkan',['class'=>'col-md-2 control-label','readonly']) !!}
	<div class="col-md-4">
		{!! Form::text('perusahaan',null,['class'=>'form-control']) !!}
		{!! $errors->first('perusahaan', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('nama','Nama Perusahaan',['class'=>'col-md-2 control-label','readonly']) !!}
	<div class="col-md-4">
		{!! Form::text('nama',null,['class'=>'form-control']) !!}
		{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('jabatan','Jabatan',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('jabatan',null,['class'=>'form-control']) !!}
		{!! $errors->first('jabatan', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('lokasi','Lokasi',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('lokasi',null,['class'=>'form-control']) !!}
		{!! $errors->first('lokasi', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('pendidikan','Pendidikan',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('pendidikan',null,['class'=>'form-control']) !!}
		{!! $errors->first('pendidikan', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('deskripsi','Deskripsi',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('deskripsi',null,['class'=>'form-control']) !!}
		{!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('gaji','Gaji',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('gaji',null,['class'=>'form-control']) !!}
		{!! $errors->first('gaji', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>