<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Posts</title>
    <form id="demo-form2" method="post" action="{{route('updatepost',[$post->id])}}" data-parsley-validate class="form-horizontal form-label-left">
									@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Edit Post title<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="title" value="{{$post->title}}" name="title" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Edit Post Content<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="content" value="{{$post->content}}" name="content" required="required" class="form-control ">
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
											<button class="btn btn-primary" type="button"><a href="/categories">Cancel</a></button>
												<button type="submit" class="btn btn-success">Update</button>
											</div>
										</div>

									</form>
</head>
<body>
    
</body>
</html>