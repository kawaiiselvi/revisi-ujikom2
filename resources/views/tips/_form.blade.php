<div class="form-group{{ $errors->has('Tips') ? 'has-error' : '' }}">
	{!! Form::label('Tips','Judul',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('Tips',null,['class'=>'form-control']) !!}
		{!! $errors->first('Tips', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('Tips') ? 'has-error' : '' }}">
	{!! Form::label('Isi','Isi Tips',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('Isi',null,['class'=>'form-control']) !!}
		{!! $errors->first('Isi', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>