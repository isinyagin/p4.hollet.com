@extends ('master')

@section ('content')
	<h1>Shorten your URL</h1>
	{{ Form::open() }}
		{{ Form::label('url', 'Enter URL and press Enter') }}
		{{ Form::text('url') }}	
	{{ Form::close() }}

	{{ $errors->first('url', '<p class=error>:message</p>') }}
@stop
