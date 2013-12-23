<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Short URL</title>
	{{ HTML::style('assets/css/main.css') }}
</head>
<body>
	<div id='container'>
		@yield('content')
	</div>
	{{ HTML::script('assets/js/ZeroClipboard.js') }}
	{{ HTML::script('assets/js/clip.js') }}
</body>
</html>
