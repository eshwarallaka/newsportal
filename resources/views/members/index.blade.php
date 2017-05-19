@extends('layouts.member')

@section('content')
<script src="{{ URL::asset('assets/members/tinymce/tinymce.min.js') }}"></script> 
<script type="text/javascript">
	$(window).load(function(){
		$('#newpost').parsley().subscribe('parsley:field:validate', function () {
			if ($('#newpost').parsley().isValid()) {
				$('#submitpost').prop('disabled', false);
			} else {
				$('#submitpost').prop('disabled', true);
			}
		});
		$('#submitpost').on('click', function(){
			$('#newpost').submit();
		});
		
		$('#updatepassword').parsley().subscribe('parsley:field:validate', function () {
			if ($('#updatepassword').parsley().isValid()) {
				$('#pswdupdate').prop('disabled', false);
			} else {
				$('#pswdupdate').prop('disabled', true);
			}
		});
		$('#pswdupdate').on('click', function(){
			$('#updatepassword').submit();
		});
		
		$('#updatedetails').parsley().subscribe('parsley:field:validate', function () {
			if ($('#updatedetails').parsley().isValid()) {
				$('#submitdetails').prop('disabled', false);
			} else {
				$('#submitdetails').prop('disabled', true);
			}
		});
		$('#submitdetails').on('click', function(){
			$('#updatedetails').submit();
		});
		tinymce.init({
  selector: 'textarea',  // change this value according to your HTML
  branding: false
});
		/*$('#news_description').summernote({
			height: 200   //set editable area's height
		});*/


	});
