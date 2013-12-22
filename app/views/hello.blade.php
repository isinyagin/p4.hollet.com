@extends ('master')

@section ('content')
	<h1>iPasteBin</h1>
	{{ Form::open() }}
		{{ Form::text('url') }}	
		{{ Form::submit('Short') }}	
	{{ Form::close() }}
@stop
