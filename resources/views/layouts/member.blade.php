<!doctype html>
<html class="no-js" lang="">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>:: User| Admin Dashboard ::</title>
<!-- <link rel="icon" type="image/ico" href="assets/images/favicon.ico" /> -->
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="{{ URL::asset('assets/members/css/vendor/animsition.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/members/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/members/js/vendor/chosen/chosen.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/members/css/main.css') }}">
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.4.min.js"></script>
<!-- <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
<script type="text/javascript">
   $(function() {
   $("#newpost").validate();
   });
</script>-->
</head>
<body id="oakleaf" class="main_Wrapper">
<?php $user = Auth::user();?>
<!--Application Content -->
<div id="wrap" class="animsition"> 
	
	<!--  HEADER Content -->
	<section id="header">
		<header class="clearfix"> 
			<!-- Branding -->
			<div class="branding"> <a class="brand" href="#"><span>{{$user->name}}</span></a> <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a> </div>
			<!-- Branding end --> 
			
			<!-- Left-side navigation -->
			<ul class="nav-left pull-left list-unstyled list-inline">
				<li class="leftmenu-collapse"><a role="button" tabindex="0" class="collapse-leftmenu"><i class="fa fa-arrow-circle-o-left"></i></a></li>
			</ul>
			<!-- Left-side navigation end --> 
			
			<!-- Search -->
			<div class="search" id="main-search">
				<input type="text" class="form-control underline-input" placeholder="Anything Ask ME...">
			</div>
			<!-- Search end --> 
			
			<!-- Right-side navigation -->
			<ul class="nav-right pull-right list-inline">
				<li class="dropdown nav-profile"> <a href class="dropdown-toggle" data-toggle="dropdown"> <img src="assets/images/profile-photo.jpg" alt="" class="0 size-30x30"></a>
					<ul class="dropdown-menu" role="menu">
						<li>
							<div class="user-info">
								<div class="user-name">Hemanth</div>
								<div class="user-position online">Available</div>
							</div>
						</li>
						<li><a href="#" role="button" tabindex="0"><span class="label label-success pull-right">80%</span><i class="fa fa-user"></i>Profile</a></li>
						<li><a role="button" tabindex="0"><span class="label label-info pull-right">new</span><i class="fa fa-check"></i>Tasks</a></li>
						<li> <a role="button" tabindex="0"><i class="fa fa-cog"></i>Settings</a></li>
						<li class="divider"></li>
						<li><a href="#" role="button" tabindex="0"><i class="fa fa-lock"></i>Lock</a></li>
						<li><a href="#" role="button" tabindex="0"><i class="fa fa-sign-out"></i>Logout</a></li>
					</ul>
				</li>
				<li class="dropdown users"> <a href class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-th"></i>					
					</a>
					<div class="dropdown-menu pull-right with-arrow panel panel-default" role="menu">						
						<ul class="app-sortcut">
							<li>
								<a href="#" class="connection-item">
								<i class="fa  fa-umbrella"></i>
								<span class="block">weather</span>
								</a>
							</li>
							<li>
								<a href="#" class="connection-item">
								<i class="fa fa-cloud-upload"></i>
								<span class="block">Drive</span>
								</a>
							</li>
							<li>
								<a href="#" class="connection-item">
								<i class="fa fa-calendar-check-o"></i>
								<span class="block">calendar</span>
								</a>
							</li>
							<li>
								<a href="#" class="connection-item">
								<i class="fa fa-map-o"></i>
								<span class="block">map</span>
								</a>
							</li>
							<li>
								<a href="#" class="connection-item">
								<i class="fa fa-comments-o"></i>
								<span class="block">chat</span>
								</a>
							</li>
							<li>
								<a href="#" class="connection-item">
								<i class="fa fa-book"></i>
								<span class="block">contact</span>
								</a>
							</li>
						</ul>						
					</div>
				</li>
				<li class="dropdown messages"> <a href class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope"></i>
					<div class="notify"><span class="heartbit"></span><span class="point"></span></div>
					</a>
					<div class="dropdown-menu pull-right with-arrow panel panel-default" role="menu">						
						<ul class="list-group">
							<li class="list-group-item"> <a role="button" tabindex="0" class="media"> <span class="pull-left media-object thumb thumb-sm"> <img src="{{ URL::asset('assets/members/images/pi-avatar.jp') }}" alt="" class=""> </span>
								<div class="media-body"> <span class="block">Lucas sent you a message</span> <small class="text-muted">9 minutes ago</small> </div>
								</a> </li>
							<li class="list-group-item"> <a role="button" tabindex="0" class="media"> <span class="pull-left media-object  thumb thumb-sm"> <img src="{{ URL::asset('assets/members/images/Jane-avatar.jpg') }}" alt="" class=""> </span>
								<div class="media-body"> <span class="block">Jane sent you a message</span> <small class="text-muted">27 minutes ago</small> </div>
								</a> </li>
							<li class="list-group-item"> <a role="button" tabindex="0" class="media"> <span class="pull-left media-object  thumb thumb-sm"> <img src="{{ URL::asset('assets/members/images/random-avatar1.jpg') }}" alt="" class=""> </span>
								<div class="media-body"> <span class="block">Lee sent you a message</span> <small class="text-muted">2 hour ago</small> </div>
								</a> </li>
							<li class="list-group-item"> <a role="button" tabindex="0" class="media"> <span class="pull-left media-object  thumb thumb-sm"> <img src="{{ URL::asset('assets/members/images/random-avatar3.jpg') }}" alt="" class=""> </span>
								<div class="media-body"> <span class="block">Rihtik sent you a message</span> <small class="text-muted">8 hours ago</small> </div>
								</a> </li>
						</ul>
						<div class="panel-footer"> <a role="button" tabindex="0">Show all messages <i class="pull-right fa fa-angle-right"></i></a> </div>
					</div>
				</li>
				<li class="dropdown notifications"> <a href class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell"></i>
					<div class="notify"><span class="heartbit"></span><span class="point"></span></div>
					</a>
					<div class="dropdown-menu pull-right with-arrow panel panel-default ">					
						<ul class="list-group">
							<li class="list-group-item"> <a role="button" tabindex="0" class="media"> <span class="pull-left media-object media-icon"> <i class="fa fa-ban"></i> </span>
								<div class="media-body"> <span class="block">User Lucas cancelled account</span> <small class="text-muted">12 minutes ago</small> </div>
								</a> </li>
							<li class="list-group-item"> <a role="button" tabindex="0" class="media"> <span class="pull-left media-object media-icon"> <i class="fa fa-spotify"></i> </span>
								<div class="media-body"> <span class="block">2 voice mails</span> <small class="text-muted">Neque porro quisquam est</small> </div>
								</a> </li>
							<li class="list-group-item"> <a role="button" tabindex="0" class="media"> <span class="pull-left media-object media-icon"> <i class="fa fa-whatsapp"></i> </span>
								<div class="media-body"> <span class="block">8 voice messanger</span> <small class="text-muted">8 texts</small> </div>
								</a> </li>
						</ul>
						<div class="panel-footer"> <a role="button" tabindex="0">Show all notifications <i class="fa fa-angle-right pull-right"></i></a> </div>
					</div>
				</li>
				<li class="toggle-right-leftmenu"><a role="button" tabindex="0"><i class="fa fa-gear"></i></a></li>
			</ul>
			<!-- Right-side navigation end --> 
		</header>
	</section>
	<!--/ HEADER Content  --> 
	
	<!--  CONTROLS Content  -->
	<div id="controls"> 
		<!--SIDEBAR Content -->
		<aside id="leftmenu">
			<div id="leftmenu-wrap">
				<div class="panel-group slim-scroll" role="tablist">
					<div class="panel panel-default">						
						<div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
							<div class="panel-body"> 
								<!--  NAVIGATION Content -->
								<ul id="navigation">
									<li><a href="profile.html"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
									<li class="active open"><a href="profile.html"><i class="fa fa-user"></i> <span>User Profile</span></a></li>
							
								</ul>
								<!--/ NAVIGATION Content --> 
							</div>
						</div>
					</div>
			
				</div>
			</div>
		</aside>
		<!--/ SIDEBAR Content --> 
		
		<!--RIGHTBAR Content -->
		<aside id="rightmenu">
			<div role="tabpanel"> 
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">Chat</a></li>
					<li role="presentation"><a href="#todo" aria-controls="todo" role="tab" data-toggle="tab">Todo</a></li>
					<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="chat">
						<div class="search">
							<div class="form-group is-empty">
								<input type="text" class="form-control underline-input" placeholder="Search...">
								<span class="material-input"></span></div>
						</div>
						<h6>Recent</h6>
						<ul>
							<li class="online">
								<div class="media"> <a class="pull-left thumb thumb-sm" role="button" tabindex="0"> <img class="media-object " src="assets/images/pi-avatar.jpg" alt=""> </a>
									<div class="media-body"> <span class="name">Claire Sassu</span> <span class="message">Can you share the...</span> <span class="badge badge-outline status"></span> </div>
								</div>
							</li>
							<li class="online">
								<div class="media"> <a class="pull-left thumb thumb-sm" role="button" tabindex="0"> <img class="media-object " src="assets/images/John-avatar.jpg" alt=""> </a>
									<div class="media-body">
										<div class="media-body"> <span class="name">Maggie jackson</span> <span class="message">Can you share the...</span> <span class="badge badge-outline status"></span> </div>
									</div>
								</div>
							</li>
							<li class="online">
								<div class="media"> <a class="pull-left thumb thumb-sm" role="button" tabindex="0"> <img class="media-object " src="assets/images/Jane-avatar.jpg" alt=""> </a>
									<div class="media-body">
										<div class="media-body"> <span class="name">Joel King</span> <span class="message">Ready for the meeti...</span> <span class="badge badge-outline status"></span> </div>
									</div>
								</div>
							</li>
						</ul>
						<h6>Contacts</h6>
						<ul>
							<li class="offline">
								<div class="media"> <a class="pull-left thumb thumb-sm" role="button" tabindex="0"> <img class="media-object " src="assets/images/random-avatar4.jpg" alt=""> </a>
									<div class="media-body">
										<div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
									</div>
								</div>
							</li>
							<li class="online">
								<div class="media"> <a class="pull-left thumb thumb-sm" role="button" tabindex="0"> <img class="media-object " src="assets/images/random-avatar5.jpg" alt=""> </a>
									<div class="media-body">
										<div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
									</div>
								</div>
							</li>
							<li class="offline">
								<div class="media"> <a class="pull-left thumb thumb-sm" role="button" tabindex="0"> <img class="media-object " src="assets/images/random-avatar6.jpg" alt=""> </a>
									<div class="media-body">
										<div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div role="tabpanel" class="tab-pane" id="todo">
						<div class="form-group">
							<input type="text" value="" placeholder="Create new task..." class="form-control" />
							<span class="fa fa-plus"></span> </div>
						<h6>Today</h6>
						<ul class="todo-list">
							<li>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="optionsCheckboxes">
										Initialize the project</label>
								</div>
							</li>
							<li>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="optionsCheckboxes">
										Create the main structure</label>
								</div>
							</li>
							<li>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="optionsCheckboxes">
										Create the main structure</label>
								</div>
							</li>
						</ul>
						<h6>Tomorrow</h6>
						<ul class="todo-list">
							<li>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="optionsCheckboxes">
										Initialize the project</label>
								</div>
							</li>
							<li>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="optionsCheckboxes">
										Create the main structure</label>
								</div>
							</li>
							<li>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="optionsCheckboxes">
										displayed in a normal space!</label>
								</div>
							</li>
						</ul>
					</div>
					<div role="tabpanel" class="tab-pane" id="settings">
						<h6>Chat Settings</h6>
						<ul class="settings">
							<li>
								<div class="form-group">
									<label class="col-xs-8 control-label">Show Offline Users</label>
									<div class="col-xs-4 control-label text-right">
										<div class="togglebutton">
											<label>
												<input type="checkbox" checked="">
											</label>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="form-group">
									<label class="col-xs-8 control-label">Show Fullname</label>
									<div class="col-xs-4 control-label text-right">
										<div class="togglebutton">
											<label>
												<input type="checkbox" unchecked="">
											</label>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="form-group">
									<label class="col-xs-8 control-label">History Enable</label>
									<div class="col-xs-4 control-label text-right">
										<div class="togglebutton">
											<label>
												<input type="checkbox" checked="">
											</label>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="form-group">
									<label class="col-xs-8 control-label">Show Locations</label>
									<div class="col-xs-4 control-label text-right">
										<div class="togglebutton">
											<label>
												<input type="checkbox" checked="">
											</label>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="form-group">
									<label class="col-xs-8 control-label">Notifications</label>
									<div class="col-xs-4 control-label text-right">
										<div class="togglebutton">
											<label>
												<input type="checkbox" unchecked="">
											</label>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="form-group">
									<label class="col-xs-8 control-label">Show Undread Count</label>
									<div class="col-xs-4 control-label text-right">
										<div class="togglebutton">
											<label>
												<input type="checkbox" unchecked="">
											</label>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</aside>
		<!--/ RIGHTBAR Content --> 
	</div>
	<!--/ CONTROLS Content --> 
	
	<!--CONTENT  -->
	<section id="content">
		<div class="page profile-page">
					
			<!-- page content -->
			@yield('content')
			<!-- /page content --> 
		</div>
	</section>
	<!--/ CONTENT --> 
</div>
<!--/ Application Content --> 

<!-- Vendor JavaScripts  -->
<script src="{{ URL::asset('assets/members/bundles/libscripts.bundle.js') }}"></script>

<script src="{{ URL::asset('assets/members/bundles/vendorscripts.bundle.js') }}"></script>

<script src="{{ URL::asset('assets/members/js/vendor/chosen/chosen.jquery.min.js') }}"></script> 
<script src="{{ URL::asset('assets/members/js/vendor/parsley/parsley.min.js') }}"></script> 
 <script src="{{ URL::asset('assets/members/js/vendor/summernote/summernote.min.js') }}"></script> 
<script src="{{ URL::asset('assets/members/js/vendor/filestyle/bootstrap-filestyle.min.js') }}"></script> 

<!--/ vendor javascripts --> 

<!--  Custom JavaScripts  --> 
<script src="{{ URL::asset('assets/members/js/main.js') }}"></script> 
<!--/ custom javascripts --> 
</body>

<!-- Mirrored from thememakker.com/oakleaf-admin/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2016 10:03:20 GMT -->
</html>
