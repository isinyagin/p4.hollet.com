@extends ('master')

@section ('content')
	<h1>Shortened url</h1>
	<p>{{ HTML::link($shortened, "p4.hollet.com/$shortened") }}</p>
	<button id="copy-button" data-clipboard-text="p4.hollet.com/{{ $shortened }}">Copy to Clipboard</button>
@stop
