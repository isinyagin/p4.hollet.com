@extends ('master')

@section ('content')
	<h1>Shortened url</h1>
	<p>{{ HTML::link($shortened, "p4.hollet.loc/$shortened") }}</p>
@stop
