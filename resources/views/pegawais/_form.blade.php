<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('nama','Nama Lengkap',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('nama',null,['class'=>'form-control']) !!}
		{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('ttl','Tempat Tanggal Lahir',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('ttl',null,['class'=>'form-control']) !!}
		{!! $errors->first('ttl', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('alamat','Alamat',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('alamat',null,['class'=>'form-control']) !!}
		{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('notlp','No.Telepon',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('notlp',null,['class'=>'form-control']) !!}
		{!! $errors->first('notlp', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('jk','Jenis Kelamin',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('jk',null,['class'=>'form-control']) !!}
		{!! $errors->first('jk', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('agama','Agama',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('agama',null,['class'=>'form-control']) !!}
		{!! $errors->first('agama', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('kewarganegaraan','Kewarganegaraan',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('kewarganegaraan',null,['class'=>'form-control']) !!}
		{!! $errors->first('kewarganegaraan', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('status','Status',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('status',null,['class'=>'form-control']) !!}
		{!! $errors->first('status', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('email','Email',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('email',null,['class'=>'form-control']) !!}
		{!! $errors->first('email', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('hoby','Hobby',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('hoby',null,['class'=>'form-control']) !!}
		{!! $errors->first('hoby', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('sd','Sekolah Dasar',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('sd',null,['class'=>'form-control']) !!}
		{!! $errors->first('sd', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('smp','Sekolah Menengah Pertama',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('smp',null,['class'=>'form-control']) !!}
		{!! $errors->first('smp', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('sma','Sekolah Menengah Atas',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('sma',null,['class'=>'form-control']) !!}
		{!! $errors->first('sma', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('pt','Perguruan Tinggi',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('pt',null,['class'=>'form-control']) !!}
		{!! $errors->first('pt', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('pk','Pengalaman Kerja',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('pk',null,['class'=>'form-control']) !!}
		{!! $errors->first('pk', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>