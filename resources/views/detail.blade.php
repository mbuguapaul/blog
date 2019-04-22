@extends('layouts.rootview')

@section('detail')
<div class="single-post row">
    @foreach($post as $post)
    
    
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img class="img-fluid" src="{{asset('img/post_img/'.$post->image)}}" alt="" style="width: 100%">

                                     @if($post->link==NULL)
                                                
                                                @else
                                                <br><br>
                                                <iframe width="420" height="315"
src="https://www.youtube.com/embed/{{$post->link}}?autoplay=1">

</iframe>
                                                @endif<BR>
                                </div>                                  
                            </div>
                            <!-- <div class="col-lg-3  col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <div class="col-lg-9 col-md-9 blog_details">
                                <h2>{{$post->title}}</h2>
                                <p class="excert">
                                    {{$post->post}}
                                
                               
                            </div>
                            <div class="col-lg-12">
                                
                                <div class="row">
                                    <div class="col-6">
                                        <img class="img-fluid" src="img/blog/post-img1.jpg" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img class="img-fluid" src="img/blog/post-img2.jpg" alt="">
                                    </div>  
                                    <div class="col-lg-12 mt-25">
                                                                                  
                                    </div>                                  
                                </div>
                            </div>
                        </div>
                        
                        <div class="comments-area">
                            <h4>{{count($comments)}} Comments</h4>
                            @foreach($comments as $comment)
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c1.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#"> {{$comment->username}}</a></h5>
                                            
                                            <p class="comment">
                                                {{$comment->comment}}
                                            </p>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>  
                            @endforeach                                                            
                        </div>
                        @guest
                     <a href="{{ route('register') }}">Login or Register to comment</a>   
                        @else
                        <div class="">
                            <h4>Leave a Reply</h4>
                            <form method="post" action="comment">
                               
                                <div class="form-group">
                                    <textarea class="form-control mb-10" rows="5" name="message" placeholder="Comment here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                </div>
                                <input type="hidden" value="{{$post->id}}" name="postid">
                                <input type="hidden" name="_token"value="{{csrf_token()}}"/>
                                <input type="hidden" name="userid"value=" {{ Auth::user()->id}}"/>

                                <input type="hidden" name="username"value=" {{ Auth::user()->name}}"/>

                               
                                <input type="submit" class="primary-btn submit_btn" value="Post Comment">
                            </form>
                             </div>
                             @endif
                            @endforeach
                       
                        @endsection