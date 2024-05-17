<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Posts</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
	<h1>Manage posts</h1><br>
    <form id="demo-form2" method="post" action="{{route('updatepost',[$post->id])}}" data-parsley-validate class="form-horizontal form-label-left">
									@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Edit Post title<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="title" value="{{$post->title}}" name="title" required="required" class="form-control ">
											</div>
										</div>
										<br>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Edit Post Content<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="content" value="{{$post->content}}" name="content" required="required" class="form-control ">
											</div>
										</div>
										<br>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
											<button class="btn btn-default"  type="button"><a href="/posts">Cancel</a></button>
												<button type="submit" class="btn btn-success">Update</button>
											</div>
										</div>

									</form>
</head>
<body>
    
</body>
</html>