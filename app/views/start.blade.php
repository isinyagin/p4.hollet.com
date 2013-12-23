@extends ('master')

@section ('content')
	<h1>Shorten your URL</h1>
	<h3>Enter the URL and press Enter</h3>
	{{ Form::open() }}
		{{ Form::text('url') }}	
	{{ Form::close() }}

	{{ $errors->first('url', '<p class=error>:message</p>') }}
@stop