</script>
<div class="pagecontent"> 
				
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs boxs-simple">
                            <div class="profile-header">
                                <div class="profile_info">
                                    <div class="profile-image">
                                        <img src="assets/images/profile-photo.jpg" alt="">
                                    </div>
                                   <h4 class="mb-0"><strong>Hemanth</strong>
								  </h4>
                                   <!--  <span class="text-muted">Ui UX Designer</span> -->
                                    <div class="mt-10">
                                        <button class="btn btn-raised btn-default bg-blush btn-sm">Follow</button>
                                        <button class="btn btn-raised btn-default bg-green btn-sm">Message</button>
                                    </div>
                                    <p class="m-0"> <a title="Twitter" href="#" class="icon-color p-5"><i class="fa fa-twitter"></i></a> <a title="Facebook" href="#" class="icon-color p-5"><i class="fa fa-facebook"></i></a> <a title="Google-plus" href="#" class="icon-color p-5"><i class="fa fa-google-plus"></i></a> <a title="Dribbble" href="#" class="icon-color p-5"><i class="fa fa-dribbble"></i></a> <a title="Behance" href="#" class="icon-color p-5"><i class="fa fa-behance"></i></a> <a title="Instagram" href="#" class="icon-color p-5"><i class="fa fa-instagram "></i></a> <a title="Pinterest" href="#" class="icon-color p-5"><i class="fa fa-pinterest-p "></i></a> </p>
                                </div>
                            </div>
                            <div class="profile-sub-header">
                                <div class="box-list">
                                    <ul class="text-center">
                                        <li>
                                            <a href="#" class="">
                                                <i class="fa fa-inbox"></i>
                                                <p>My Inbox</p>
                                            </a>
                                        </li>  
                                        <li>
                                            <a href="gallery.html" class="">
                                                <i class="fa fa-photo"></i>
                                                <p>Gallery</p>
                                            </a>
                                        </li>  
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-paperclip"></i>
                                                <p>Collections</p>
                                            </a>
                                        </li>  
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-tasks "></i>
                                                <p>Tasks</p>
                                            </a>
                                        </li>                                
                                    </ul>
                                </div>
                            </div>
						</section>						
					</div>
					<div class="col-md-4"> 
						<!-- boxs -->
						<section class="boxs boxs-simple"> 
							<!-- boxs header -->
							<div class="boxs-header dvd dvd-btm">
								<h1 class="custom-font"><strong>About</strong> Me</h1>
							</div>
							<!-- /boxs header --> 
							
							<!-- boxs body -->
							<div class="boxs-body">
								<p class="text-default">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
								<small>Designer <cite title="Source Title">Source Title</cite></small> </blockquote>	
							</div>
							<!-- /boxs body --> 
						</section>
						<!-- /boxs --> 
						
						<!-- boxs -->
						<section class="boxs boxs-simple"> 
							<!-- boxs header -->
							<div class="boxs-header dvd dvd-btm">
								<h1 class="custom-font"><strong>My</strong> Portfolio Status</h1>
							</div>
							<!-- /boxs header --> 
							<!-- boxs body -->
							<div class="boxs-body">
								<ul class="list-unstyled">
									<li>
										<div class="row">
											<div class="col-md-12">Behance</div>
											<div class="col-md-12">
												<div class="progress progress-striped0 mb-10">
													<div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> 93% </div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-12">Themeforest</div>
											<div class="col-md-12">
												<div class="progress progress-striped0 mb-10">
													<div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%"> 63% </div>
												</div>
											</div>
										</div>
									</li>
                                    <li>
										<div class="row">
											<div class="col-md-12">Dribbble</div>
											<div class="col-md-12">
												<div class="progress progress-striped0 mb-10">
													<div class="progress-bar progress-bar-hotpink" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> 60% </div>
												</div>
											</div>
										</div>
									</li>
                                    <li>
										<div class="row">
											<div class="col-md-12">Pinterest</div>
											<div class="col-md-12">
												<div class="progress progress-striped0 mb-0">
													<div class="progress-bar progress-bar-lightred" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%"> 76% </div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<!-- /boxs body --> 
						</section>
						<!-- /boxs --> 
					</div>
					<div class="col-md-8"> 
						<!-- boxs -->
						<section class="boxs boxs-simple"> 
							<!-- boxs body -->
							<div class="boxs-body p-0">
								<div role="tabpanel"> 
									<!-- Nav tabs -->
									<ul class="nav nav-tabs tabs-dark-t" role="tablist">
										<li role="presentation" class="active"><a href="#mypost" aria-controls="feedTab" role="tab" data-toggle="tab">My Post</a></li>
										<li role="presentation"><a href="#timeline" aria-controls="timeline" role="tab" data-toggle="tab">Timeline</a></li>
                                        <li role="presentation"><a href="#setting" aria-controls="setting" role="tab" data-toggle="tab">Setting</a></li>
									</ul>
									
									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="mypost">
											<div class="wrap-reset">
												<div class="mypost-form">
												{{@$message}}
													<form role="form" method="POST" action="{{ url('/member/postnews') }}" class="one" id='newpost' data-parsley-validate novalidate enctype="multipart/form-data">
														{{ csrf_field() }}
														<input class="form-control br-0-t required" type="text" name="news_title" placeholder="News Title" data-parsley-trigger="change" required />
														<textarea class="form-control br-0-t" placeholder="News Description"  name="news_description" id="news_description"></textarea>
														<input type="file" name="news_image" class="form-control  required" placeholder="News Image"/><i class="fa fa-camera"></i>
														<select name="news_type_id" class="form-control  required">
															<option value="">-- Select News Type --</option>
															@foreach($newstypes as $newstype)
															<option value="{{$newstype->news_type_id}}">{{ucwords($newstype->news_type_name)}}</option>
															@endforeach
														</select>
														<div class="post-toolbar-b">
															<!-- <a href="#" tooltip="Add File" class="btn btn-raised btn-primary btn-sm"><i class="fa fa-paperclip"></i></a>
															<a href="#" tooltip="Add Image" class="btn btn-raised btn-default btn-sm"><i class="fa fa-camera"></i></a> -->
															<a  class="pull-right btn btn-raised btn-info btn-sm" tooltip="Post it!" id='submitpost'><i class="fa fa-share mr-10"></i>Post</a>
														 </div>
													</form>
												</div>
												<br><br>
												<hr>
												<div class="mypost-list mt-20">
													@foreach($newslists as $newslist)
                                                    <div class="post-box">
                                                        <span class="text-muted text-small"><i class="fa fa-clock-o mr-5"></i> {{$newslist->created_at->diffForHumans()}}</span>
                                                        <div class="post-img"><img src="{{asset('')}}{{$newslist->news_image}}" class="img-responsive" alt /></div>
                                                        <div class="panel panel-default">                                                           
                                                            <h3 class=""><a href="{{ url('/member/post/'.$newslist->news_id) }}">{{$newslist->news_title}}</a></h3>
                                                            <p class="mb-0">
															
															<?php 
															$content = substr($newslist->news_description,0,400);
															//$content = substr($content,0,strrpos($content,' '));
															?>
															{!!$content!!}
															
															</p><br>
															<!--<a href="{{ url('/member/post/'.$newslist->news_id) }}">read more..</a>-->
                                                            <p class="mt-10 mb-0">
                                                               <!-- <a href="#" class="btn btn-raised bg-blue btn-sm"> <i class="fa fa-heart-o text-inactive"></i> Like (5) </a>
                                                                <a href="#" class="btn btn-raised bg-soundcloud btn-sm"><i class="fa fa-mail-reply"></i> Reply</a> -->
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <hr>
													@endforeach
                                                    <div class="text-center"> <a href="#" class="btn btn-raised btn-default btn-sm">Load More …</a> </div>
												</div>
											</div>                                            
										</div>
                                        <div role="tabpanel" class="tab-pane" id="timeline">
											<div class="timeline-body">
                                                <div class="timeline m-border">
                                                    <div class="timeline-item">
                                                        <div class="item-content">
                                                            <div class="text-small">Just now</div>
                                                            <p>Finished task #features 4.</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item border-info">
                                                        <div class="item-content">
                                                            <div class="text-small">11:30</div>
                                                            <p>@Jessi retwit your post</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item border-warning border-l">
                                                        <div class="item-content">
                                                            <div class="text-small">10:30</div>
                                                            <p>Call to customer #Jacob and discuss the detail.</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item border-warning">
                                                        <div class="item-content">
                                                            <div class="text-small">3 days ago</div>
                                                            <p>Jessi commented your post.</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item border-danger">
                                                        <div class="item-content">
                                                            <div class="text--muted">Thu, 10 Mar</div>
                                                            <p>Trip to the moon</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item border-info">
                                                        <div class="item-content">
                                                            <div class="text-small">Sat, 5 Mar</div>
                                                            <p>Prepare for presentation</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item border-danger">
                                                        <div class="item-content">
                                                            <div class="text-small">Sun, 11 Feb</div>
                                                            <p>Jessi assign you a task #Mockup Design.</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item border-info">
                                                        <div class="item-content">
                                                            <div class="text-small">Thu, 17 Jan</div>
                                                            <p>Follow up to close deal</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item">
                                                        <div class="item-content">
                                                            <div class="text-small">Just now</div>
                                                            <p>Finished task #features 4.</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item border-info">
                                                        <div class="item-content">
                                                            <div class="text-small">11:30</div>
                                                            <p>@Jessi retwit your post</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item border-warning border-l">
                                                        <div class="item-content">
                                                            <div class="text-small">10:30</div>
                                                            <p>Call to customer #Jacob and discuss the detail.</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item border-warning">
                                                        <div class="item-content">
                                                            <div class="text-small">3 days ago</div>
                                                            <p>Jessi commented your post.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
										</div>
										<div role="tabpanel" class="tab-pane" id="setting">
											<div class="wrap-reset">
												<form role="form" method="POST" action="{{ url('/member/updatepassword') }}" id='updatepassword' data-parsley-validate novalidate enctype="multipart/form-data" class="profile-settings">
												{{ csrf_field() }}
                                                    <div class="row">
														<div class="form-group col-md-12 legend">
															<h4><strong>Security</strong> Settings</h4>
															<p>Secure your account</p>
														</div>
													</div>
													<div class="row">
														<div class="form-group col-sm-6">
															<label for="username">Email</label>
															<input type="text" class="form-control" id="username" value="{{$user->email}}" readonly>
														</div>
														<div class="form-group col-sm-6">
															<label for="password">Current Password</label>
															<input type="password" class="form-control" id="password" value="secretpassword" readonly>
														</div>
													</div>
													<div class="row">
														<div class="form-group col-sm-6">
															<label for="new-password">New Password</label>
															<input type="password" name="newpassword" id="newpassword" class="form-control" data-parsley-trigger="change" minlength="8" required="" data-parsley-id="2878">
														</div>
														<div class="form-group col-sm-6">
															<label for="new-password-repeat">New Password Repeat</label>
															<input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control" data-parsley-trigger="change" minlength="8" data-parsley-equalto="#newpassword" required="" >
														</div>
                                                        <div class="form-group col-sm-12">
                                                            <button type="submit" class="btn btn-raised btn-primary btn-sm" id="pswdupdate">Save Changes</button>
                                                        </div>
													</div>
													</form>
                                                    <hr>
													
													<div class="row">
														<div class="form-group col-md-12 legend">
															<h4><strong>Account</strong> Settings</h4>
															<p>Your personal account settings</p>
														</div>
													</div>
													<form role="form" method="POST" action="{{ url('/member/updatedetails') }}" id='updatedetails' data-parsley-validate novalidate enctype="multipart/form-data" class="profile-settings">
													{{ csrf_field() }}
													<div class="row">
														<div class="form-group col-sm-6">
															<label for="first-name">Name</label>
															<input type="text" class="form-control required" id="name" value="{{$user->name}}" name="name">
														</div>
														<div class="form-group col-sm-6">
															<label for="first-name">Mobile</label>
															<input type="text" class="form-control required" id="mobile" value="{{@$user->mobile}}" name="mobile" minlength="10">
														</div>
													</div>
													<div class="row">
														<div class="form-group col-sm-12">
															<label for="address1">Address Line 1</label>
															<input type="text" class="form-control" id="address" value="{{@$user->address}}" id="{{@$user->address}}">
														</div>														
													</div>
													<div class="row">
														<div class="form-group col-sm-6">
															<label for="city">City</label>
															<input type="text" class="form-control" id="city" value="{{@$user->city}}" name="city">
														</div>
														
														<div class="form-group col-sm-6">
															<label for="city">State</label>
															<input type="text" class="form-control" id="state" value="{{@$user->state}}" name="state">
														</div>
														<!-- <div class="form-group col-sm-4">
															<label for="country">Country</label>
															<select id="country" class="chosen-select" style="width: 100%;">
																<option>USA</option>
																<option>Canada</option>
																<option>UK</option>
																<option>India</option>
																<option>Japan</option>
															</select>
														</div>-->
													</div>
                                                    <hr>
													<div class="row">
														<div class="form-group col-md-12 legend">
															<h4><strong>Social</strong> Settings</h4>
															<p>Connect with your social profiles</p>
														</div>
													</div>
													<div class="row">
														<div class="form-group col-sm-6">
															<label for="facebook">Facebook</label>
															<input type="text" class="form-control" id="facebook" name="facebook" value="{{@$user->facebook}}">
														</div>
														<div class="form-group col-sm-6">
															<label for="dribbble">Linkedin</label>
															<input type="text" class="form-control" id="linkedin" name="linkedin" value="{{@$user->linkedin}}">
														</div>
													</div>
																								
                                                    <hr>
													<div class="row">
														
                                                        <div class="col-sm-12">
                                                            <!-- <button class="btn btn-raised btn-default">Cancel</button> -->
                                                            <button type="submit" class="btn btn-raised btn-primary" id="submitdetails">Save All</button>
                                                        </div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /boxs body --> 
						</section>
						<!-- /boxs --> 
					</div>
					<!-- /col --> 					
				</div>
				<!-- /row --> 
			</div>
			
@endsection
