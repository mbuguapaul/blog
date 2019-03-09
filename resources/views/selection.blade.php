@extends('layouts.rootview')

@section('detail')
<center>@foreach($selectuser as $editor)
	{{$editor->name}}'s posts
@endforeach
</center>
@foreach($post as $posts)
<div class="card">
	<div class="card-header">{{$posts->title}}</div>
	<div class="card-body">

		<img src="{{asset('img/post_img/'.$posts ->image)}}" style="width:100%;">
		{{$posts->created_at}}
	
<br>
{{$posts->post}}
</div>
</div>
<br>
@endforeach

 @endsection