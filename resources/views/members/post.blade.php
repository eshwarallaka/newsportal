@extends('layouts.member')

@section('content')
<script src="{{ URL::asset('assets/members/tinymce/tinymce.min.js') }}"></script> 
<script type="text/javascript">
	$(window).load(function(){
		
		tinymce.init({
  selector: 'textarea',  // change this value according to your HTML
  branding: false
});
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
		/*$('#news_description').summernote({
			height: 200   //set editable area's height
		});*/


	});
</script>
<div class="bg-light lter b-b wrapper-md mb-10">
	<div class="row">
		<div class="col-sm-6 col-xs-12">
			<h1 class="font-thin h3 m-0">Edit News</h1>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<section class="boxs">
			<!--<div class="boxs-header dvd dvd-btm">
				<h1 class="custom-font"><strong>Horizontal </strong>Form</h1>
				
			</div>-->
			<div class="boxs-body">
				<form role="form" method="POST" action="{{ url('/member/updatepost') }}" id='newpost' data-parsley-validate novalidate enctype="multipart/form-data" class="form-horizontal">
				{{ csrf_field() }}
					<input type="hidden" value="{{$post->news_id}}" name="news_id">
					<div class="form-group is-empty">
						<label for="inputEmail3" class="col-sm-2 control-label">News Title</label>
						<div class="col-sm-10">
							<input class="form-control br-0-t required" type="text" name="news_title" placeholder="News Title" data-parsley-trigger="change" required value="{{$post->news_title}}"/>
						</div>
					<span class="material-input"></span></div>
					<div class="form-group is-empty">
						<label for="inputPassword3" class="col-sm-2 control-label">News Description</label>
						<div class="col-sm-10">
							<textarea class="form-control br-0-t" placeholder="News Description"  name="news_description" id="news_description">{{$post->news_description}}</textarea>
						</div>
					<span class="material-input"></span></div>
					<div class="form-group is-empty">
						<label for="inputPassword3" class="col-sm-2 control-label">News Image</label>
						<div class="col-sm-10">
							<img src="{{asset('')}}{{$post->news_image}}" class="img-responsive"/>
							<input type="file" name="news_image" class="form-control " placeholder="News Image"/><i class="fa fa-camera"></i>
						</div>
					<span class="material-input"></span></div>
					<div class="form-group is-empty">
						<label for="inputPassword3" class="col-sm-2 control-label">News Type</label>
						<div class="col-sm-10">
							<select name="news_type_id" class="form-control  required">
								<option value="">-- Select News Type --</option>
								@foreach($newstypes as $newstype)
								<option value="{{$newstype->news_type_id}}" <?php if($newstype->news_type_id == $post->news_type_id ) { echo "selected = selected";} ?> >{{ucwords($newstype->news_type_name)}}</option>
								@endforeach
							</select>
						</div>
					<span class="material-input"></span></div>
					
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-raised btn-primary" id="submitpost">Update</button>
							
							<a href="{{ url('/member/dashboard') }}" class="btn btn-raised btn-primary">Cancel</a>
							
						</div>
					</div>
				</form>
			</div>
		</section>
	</div>
</div>		
@endsection
