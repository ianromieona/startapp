<html>
	<head>
		{{ HTML::style('assets/css/bootstrap.css'); }}
		{{ HTML::style('assets/css/main.css'); }}
		{{ HTML::script('assets/js/jquery.js'); }}
		{{ HTML::script('assets/js/bootstrap.min.js'); }}
	</head>
	<body>
		<div id="site-wrap">
			<div id="header">
				<div class="banner"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-5 pull-left" style="margin:15px 0px 25px;">
							<span id="app-name">Start-App</span>
						</div>
						<div class="col-md-5 pull-right nav-links">
							<a href="#">My Dashboard</a> | 
							<a href="#">Edit my account</a> |
							<a href="#">Logout</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<img src="" id="profile-pic"></img>
						</div>
						<div class="col-md-6">
							<span id="profile-name" class="font-30 ">Ariel Moris</span><br><br>
							<span id="profile-description" class="font-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nibh tortor, bibendum in ipsum lobortis, feugiat</span>
						</div>
					</div>
				</div>
			</div>
			<div id="main">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<ul class="nav nav-tabs nav-justified" role="tablist">
							  <li class="active"><a href="#">Recent Activities</a></li>
						      <li><a href="#">Posted Ideas</a></li>
						      <li><a href="#">Joined Ideas</a></li>
						    </ul>
						</div>
						<div class="col-md-9">
							<div>
								<div class="item-in-list">This is a post</div>
								<div class="item-in-list">This is a post</div>
								<div class="item-in-list">This is a post</div>
								<div class="item-in-list">This is a post</div>
								<div class="item-in-list">This is a post</div>
							</div>
							<div>
							</div>
						</div>
					</div>
				</div>
			<div id="footer">
			</div>
		</div>
	</body>
	<style>
		.banner{
			height:120px;
			width:100%;
			top:0;
			position: absolute;
			background-color: #42a2ce;
			border-top: 2px solid #28779b;
		}
		#profile-pic{
			width:150px;
			height:150px;
			border: 1px solid #eee;
		}
		#header{
			margin-bottom:20px;
		}
		#main{

		}
		.container{
			width: 980px;
			padding: 0 10px;
		}
		.font-30{
			font-size: 30px;
		}
		.font-14{
			font-size: 14px;
		}
		#profile-name{
			color:white;
		}
		.item-in-list{
			border-bottom : 1px solid #eee;
			padding: 15px;
		}
		.nav-links{
			padding:10px;
		}
		.nav-links a{
			font-size: 12px;
			color:white;
		}
		.nav-links a:hover{
			color:#093A64;	
		}
		h4.#logo{
			color:white ;
		}
		.btn-group{
			margin-left:20px;
			margin-bottom:20px;
		}
		#app-name{
			color:white;
			font-size:24px;
		}
	</style>
</html>