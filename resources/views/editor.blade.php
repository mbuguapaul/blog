@extends('layouts.app')

@section('content')

@if(Auth::user()->userlevel==1||Auth::user()->userlevel==2)

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

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
            <div class="card">
                <div class="card-header"><b style="color: green;">Write a new article</b></div>

                <div class="card-body">
                    

                   
                        <form  method="post" action="newpost" enctype="multipart/form-data">
                            

                               <div class="form-group">
                               <input type="text" name="title" class="form-control" placeholder="Input the title" required> 
                               </div>
                            <div class="form-group">
                               <input type="text" name="link" class="form-control" placeholder="Youtube link if any" > 
                               </div>
                               <small style="color:red;">*The link Must be a Youtube link.<br>
                               *Do not Get the link from a playlist<br>
                               *You remain Liable to video content copyright.</small>
                            
                            <div class="form-group">
                                <label for="category">Choose a category</label>
                            <select multiple class="form-control" id="category" name="category">
                                @foreach($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                          
                          @endforeach
                        </select>
                        </div>
                            <br><br><br>
                                <div class="form-group">
                            <textarea class="form-control" rows="3" required placeholder="your post" name="post"></textarea>
                            </div>

                               <div class="form-group">
                               <label for="exampleInputFile">optional image</label>
                            <input type="file"  name="image" id="file" onchange="return fileValidation()">
                            <!-- <div id="imagePreview"></div> -->
                            <div id="red" style="color: red;"></div>
                            </div>
                            <input type="hidden" name="_token"value="{{csrf_token()}}"/>
                            <input type="submit" class="genric-btn success pull-right" name="" value="POST ARTICLE">
                        </form>
                    
                </div>
            </div>


            <br><br>

                <div class="card">
                    <div class="card-header"><b  style="color: green;">Add New category</b></div>
                    <div class="card-body">
                        <form action="newcategory" method="post">
                            <div class="form-group">
                                <input type="text" name="newcategory" class="form-control" placeholder="New ctegory">
                                <input type="hidden" name="_token"value="{{csrf_token()}}"/><br>
                                <input type="submit"  class="genric-btn success pull-right " name="" value="ADD CATEGORY">
                            </div>
                        </form>
                    </div>
                </div>




        </div>
    </div>
</div>



<hr>

<center>My posts</center>
<div class="container">
  <table class="table table-hover">
  <tr>
    
  <th>title</th>
 
  <th>comments</th>
  <th>edit</th>
  <th>delete</th>
  </tr>
  @foreach($myposts as $myposts)
  <tr>
   
    <td>{{$myposts->title}}</td>
    @if(Auth::user()->userlevel==2)
  <t>Editor</th>
  @endif
    <td>
      
     
     <?php $number=0; ?>
     @foreach($comments as $comment)
    
    
     @if($comment->postid ==$myposts->id)
 <?php $number=$number+1; ?>
      
     @endif

    @endforeach
    {{$number}}

    
  </td>
    <td> <a href="edit/{{$id=$myposts->id}}" class="genric-btn success small">edit</a></td>
    <td> <a href="delete/{{$id=$myposts->id}}" class="genric-btn danger small">delete</a></td>
  </tr>
  @endforeach
  </table>




</div>


@if(Auth::user()->userlevel==2)
<center>All posts</center>
<div class="container">
  <table class="table table-hover">
  <tr>
    
  <th>title</th>

  <th>Editor</th>
  <th>comments</th>
  
  <th>delete</th>
  </tr>
  @foreach($allposts as $myposts)
  <tr>
   
    <td>{{$myposts->title}}</td>

    @foreach($users as $user)
    @if($myposts->userid==$user->id)
  <td>{{$user->name}}</td>
  @endif
  @endforeach
  
    <td>
      
     
     <?php $number=0; ?>
     @foreach($comments as $comment)
    
    
     @if($comment->postid ==$myposts->id)
 <?php $number=$number+1; ?>
      
     @endif

    @endforeach
    {{$number}}

    
  </td>
       <td> <a href="delete/{{$id=$myposts->id }}" class="genric-btn danger small">delete</a></td>
  </tr>
  @endforeach
  </table>




</div>


@endif
@else
<div class="alert alert-danger container">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2>
        	!Not allowed here, Please contact more information or visit <a href="/">Home</a>
        </h2>
        
 </div>
@endif

@if(Auth::user()->userlevel==2)
<!-- ================================================super admin -->
<hr>










<center><h2>main admin actions</h2></center>




<div class="container">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Registered users
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <div class="container">
  <div class="row">
    <center><h2>Users</h2></center>
<table class="table table-hover">
  <tr>
    <th>user name</th>
    <th>Phone number</th>
    <th>Email</th>
    <th>Upgrade/Downgrade</th>
    <th>delete</th>


  </tr>
  
    @foreach($users as $users)
    <tr>
    <td>{{$users->name}} &nbsp {{$users->sname}}</td>
    <td>0{{$users->pnum}}</td>
    <td>{{$users->email}}</td>
    @if($users->userlevel==1)
    <td><a href="downgrade/{{ $id=$users->id }}" class="genric-btn info small">downgrade</a></td>
    @else
    @if($users->id==Auth::user()->id)
    @else
    <td><a href="upgrade/{{ $id=$users->id }}" class="genric-btn success small">upgrade</a></td>
    
    @endif
    @endif
    @if($users->id==Auth::user()->id)
    @else
    
    <th><a href="deleteuser/{{ $id=$users->id }}" class="genric-btn danger circle small">delete</a></th>
     @endif
    </tr>
    @endforeach
  
  

</table>
    
  </div>
</div>
<!-- ========users -->
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Updates
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
       <!-- ============================updates -->
@foreach($updates as $update)
<div class="container">
  <div class="row">
    <div class="col-md-2">
      
    </div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          updates
        </div>
        <div class="card-body">
          <!-- ================================first column -->
      <h5>first update</h5>

      <form method="post" action="firstupdate" enctype="multipart/form-data">
        <div class="form-group">
          <label>Short title first column</label>
          <input type="text" name="ftitle"value="{{$update->title1}}" class="form-control" placeholder="short heading">
        </div>

        <div class="form-group">
          <label>Short description first column</label>
          <input type="text" value="{{$update->desc1}}" name="fdesc" class="form-control" placeholder="short description">
        </div>

        <div class="form-group">
                               <label for="exampleInputFile">optional image</label>
                            <input type="file"  name="fimage" id="fupdate" onchange="return fiupdate()">
                            <!-- <div id="imagePreview"></div> -->
                            <div id="fu" style="color: red;"></div>
                            </div>


                             <input type="hidden" name="_token"value="{{csrf_token()}}"/>

                            <input type="submit" class="genric-btn success small" name="" value="First update">
        
      </form>
      <!-- ===================================end first update -->


      <!-- ====================================start second update -->
<hr>
<h5>Second update</h5>

      <form method="post" action="secondupdate" enctype="multipart/form-data">
        <div class="form-group">
          <label>Short title Second column</label>
          <input type="text" name="stitle" value="{{$update->title2}}" class="form-control" placeholder="short heading">
        </div>

        <div class="form-group">
          <label>Short description Second column</label>
          <input type="text" name="sdesc" value="{{$update->desc2}}"class="form-control" placeholder="short description">
        </div>

        <div class="form-group">
                               <label for="exampleInputFile">optional image</label>
                            <input type="file"  name="simage" id="supdate" onchange="return seupdate()">
                            <!-- <div id="imagePreview"></div> -->
                            <div id="su" style="color: red;"></div>
                            </div>
<input type="hidden" name="_token"value="{{csrf_token()}}"/>
                            <input type="submit" class="genric-btn success small" name="" value="Second update">
        
      </form>

      <!-- ==========================================end second update -->



      <!-- ==============================================start third update -->

<hr>
<h5>Third update</h5>

      <form method="post" action="thirdupdate" enctype="multipart/form-data">
        <div class="form-group">
          <label>Short title third column</label>
          <input type="text" name="ttitle" value="{{$update->title3}}"class="form-control" placeholder="short heading">
        </div>

        <div class="form-group">
          <label>Short description third column</label>
          <input type="text" value="{{$update->desc3}}" name="tdesc" class="form-control" placeholder="short description">
        </div>

        <div class="form-group">
                               <label for="exampleInputFile">optional image</label>
                            <input type="file"  name="timage" id="tupdate" onchange="return thupdate()">
                            <!-- <div id="imagePreview"></div> -->
                            <div id="tu" style="color: red;"></div>
                            </div>
<input type="hidden" name="_token"value="{{csrf_token()}}"/>
                            <input type="submit" class="genric-btn success small" name="" value="Third update">
        
      </form>
      <!-- ===================================================end third update -->
       


        </div>
      </div>
    </div>
    
  </div>
  
</div>
@endforeach
<!-- =========================end updates -->

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Manage Categories
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
       



       <!-- /////////////////////////// -->





<table class="table table-hover">
  <tr>
    <th>Name</th>
  
    <th>Action</th>
    


  </tr>
 @foreach($categories as $categorielist) 
<tr>
  
  <td>{{$categorielist->category_name}}</td>

 
    <td> <a href="deletecategory/{{$id=$categorielist->id}}" class="genric-btn danger small">delete</a></td>
 
</tr>
   @endforeach

</table>





       <!-- /////////////////////////// -->
      </div>
    </div>
  </div>


 <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
          Application Description
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <form>
          <div class="form-group">
            <input type="text" name="" class="form-control" placeholder="Main title">
          </div>

          <div class="form-group">
            <input type="text" name="" class="form-control" placeholder="main title description">
          </div>


          <div class="form-group">
            <input type="text" name="" class="form-control" placeholder="blog name">
          </div>


          <div class="form-group">
            <input type="text" name="" class="form-control" placeholder="blog description">
          </div>

        </form>
      </div>
    </div>
  </div>




</div>
</div>

@endif

@endsection