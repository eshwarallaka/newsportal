<html>
	<!-- BEGIN head -->
	

<head>
		<title>News-Portal | Login</title>

		<!-- Meta Tags -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.png') }}" type="image/x-icon" />

		<!-- Stylesheets -->
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/reset.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/animate.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/main-stylesheet.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/lightbox.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/shortcodes.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/custom-fonts.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/custom-colors.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/owl.theme.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/dat-menu.css') }}" />
		<!--[if lte IE 8]>
		<link type="text/css" rel="stylesheet" href="css/ie-ancient.css" />
		<![endif]-->

		<!-- Demo Only -->


	<!-- END head -->
	</head>
	<style>
	button.btn.btn-primary {
	background-color:#E5E5E5;
	
    color: black;
    padding: 2px 6px;
    margin: 8px 0;
    border: 1px solid black;
    cursor: pointer;
    width: 100%;
}



blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

/* Reset End */
.clr { clear: both;}

#wrapper {
	margin: 50px auto;
	width: 540px;
	height:460px;
	background: #fff;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-o-border-radius: 5px;
	-ms-border-radius: 5px;
	border-radius: 5px;
	padding: 40px;
}

.join {
	color: #222;
	font-size: 44px;
	font-weight:700;
	float: left;
	text-shadow: 1px 0 1px #777;
}
.lock {
	float: right;
	background:url("http://i.imgur.com/Jsq8WUM.png") no-repeat;
	width:14px;
	height:18px;
	margin-top: 12px;
}
.login-options {
	margin-top: 15px;
	color: #9c9c9c;
	margin-bottom: 25px;
}

.twitter {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
	width: 160px;
	height:40px;
	padding-top: 10px;
    border: 0px solid #178bb6;
    border-radius: 8px;
    background: #992828;
    background: -webkit-gradient(linear, left top, left bottom, from(#1daee3), to(#1daee3));
    background: -moz-linear-gradient(top, #1daee3, #1daee3);
    background: linear-gradient(to bottom, #1daee3, #1daee3);
    font-family: 'Open Sans', sans-serif;
	font-weight:700;
    color: #ffffff;
    text-decoration: none;
	margin-right: 10px;
}
.twitter:hover,
.twitter:focus {
    background: #1ca4d6;
    color: #ffffff;
    text-decoration: none;
}
.twitter:active {
    background: #1ca4d6;
}
.twitter:before{
    content:  "\0000a0";
    display: inline-block;
    height: 50px;
    width: 45px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
	padding-left: 10px;
    top: -10px;
    left: -21px;
    background: url("http://i.imgur.com/2ATElSK.png") no-repeat center center #1ca4d6;
    background-size: 29px 24px;
	-webkit-border-radius: 8px 0px 0px 8px;
	-moz-border-radius: 8px 0px 0px 8px;
	-o-border-radius: 8px 0px 0px 8px;
	-ms-border-radius: 8px 0px 0px 8px;
	border-radius: 8px 0px 0px 8px;
}
.facebook {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
	width: 160px;
	height:40px;
	padding-top: 10px;
    border: 0px solid #178bb6;
    border-radius: 8px;
    background: #3b5998;
    font-family: 'Open Sans', sans-serif;
	font-weight:700;
    color: #ffffff;
    text-decoration: none;
	margin-right: 10px;
}
.facebook:hover,
.facebook:focus {
    background: #37528c;
    color: #ffffff;
    text-decoration: none;
}
.facebook:active {
    background: #1ca4d6;
}
.facebook:before{
    content:  "\0000a0";
    display: inline-block;
    height: 50px;
    width: 45px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
	padding-left: 10px;
    top: -10px;
    left: -10px;
    background: url("http://i.imgur.com/0bcxkOD.png") no-repeat center center #37528c;
    background-size: 13px 24px;
	-webkit-border-radius: 8px 0px 0px 8px;
	-moz-border-radius: 8px 0px 0px 8px;
	-o-border-radius: 8px 0px 0px 8px;
	-ms-border-radius: 8px 0px 0px 8px;
	border-radius: 8px 0px 0px 8px;
}
.google {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
	width: 160px;
	height:40px;
	padding-top: 10px;
    border: 0px solid #178bb6;
    border-radius: 8px;
    background: #d34836;
    font-family: 'Open Sans', sans-serif;
	font-weight:700;
    color: #ffffff;
    text-decoration: none;
}
.google:hover,
.google:focus {
    background: #c74534;
    color: #ffffff;
    text-decoration: none;
}
.google:active {
    background: #1ca4d6;
}
.google:before{
    content:  "\0000a0";
    display: inline-block;
    height: 50px;
    width: 45px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
	padding-left: 10px;
    top: -10px;
    left: -15px;
    background: url("http://i.imgur.com/GxFF74f.png") no-repeat center center #c74534;
    background-size: 24px 24px;
	-webkit-border-radius: 8px 0px 0px 8px;
	-moz-border-radius: 8px 0px 0px 8px;
	-o-border-radius: 8px 0px 0px 8px;
	-ms-border-radius: 8px 0px 0px 8px;
	border-radius: 8px 0px 0px 8px;
}

.clr hr {
	border: 1px solid #e9e9e9;
	margin:25px 0;
}
.mail-text {
	color: #777;
}
.forms {
	margin-top: 20px;
	width:500px;
}
.forms input {
	border: 1px solid #d9d9d9 !important;
	color: #bebebe;
	padding: 7px 0px 7px 50px;
	outline:none;
    transition: all 0.25s ease-in-out;
    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
	margin-bottom: 15px;
}
.forms input:focus {
    box-shadow: 0 0 5px rgba(48, 168, 218, 1);
    -webkit-box-shadow: 0 0 5px rgba(48, 168, 218, 1); 
    -moz-box-shadow: 0 0 5px rgba(48, 168, 218, 1);
    border:1px solid rgba(48, 168, 218, 1) !important; 
}
.forms #name {
	background:url("http://i.imgur.com/n6engUt.png") no-repeat left center;
	background-position: 10px 5px;
	border-right: 1px solid #f1f1f1;
}
.forms #email {
	background:url("http://i.imgur.com/xCWr97f.png") no-repeat left center;
	background-position: 10px 10px;
	border-right: 1px solid #f1f1f1;
}
.forms #password {
	background:url("http://i.imgur.com/69UwNcl.png") no-repeat left center;
	background-position: 10px 5px;
	border-right: 1px solid #f1f1f1;
}
.forms #password-confirm {
	background:url("http://i.imgur.com/69UwNcl.png") no-repeat left center;
	background-position: 10px 5px;
	border-right: 1px solid #f1f1f1;
}
.create-acc {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 10px 11px;
    border: 0px solid #b96529;
    border-radius: 8px;
    background: #992828;
    background: -webkit-gradient(linear, left top, left bottom, from(#e77e33), to(#e77e33));
    background: -moz-linear-gradient(top, #e77e33, #e77e33);
    background: linear-gradient(to bottom, #e77e33, #e77e33);
    font-family: 'Open Sans', sans-serif;
	font-weight:700;
    color: #ffffff;
    text-decoration: none;
	height: 50px;
	margin-top: 20px;
}
.create-acc:hover,
.create-acc:focus {
    border: 0px solid #e77e33;
    background: #db7830;
    color: #ffffff;
    text-decoration: none;
}
.create-acc:active {
    background: #982727;
    background: -webkit-gradient(linear, left top, left bottom, from(#8b4c1f), to(#e77e33));
    background: -moz-linear-gradient(top, #8b4c1f, #e77e33);
    background: linear-gradient(to bottom, #8b4c1f, #e77e33);
}
.create-acc:after{
    content:  "\0000a0";
    display: inline-block;
    height: 50px;
    width: 50px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
	padding-left: 10px;
    top: -10px;
    right: -15px;
    background: url("http://i.imgur.com/ZcP5IpD.png") no-repeat center center #db7830;
    background-size: 8px 11px;
	-webkit-border-radius: 0px 8px 8px 0px;
	-moz-border-radius: 0px 8px 8px 0px;
	-o-border-radius: 0px 8px 8px 0px;
	-ms-border-radius: 0px 8px 8px 0px;
	border-radius: 0px 8px 8px 0px;
}


</style>

	<!-- BEGIN body -->
	<body>

		<a href="#dat-menu" class="ot-menu-toggle"><i class="fa fa-bars"></i>Toggle Menu</a>
		<!-- BEGIN .boxed -->
		<div class="boxed active">
			
			<!-- BEGIN .header -->
<header class="header willfix">
			
				
				<!-- BEGIN .wrapper -->
				<div class="wrapper">
				

					<div class="header-left">
						<div class="header-logo">
							<a href="{{ url('/') }}" class="otanimation" data-anim-object=".header-logo a.otanimation img, .header-logo a.otanimation h1" data-anim-in="flipOutX" data-anim-out="bounceIn"><img src="{{ URL::asset('assets/images/logo.png') }}" alt="" /></a>
							<strong data-anim-in="fadeOutUpBig" data-anim-out="bounceIn"><i class="fa fa-home"></i> Homepage</strong>
						</div>
						<div class="header-socials">
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
							<a href="#"><i class="fa fa-vimeo-square"></i></a>
						</div>
					</div>

					<div class="header-right">
						<nav class="under-menu">
							<ul class="load-responsive" rel="Sub Menu">
							
								<li><a href="#">About Us </a></li>
							
								<li><a href="#">Contact Us</a></li>
									
							
								<li><a href="#">Breaking News</a></li>
								<li><a href="#">Terms of Use </a></li>
								<li><a href="#">Privacy Policy </a></li>
								<li><a href="#">Franchise TAP </a></li>
								@if(Auth::user())
									<form id="logout-form" action="{{ url('/logout') }}" method="POST">
										<li><button type="submit" class="btn btn-primary">Logout</button></li>
										{{ csrf_field() }}
									</form>
								@else
								<li><button type="button" class="btn btn-primary" onclick="location.href = '{{ url('/login') }}';">Login</button></li>
								<li><button type="button" class="btn btn-primary" onclick="location.href = '{{ url('/register') }}';">Register</button></li>
								@endif
							</ul>
						
						</nav>
						<nav class="main-menu">
							<ul class="load-responsive" rel="Main Menu">
                                 <li class="has-ot-mega-menu"><a href="#"><span>Sections<i>Layout</i> </span></a>
									<ul class="ot-mega-menu">
										<li class="ot-dropdown menu-item">
											<ul class="widget-menu widget">
												<li><a href="category.html"><i class="fa fa-comment"></i>Arts & Entertainment</a></li>
												<li><a href="#"><i class="fa fa-camera-retro"></i>Business and Finance</a></li>
												<li><a href="#"><i class="fa fa-bomb"></i>Education</a></li>
												<li><a href="#"><i class="fa fa-fighter-jet"></i>Elections</a></li>
												<li><a href="#"><i class="fa fa-support"></i>Food & Drink</a></li>
											</ul>
										</li>
										<li class="ot-dropdown menu-item">
											<ul class="widget-menu widget">
												<li><a href="#"><i class="fa fa-comment"></i>Giving Back</a></li>
												<li><a href="#"><i class="fa fa-camera-retro"></i>Government</a></li>
												<li><a href="#"><i class="fa fa-bomb"></i>Green</a></li>
												<li><a href="#"><i class="fa fa-fighter-jet"></i>Health & Wellness</a></li>
												<li><a href="#"><i class="fa fa-support"></i>Home & Garden</a></li>
											</ul>
										</li>
										<li class="ot-dropdown menu-item">
											<ul class="widget-menu widget">
												<li><a href="#"><i class="fa fa-comment"></i>Law & Justice</a></li>
												<li><a href="#"><i class="fa fa-camera-retro"></i>Police & Fire</a></li>
												<li><a href="#"><i class="fa fa-bomb"></i>Real Estate</a></li>
												<li><a href="#"><i class="fa fa-fighter-jet"></i>Religions And Spirituality</a></li>
												<li><a href="#"><i class="fa fa-support"></i>Sports</a></li>
											</ul>
										</li>
			
	
									</ul>
								</li>
								
								<li><a href="#"><span>Opinion<i>Layout</i></span></a>
									<ul class="sub-menu">
										<li><a href="#">Candidate Statements</a></li>
										<li><a href="#">Columns</a></li>
										<li><a href="#">Guest Columns</a></li>
									
										
										<li><a href="#">Letters To The Editor</a></li>
											<li><a href="#">Police Blotter</a></li>
												<li><a href="#">Press Releases</a></li>
									</ul>
								</li>
								<li><a href="#">Events<i>Blog Layout</i></a></li>
						        <li><a href="#">Classifieds<i>Blog Layout</i></a></li>
								<li><a href="#">Real Estate<i>Blog Layout</i></a></li>
								<li><a href="photo-gallery-single.html">Gallery<i>Blog Layout</i></a></li>
								<li><a href="#">Obituaries<i>Blog Layout</i></a></li>
	
			
								
							</ul>
									<div class="search-header">
								<form action="#">
									<input type="search" value="" placeholder="Search.." autocomplete="off" required="required" name="s" />
									<input type="submit" value="search" />
								</form>
							</div> 
						
						</nav>
	
					</div>

					<div class="clear-float"></div>
					
				<!-- END .wrapper -->
				</div>
				
			<!-- END .header -->
			</header>
			
			<!-- BEGIN .content -->
			<section class="content">
				
				<!-- BEGIN .wrapper -->
				<div class="wrapper">
					

					<!-- BEGIN .breaking-news -->
					<div class="breaking-news">
						<div class="breaking-title">
							<h3>Breaking News</h3>
						</div>
						<div class="breaking-block">
							<ul>
								<li><a href="archive.html" class="break-category" style="background-color: #276197;">Tech News</a><h4><a href="post.html">Prize pool for The International 2014 surges to $5.7 million</a></h4><a href="archive.html" class="comment-link"><i class="fa fa-comment-o"></i>0</a></li>
								<li><a href="archive.html" class="break-category" style="background-color: #429d4a;">Contests</a><h4><a href="post.html">An rebum nusquam cum duo invenire mundi</a></h4><a href="archive.html" class="comment-link"><i class="fa fa-comment-o"></i>0</a></li>
								<li><a href="archive.html" class="break-category" style="background-color: #ffd800; color: #232323;">World News</a><h4><a href="archive.html">An rebum nusquam cum duo invenire mundi</a></h4><a href="archive.html" class="comment-link"><i class="fa fa-comment-o"></i>0</a></li>
							</ul>
						</div>
					<!-- END .breaking-news -->
					</div>


					<!-- <div class="main-content has-sidebar"> -->
					<!-- <div class="main-content has-double-sidebar"> -->
					@yield('content')
				<!-- END .wrapper -->
				</div>
				
			<!-- BEGIN .content -->
			</section>
			
			<!-- BEGIN .footer -->
<footer class="footer">
				
				<!-- BEGIN .wrapper -->
				<div class="wrapper">

					<div class="footer-widgets">

						<!-- BEGIN .widget -->
						<div class="widget">
							<h3>About NewsPortal</h3>
							<div class="socialize-widget">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
								<ul class="list-group">
									<li><i class="fa fa-location-arrow fa-fw"></i>xxxxx
AS post XX
<br/>London</li>
									<li><i class="fa fa-phone fa-fw"></i>123 123-0123</li>
									<li><i class="fa fa-envelope fa-fw"></i><a href="mailto:editor@tapinto.net">xxxx@.net</a></li>
									
								</ul>
							</div>
						<!-- END .widget -->
						</div>

						<!-- BEGIN .widget -->
						<div class="widget" style="background: red;">
							<div class="ot-tabbed">
								<h3 class="active">Comments</h3>
								<h3>Latest News</h3>
							</div>
							<div class="comments-block ot-tab-block active">
								<div class="item">
									<div class="item-header">
										<a href="#" class="image-avatar"><img src="{{ URL::asset('assets/images/photos/avatar-1.jpg') }}" alt="" /></a>
									</div>
									<div class="item-content">
										<h4><a href="#">Portal-World</a></h4>
										<p>Cum an officiis integebat necessitatibus, impedi tes menandri has clita...</p>
										<a href="#" class="read-more-link">View article<i class="fa fa-angle-double-right"></i></a>
									</div>
								</div>
								<div class="item">
									<div class="item-header">
										<a href="#" class="image-avatar"><img src="{{ URL::asset('assets/images/photos/avatar-2.jpg') }}" alt="" /></a>
									</div>
									<div class="item-content">
										<h4><a href="#">Keir Donato</a></h4>
										<p>Simul albucius accusata per in, ei soleat insolens.</p>
										<a href="#" class="read-more-link">View article<i class="fa fa-angle-double-right"></i></a>
									</div>
								</div>
							</div>
							<div class="article-block ot-tab-block">
								<div class="item">
									<div class="item-header">
										<a href="#" class="image-hover"><img src="{{ URL::asset('assets/images/photos/image-17.jpg') }}" alt="" /></a>
									</div>
									<div class="item-content">
										<div class="content-category">
											<a href="#" style="color: #276197;">Tech News</a>
										</div>
										<h4><a href="#">Eum ex civibus pertinax antur his ea dicam</a></h4>
										<span><a href="#">September 11, 2014</a></span>
									</div>
								</div>
								<div class="item">
									<div class="item-header">
										<a href="#" class="image-hover"><img src="{{ URL::asset('assets/images/photos/image-19.jpg') }}" alt="" /></a>
									</div>
									<div class="item-content">
										<div class="content-category">
											<a href="#" style="color: #1985e1;">Nostalgia</a>
										</div>
										<h4><a href="#">Eum ex civibus pertinax antur his ea dicam</a></h4>
										<span><a href="#">September 11, 2014</a></span>
									</div>
								</div>
								<div class="item">
									<div class="item-header">
										<a href="#" class="image-hover"><img src="{{ URL::asset('assets/images/photos/image-18.jpg') }}" alt="" /></a>
									</div>
									<div class="item-content">
										<div class="content-category">
											<a href="#" style="color: #ef8722;">World News</a>
										</div>
										<h4><a href="#">Eum ex civibus pertinax antur his ea dicam</a></h4>
										<span><a href="#">September 11, 2014</a></span>
									</div>
								</div>
							</div>
						<!-- END .widget -->
						</div>

						<!-- BEGIN .widget -->
						<div class="widget">
							<h3>Tag Cloud</h3>
						<div class="tagcloud">
								<a href="#">Aboutus</a>
								<a href="#">Contactus</a>
								<a href="#">Breaking News</a>
								<a href="#">Terms of use</a>
								<a href="#">Privacy Policy</a>
								<a href="#">Franchise Tap</a>
	








  	<a href="#">Sections</a>
								<a href="#">Opinion</a>
								<a href="#">Events</a>
								<a href="#">Classifieds</a>
								<a href="#">Real Estate</a>
								<a href="photo-gallery-single.html">Gallery</a>
								<a href="#">Obituaries</a>
							
							</div>
						<!-- END .widget -->
						</div>

					</div>
					
				<!-- END .wrapper -->
				</div>

				<div class="footer-copyright">
					<!-- BEGIN .wrapper -->
					<div class="wrapper">
						<p class="right">Designed by <strong><a href="http://www.lorainnovations.com/" target="_blank">lORA</a></strong></p>
						<p>&copy; All Rights Reserved <strong>News Portal</strong></p>
					<!-- END .wrapper -->
					</div>
				</div>
				
			<!-- END .footer -->
			</footer>
			
		<!-- END .boxed -->
		</div>

		<!-- Scripts -->
		<script type="text/javascript" src="{{ URL::asset('assets/jscript/jquery-latest.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('assets/jscript/snap.svg-min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('assets/jscript/theme-scripts.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('assets/jscript/lightbox.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('assets/jscript/owl.carousel.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('assets/jscript/SmoothScroll.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('assets/jscript/iscroll.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('assets/jscript/modernizr.custom.50878.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('assets/jscript/dat-menu.js') }}"></script>
		<script>
			jQuery(document).ready(function() {
				jQuery(".ot-slider").owlCarousel({
					items : 1,
					autoPlay : true,
					stopOnHover : true,
					navigation : true,
					lazyLoad : true,
					singleItem : true,
					pagination : false
				});
			});
		</script>

		<!-- Demo Only -->
		

	<!-- END body -->
	</body>
<!-- END html -->


</html>

