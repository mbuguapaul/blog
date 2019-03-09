@extends('layouts.app')

@section('content')




            @if(Session::has('status'))
  <div class="">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <center>{{Session::get('status')}}</center>


        </div>
      </div>
    </div>

    <br>
  </div>
@endif

@if(count($errors)>0)
        <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2>! Error occured, please check following conditions.</h2>
        <ul>
          @foreach($errors->all() as $error)
         <li>{{$error}}</li>

          @endforeach
          </ul>
 </div>
        @endif


<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-3">
      <img src="{{asset('img/avatar/'.Auth::user()->avatar)}}" style="width: 100%; border-radius: 50%;">
      <form method="post" action="updateimg" enctype="multipart/form-data">
      <div class="form-group">
                               <label for="exampleInputFile">Profile</label>
                            <input type="file"  name="prfimage" id="file" onchange="return fileValidation()">
                            <!-- <div id="imagePreview"></div> -->
                            <div id="red" style="color: red;"></div>
                            </div>
                            <input type="hidden" name="_token"value="{{csrf_token()}}"/>

                            <input type="submit" class="mybtn btn" value="Update profile" name="">
                            </form>
    </div>
    <div class="col-md-4">
      <form method="post" action="updateprf">
        <center><b><h3>Profile</h3></b></center>
        <div class="form-group">
          <label>First name</label>
          <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" required>
        </div>

        <div class="form-group">
          <label>second name</label>
          <input type="text" name="sname" value="{{ Auth::user()->sname }}" class="form-control" required>
        </div>

 <div class="form-group">
          <label>Phone number</label>
          <input type="number" name="pnum" value="{{ Auth::user()->pnum }}" class="form-control" placeholder="0712345678" required>
        </div>

        <div class="form-group">
          <label>email</label>
          <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" required>
        </div>
<input type="hidden" name="_token"value="{{csrf_token()}}"/>
        <input type="submit" class="btn mybtn pull-right" value="Update" name="">
      </form>
    </div>
  </div>


@if(count($admins)==0)
<hr>
<center><a href="activate" class="genric-btn danger arrow">Initiate admin</a></center>
@else
@endif
</div>
@endsection
