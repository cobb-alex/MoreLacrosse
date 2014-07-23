<!DOCTYPE html>
<html>
<head>
	<title>MoreLacrosse</title>

	{{ HTML::style('css/bootstrap.css'); }}

	<!-- JQuery -->
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>

	<!-- Bootstrap JS -->
	<script type="text/javascript" src="js/bootstrap.js"></script>


</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" style="background-color:#C0C0C0;" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<p class="navbar-brand" style="color:#000080;">MoreLacrosse.com</p>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="/">Home</a></li>
					<li><a href="/gear">Gear Reviews</a></li>
					<li class="dropdown">
				  	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Lacrosse University <b class="caret"></b></a>
				  		<ul class="dropdown-menu">
								<li><a href="/laxu/players">For Players</a></li>
								<li><a href="/laxu/coaches">For Coaches</a></li>
				  		</ul>
					</li>
					<li><a href="/blog">Blog</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>

	<div style="margin:75px 50px 50px 50px; clear:both;">
		@yield('content')
	</div>

	
</body>
</html>