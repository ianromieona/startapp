<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	{{ HTML::style('assets/css/bootstrap.css'); }}
	{{ HTML::style('assets/css/demo.css'); }}
	{{ HTML::style('assets/css/component.css'); }}
	{{ HTML::style('assets/css/main.css'); }}
	{{ HTML::style('assets/css/font-awesome.css'); }}
	{{ HTML::script('assets/js/modernizr.custom.js'); }}
	
<body>
	@include('layouts.nav')
	{{ $content }}
	{{ HTML::script('assets/js/imagesloaded.pkgd.min.js'); }}
	{{ HTML::script('assets/js/masonry.pkgd.min.js'); }}
	{{ HTML::script('assets/js/classie.js'); }}
	{{ HTML::script('assets/js/cbpGridGallery.js'); }}
	<script>
		new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
	</script>
</head>
</body>
</html>