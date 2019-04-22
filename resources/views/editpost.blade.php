@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-2">
		
	</div>
	<div class="col-md-8">
		<div class="card">
	<div class="card-header">
		Edit post
	</div>
	<div class="card-body">
		@foreach($editpost as $editpost)
		<form method="post" action="editpost" enctype="multipart/form-data">
			<div class="form-group">
				<label>Title</label>
				<input type="text" value="{{$editpost->title}}"name="title" class="form-control">
			</div>

			<div class="form-group">
				<label>Youtube link</label>
				<input type="text" value="https://www.youtube.com/watch?v={{$editpost->link}}"name="link" class="form-control">
			</div>

			 <div class="form-group">
                                <label for="category">Choose a category</label>
                            <select  class="form-control" id="category" name="category" required>
                                @foreach($categories as $category)
		                          <option value="{{ $category->id }}">{{ $category->category_name }}</option>
		                          
		                          @endforeach
                        </select>
                        </div>

 <div class="form-group">
                               <label for="exampleInputFile">optional image</label>
                            <input type="file"  name="image" id="file" onchange="return fileValidation()">
                            <!-- <div id="imagePreview"></div> -->
                            <div id="red" style="color: red;"></div>
                            </div>
                            <input type="hidden" name="_token"value="{{csrf_token()}}"/>
                            <input type="hidden" name="postid"value="{{$editpost->id}}"/>



			<div class="form-group">
				<label>Post</label>
				<textarea class="form-control" rows="6" name="post">
					{{$editpost->post}}
				</textarea>
			</div>

			<input type="submit" class="genric-btn success pull-right" name="" value="UPDATE ARTICLE">
		</form>
		@endforeach
	</div>
</div>
	</div>
</div>
@endsection