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
	<div class="container login-page">
		<div class="row">
			<div class="col-md-4 pull-right" id="login-form">
				{{ Form::open(array('url'=>URL::to('login'),'method'=>'post')) }}
					<?php $error = $errors->first('username')!=null ? "error": ''; ?>
					{{ Form::text('username',null,array('placeholder'=>'Enter username','class'=>'form-control','id'=>$error)) }}
					{{ Form::password('password',array('placeholder'=>'Enter password','class'=>'form-control','id'=>$error)) }}
					<?php $error = $errors->first('password')!=null ? "error": ''; ?>
					{{ Form::submit('SIGN IN',array('class'=>'btn btn-danger form-control')) }}
				{{ Form::close() }}
				<hr>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-4 pull-right " id="register-form">
				{{ Form::open(array('url'=>URL::to('register'),'method'=>'post')) }}
					{{ Form::text('user_firstname',null,array('placeholder'=>'Enter firstname','class'=>'form-control','id'=>$error)) }}
					<?php $error =  $errors->first('user_firstname')!=null ? "error": ''; ?>
					{{ Form::text('user_lastname',null,array('placeholder'=>'Enter lastname','class'=>'form-control','id'=>$error)) }}
					<?php $error =  $errors->first('user_lastname')!=null ? "error": ''; ?>
					{{ Form::email('user_email',null,array('placeholder'=>'Enter email','class'=>'form-control','id'=>$error)) }}
					<?php $error =  $errors->first('user_lastname')!=null ? "error": ''; ?>
					{{ Form::text('username',null,array('placeholder'=>'Enter username','class'=>'form-control','id'=>$error)) }}
					<?php $error =  $errors->first('username')!=null ? "error": ''; ?>
					{{ Form::password('password',array('placeholder'=>'Enter password','class'=>'form-control','id'=>$error)) }}
					<?php $error =  $errors->first('password')!=null ? "error": ''; ?>
					{{ Form::submit('SIGN UP',array('class'=>'btn btn-primary form-control')) }}
				{{ Form::close() }}
			</div>
		</div>
	</div>

</body>
</html>