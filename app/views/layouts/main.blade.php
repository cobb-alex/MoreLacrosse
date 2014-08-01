<!DOCTYPE html>
<html>
<head>
	<title>MoreLacrosse</title>

	{{ HTML::style('css/bootstrap.css'); }}

	<!-- JQuery -->
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
	<script type="text/javascript">
		tinymce.init({
		    selector: "textarea",
		    plugins: "media"
		 });
	</script>

	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
	<link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196">
	<link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#2d89ef">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">

</head>
<body>

	<!-- Bootstrap JS -->
	<script type="text/javascript" src="/js/bootstrap.js"></script>
	
	<div class="navbar navbar-inverse" role="navigation" style="background-color:#000080">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav" style="margin-left:-100px;">
					<li><a style="color:#fff" href="/">Home</a></li>
					<li><a style="color:#fff" href="/gear">Gear Reviews</a></li>
					<li class="dropdown">
				  	<a style="color:#fff" href="" class="dropdown-toggle" data-toggle="dropdown">Lacrosse University <b class="caret"></b></a>
				  		<ul class="dropdown-menu" role="menu">
								<li><a href="/laxu/players">For Players</a></li>
								<li><a href="/laxu/coaches">For Coaches</a></li>
				  		</ul>
					</li>
					<li><a style="color:#fff" href="/blog">Blog</a></li>
					<li><a style="color:#fff" href="/about">About Us</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<div class="container-fluid">
		<div style="background-color: #C0C0C0;margin-top:-20px;" class="row">
			<div class="col-md-3"> 
				{{ HTML::image('images/MoreLacrosseLogo.png', 'More Lacrosse', array('style' => 'margin-left:25px;'))}}
			</div>
			<div style="text-align:center; margin-top:25px" class="col-md-6">
				@yield('title')
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<a href="http://www.youtube.com/user/morelacrosse"> {{ HTML::image('images/YouTubeLogo.png', 'YouTube', array('style' => 'max-width:75%; max-height 75%; margin-top:25px;'))}} </a>
			</div>
		</div>
	</div>

	<div style="margin:25px 50px 50px 50px;">
		@yield('content')
	</div>

	
</body>
</html>