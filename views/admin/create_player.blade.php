@extends('admin.main')

@section('title','SBG7')

@section('content')

	<h1>Create Players / Teams</h1>

	{!! Form::open(['route' => 'player.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name of Player / Team', 'required' ]) !!}
		</div>

		</br>
		<div class="form-group">
			{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection