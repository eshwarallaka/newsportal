<!DOCTYPE HTML>
<!-- BEGIN html -->
<html lang = "en">
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
form.one {
    border: 3px solid #f1f1f1;
	margin:0 auto;
	width:30%;
	
}

input[type=text], input[type=password], input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}


.facebook a{
  float: left;
 width: 138px;
 height: auto;
 padding: 10px;
 color: white;
 text-align: left;
 font-size: 15px;
  border-bottom: 2px solid rgb(32, 109, 165);
 text-shadow: 1px 1px 1px rgb(32, 109, 165);
  background: #297fb8;
  font-weight:bold;
}
.twitter a{
  float: right;
  width:138px;
  height: auto;
  padding: 10px;
  color: white;
  text-align: left;
  font-size: 15px;
  border-bottom: 2px solid rgb(32, 109, 165);
  text-shadow: 1px 1px 1px rgb(32, 109, 165);
  background:  #297fb8;
  font-weight:bold;
  
}
.twitter a:hover{background-color: #2886cc;}
.facebook a:hover{ background-color: #206da5;}
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
								<li><button type="button" class="btn btn-primary" onclick="location.href = '{{ url('/login') }}';">Login</button></li>
								<li><button type="button" class="btn btn-primary" onclick="location.href = '{{ url('/register') }}';">Register</button></li>
								
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
					<div class="main-content">

						<!-- BEGIN .left-content -->
						<div class="left-content">
							<div class="main-title">
								<h2>Login</h2>
								<span>Come and visit us</span>
							</div>
							

<form role="form" method="POST" action="{{ url('/login') }}" class="one">
                        {{ csrf_field() }}


  <div class="container">
    <label><b>Email</b></label>
	<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter Email" >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
    <label><b>Password</b></label>
	<input id="password" type="password" class="form-control" name="password" required placeholder="Enter Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
        
    <button type="submit">Login</button>
	       <div class="facebook"><a title="Sign in via Facebook" href="{{ url('/auth/facebook') }}">
                  <i class="fa fa-facebook"></i> Sign in <strong>Facebook</strong></a></div>
				                  <div class="twitter"><a title="Sign in Via Twitter">
                  <i class="fa fa-twitter"></i>Sign via <strong>Twitter</strong></a></div>
				  <br>
				  <br>

    <!-- <input type="checkbox" checked="checked"> Remember me-->
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"  onclick="location.href = '{{ url('/') }}';">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
      
</form>





						<!-- END .left-content -->
						</div>

					</div>
					
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
										<a href="#" class="image-avatar"><img src="images/photos/avatar-1.jpg" alt="" /></a>
									</div>
									<div class="item-content">
										<h4><a href="#">Portal-World</a></h4>
										<p>Cum an officiis integebat necessitatibus, impedi tes menandri has clita...</p>
										<a href="#" class="read-more-link">View article<i class="fa fa-angle-double-right"></i></a>
									</div>
								</div>
								<div class="item">
									<div class="item-header">
										<a href="#" class="image-avatar"><img src="images/photos/avatar-2.jpg" alt="" /></a>
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
										<a href="#" class="image-hover"><img src="images/photos/image-17.jpg" alt="" /></a>
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
										<a href="#" class="image-hover"><img src="images/photos/image-19.jpg" alt="" /></a>
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
										<a href="#" class="image-hover"><img src="images/photos/image-18.jpg" alt="" /></a>
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

		<!-- Demo Only -->
		

	<!-- END body -->
	</body>
<!-- END html -->


</html>