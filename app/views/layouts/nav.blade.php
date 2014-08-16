<div class="navbar" role="navigation">
    <div class="navbar-header">
		<button type="button" class="navbar-toggle"  data-toggle="offcanvas">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
    	<a class="navbar-brand" href="#">WebCup</a>
    </div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav nav-link">
			<li><a href="">Link</a></li>
			<li><a href="">Link</a></li>
			<li><a href="">Link</a></li>
			<li><a href="">Link</a></li>
		</ul>
		<ul class="nav navbar-nav user-log pull-right">
			@if(Auth::check())
				<li>{{ link_to_route('logout','SIGN OUT',null,array('class'=>'login btn btn-danger')) }}</li>
			@else
				<li>{{ link_to_route('login','SIGN IN',null,array('class'=>'login btn btn-danger')) }}</li>
			@endif
			
		</ul>
	</div><!-- /.nav-collapse -->
</div><!-- /.container -->
