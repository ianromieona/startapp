<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	{{ HTML::style('assets/css/bootstrap.css'); }}
	{{ HTML::style('assets/css/main.css'); }}
	{{ HTML::script('assets/js/jquery.js'); }}
	{{ HTML::script('assets/js/bootstrap.min.js'); }}
</head>
<body>
	@include('layouts.nav')
	{{ $content }}
</body>
</html>