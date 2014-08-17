<div class="navbar" role="navigation">
    <div class="navbar-header">
		<button type="button" class="navbar-toggle"  data-toggle="offcanvas">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
    	<a class="navbar-brand" href="#">{{ HTML::image('assets/images/logo.png','logo',array('width'=>'100px')) }}</a>
    </div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav nav-link">
			<li>{{ link_to_route('home','IDEAS') }}</li>
			<li><a href="">Link</a></li>
			<li><a href="">Link</a></li>
			<li><a href="">Link</a></li>
		</ul>
		<ul class="nav navbar-nav user-log pull-right">
			@if(Session::get('userDetails'))
				<li>{{ link_to_route('logout','LOGOUT',null,array('class'=>'login btn btn-danger')) }}</li>
			@else
				<li><a href="{{ URL::to('/login/facebook') }}" class='login btn btn-danger'><i class="fa fa-facebook fa-2"></i> Facebook</a></li>
			@endif
			
		</ul>
	</div><!-- /.nav-collapse -->
</div><!-- /.container -->
