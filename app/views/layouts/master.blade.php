<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	{{ HTML::style('assets/css/bootstrap.css'); }}
	{{ HTML::script('assets/js/demo.css'); }}
	{{ HTML::script('assets/js/component.css'); }}
	{{ HTML::style('assets/css/main.css'); }}
	{{ HTML::script('assets/js/jquery.js'); }}
	{{ HTML::script('assets/js/bootstrap.min.js'); }}
	{{ HTML::script('assets/js/classie.js'); }}
	{{ HTML::script('assets/js/masonry.pkgd.min.js'); }}
</head>
<body>
	@include('layouts.nav')
	{{ $content }}
</body>
</html>