@extends('layouts.rootview')

@section('detail')

<div class="card">
	<div class="card-header">
		Edit post
	</div>
	<div class="card-body">
		@foreach($editpost as $editpost)
		<form>
			<div class="form-group">
				<label>Title</label>
				<input type="text" value="{{$editpost->title}}"name="" class="form-control">
				
			</div>

			<div class="form-group">
				<label>Post</label>
				<textarea class="form-control" rows="6">
					{{$editpost->post}}
				</textarea>
			</div>
		</form>
		@endforeach
	</div>
</div>
@endsection