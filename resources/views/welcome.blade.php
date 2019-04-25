<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Personal blog</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        <style type="text/css">
            .cadi{
                 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19

                    );
                 overflow: hidden;
            }
            .cadi:hover{
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.25), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            .cadi-body{
                padding: 10px;
                text-align: center;
            }
            .cadi-footer{
                padding: 10px;
                text-align: center;
            }
            .cadi-foot{
                /*background-color: #cccccc;*/
                align-content: center;
                padding-bottom: 10px;
            }
            .body-title{
                padding: 15px;
            }
.face {
 
  text-align: center;
  /*align-content: center;*/
  position: relative;
  z-index: 2;
  float: center;
}

.face:after {
  top: 70px;
  left: 65px;
  right: 65px;
  /*position: absolute;*/
  content: " ";
  width: 10px;
  height: 7px;
  border-radius: 0px 0px 25px 25px;
  background: rgba(255, 0, 0, 0.4);
}

.eye {
  border-radius: 50px;
  margin-top: 1em;
  background: rgba(0, 0, 0, 0.69);
  height: 50px;
  width: 50px;
  display: inline-block;
  text-align: center;
  position: relative;
  background: #CCC;
}

.eye.animate {
  transition: all 100ms;
}

.eye:after {
  content: " ";
  bottom: 25px;
  right: 10px;
  position: absolute;
  width: 5px;
  height: 5px;
  background: #000;
  border-radius: 15px;
}

#animate {
  outline: none;
  background: #FFF;
  border: solid thin #000;
  padding: 15px;
  margin: 5px;
  position: absolute;
  top: 5px;
  right: 5px;
  color: #000;
  transition: all 300ms;
  cursor: pointer;
}

#animate:hover {
  background: #000;
  color: #FFF;
  border: solid thin white;
}

/* Scale for smaller devices */
@media screen and (max-width: 480px) {
  .face {
    width: 300px;
  }
  .face:after {
    top: 130px;
    left: 130px;
    right: 100px;
    width: 40px;
    height: 30px;
  }
  .eye {
    height: 100px;
    width: 100px;
    border-radius: 50px;
  }
  .eye:after {
    bottom: 50px;
    right: 20px;
    height: 10px;
    width: 10px;
  }
}
}

.zoom-effect-container {
    float: left;
 
    overflow: hidden;
}

.image-card {
  
  top: 0;
  left: 0;
  
}

.image-card img {
  -webkit-transition: 0.4s ease;
  transition: 0.4s ease;
}

.zoom-effect-container:hover .image-card img {
  -webkit-transform: scale(1.08);
  transform: scale(1.08);
  opacity: 0.8;
}

        </style>
        <!--================Header Menu Area =================-->
        <header class="header_area white_menu">
            <div class="main_menu" id="mainNav">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container box_1620">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="/">
                            <!-- <img src="img/logo.png" alt=""><img src="img/logo-2.png" alt=""> -->
                             MUSTCU creative Ministry
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        

                        
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                                 <!-- <div id="projectbox"> -->
    <!-- Start project HTML -->
    <div class='face'>
      <div class='eye'></div>
      <div class='eye'></div>
    </div>
    <!-- End Project HTML -->
<!-- </div> -->
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="/">Home</a></li> 
                               
<!--                                 <li class="nav-item"><a class="nav-link" href="services.html">Services</a>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"ol re="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="portfolio-details.html">Project Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                                    </ul>
                                </li> 
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                        <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                                    </ul>
                                </li> 
                                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->
                                 @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        <li class="nav-item submenu dropdown">

                            <a class="nav-link dropdown-toggle" data-toggle="dropdown"ol re="button" aria-haspopup="true" aria-expanded="false" href="/home">{{ Auth::user()->name }} </a>


                            <ul class="dropdown-menu">
                                <li class="nav-item"><img src="img/avatar/{{ Auth::user()->avatar }}" style="width: 100%; "></li>
                                        <li class="nav-item"><a class="nav-link" href="profile">Profile</a></li>
                                        @if(Auth::user()->userlevel==1||Auth::user()->userlevel==2)
                                        <li class="nav-item"><a class="nav-link" href="editor">Editor</a></li>
                                        @else
                                        @endif
                                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                    </ul>

                        </li> 

                           


                            <li class="nav-item">                                    <a  href="{{ route('logout') }}" class="nav-link" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                        @endguest




                            </ul>
                        </div> 
                    </div>
                </nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area blog_banner">
       
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="blog_b_text text-center">
                        <h2>Welcome <br /> Creative ministry</h2>
                        <p>blog where we communicate our spiritual issues.</p>
                        
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Blog Categorie Area =================-->
        <section class="blog_categorie_area">
            <div class="container">
                <div class="row">
                    @foreach($updates as $update1)
                    <div class="col-lg-4">
                        <div class="categories_post">
                            
                            <img src="{{asset('img/blog/cat-post/'.$update1->img1)}}" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html"><h5>{{$update1->title1}}</h5></a>
                                    <div class="border_line"></div>
                                    <p>{{$update1->desc1}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($updates as $update2)
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="{{asset('img/blog/cat-post/'.$update2->img2)}}" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html"><h5>{{$update2->title2}}</h5></a>
                                    <div class="border_line"></div>
                                    <p>{{$update2->desc2}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($updates as $update3)
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="{{asset('img/blog/cat-post/'.$update3->img3)}}" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html"><h5>{{$update2->title3}}</h5></a>
                                    <div class="border_line"></div>
                                    <p>{{$update3->desc3}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--================Blog Categorie Area =================-->
        
        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">

                            
                          <article class="row blog_item container">
                              
                               <!-- begin  card -->
                               
                                
                                
                             @for($count=0;$count<1;$count++)   

                                    <div class="row">

                              @for($coun=0;$coun<1;$coun++)
                                @foreach($posts as $post)

                                <div class="col-md-6">
                                <div class="cadi">

                                  <div class="blog_post" data-postid="{{$post->id}}">
                                       

                                       <div class="zoom-effect-container">
  <div class="image-card">
      <img src="img/post_img/{{$post->image}}" alt="">
  </div>
</div> 
                                            
                                        
                                        
                                           
                                             @if($post->link==NULL)
                                                
                                                @else
                                                <iframe width="100%" height="300px;" 
      src="https://www.youtube.com/embed/{{$post->link}}?autoplay=1" allowfullscreen="allowfullscreen"></iframe>
                                                @endif<BR>
                                                <!-- title -->
                                                
                                               <div class="body-title">

                                                 @foreach($categories as $category)
                                                @if($post->categoryid==$category->id)
                                                

                                                
                                                <a href="cselection/{{ $id=$post->categoryid }}">{{$category->category_name}}</a>
                                                @endif
                                                @endforeach
                                                &nbsp&nbsp | &nbsp <small>{{$post->created_at->diffForHumans()}}</small>

                                                    <a href="detail/{{ $id=$post->id }}"><h2>

                                                {{$post->title}}
                                            </h2></a>
                                               </div>
                                           <div class="blog_details cadi-body">
                                            
                                            <p>
                                                {{ str_limit($post->post, $limit = 150, $end = '...') }}
                                                <a href="detail/{{ $id=$post->id }}">read more</a>
                                             </p>
                                             

                                            <!-- <a href="detail/{{ $id=$post->id }}" class="blog_btn">View More</a> -->
                                        </div>
                                        <!-- foot -->

                                        <hr>
                                        <center>
                                          <div class="cadi-foot">
                                             <div class="cadi-footer">


                                               
                                            
                                                @foreach($editor as $editors)
                                                @if($post->userid==$editors->id)

                                                <img src=" img/avatar/{{$editors ->avatar }}"" style="width:10%;border-radius: 50%;">

                                                
                                                <a href="pselection/{{ $id=$post->userid }}">
                                                    {{$editors->name}}
                                                </a>
                                                @endif
                                                @endforeach
                                                &nbsp &nbsp &nbsp
                                                
                                                &nbsp &nbsp
                                                <i class="fa fa-comments" aria-hidden="true"></i>

                                                  <?php $number=0; ?>
                                     @foreach($comments as $comment)
                                    
                                    
                                     @if($comment->postid ==$post->id)
                                 <?php $number=$number+1; ?>
                                      
                                     @endif

                                    @endforeach
                                    {{$number}}
                                    &nbsp &nbsp &nbsp
                                    <!-- <i class="fa fa-thumbs-up" aria-hidden="true"></i> -->
                                    
                                   <!--  @guest
                                    @else
                                   <a href="" id="like" class="like" data-id="{{$post->id}}">Like</a>
                                   @endif -->
                                                                              
                                            </div>
                                        </div>
                                        </center>

                                        <!-- end foot -->
                                    </div>
                                </div>
                                </div>
                                
                                <!-- end card -->
                                
                                 @endforeach
                                 <br> <br> <br> 
                                @endfor
                               </div>
                               @endfor
                                
                                
                                

                            </article>
                             
                           

                             {{ $posts->links() }}

                            
                           
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                   
                                    </span>
                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget author_widget">
                                <img class="author" src="img/blog/author.png" alt="">
                                <h4>MUSTCU</h4>
                                <p>Meru University of Science and technology Christian Union</p>
                                <!-- <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-github"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div> -->
                                <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.</p>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">

                                <h3 class="widget_title">Popular Posts</h3>
                                 @foreach($popularposts as $popular)
                                <div class="media post_item">
                                    @if($popular->image==NULL)
                                    @else
                                    <img src="{{asset('img/post_img/'.$popular->image)}}" style="width: 25%;" alt="post">
                                    @endif
                                    <div class="media-body">
                                        <a href="detail/{{ $id=$popular->id }}"><h3>{{$popular->title}}</h3></a>
                                        <p>{{$popular->created_at->diffForHumans()}}</p>
                                    </div>
                                </div>
                                @endforeach
                               
                                <div class="br"></div>
                            </aside>

                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Post Catgories</h4>
                                <ul class="list cat-list">
                                    @foreach($categories as $categories)
                                    <li>
                                        <a href="cselection/{{ $id=$categories->id }}" class="d-flex justify-content-between">
                                            <p>{{$categories->category_name}}</p>
                                            
                                        </a>
                                    </li>
                                    @endforeach
                                                                                           
                                </ul>
                                <div class="br"></div>
                            </aside>
                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
            <div class="container">
                <div class="row footer_inner">
                    <div class="col-lg-5 col-sm-6">
                        <aside class="f_widget ab_widget">
                            
                        </aside>
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <aside class="f_widget news_widget">
                           
                            </div> 
                            <p>Stay updated with our latest trends</p>
                            <div id="mc_embed_signup">

                        </aside>
                    </div>
                    <div class="col-lg-2">
                        <aside class="f_widget social_widget">
                            <div class="f_title">
                                <h3>Follow Me</h3>
                            </div>
                            <p>Let us be social</p>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/app.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="js/theme.js"></script>





        <script type="text/javascript">
    $('.like').click(function(e){
        var dataid = $(this).attr('data-id'); 
         e.preventDefault();

        console.log(e);


// begin axios
          axios.post('/like', {
    Postid: dataid,  
  })
  .then(function (response) {
    // let request = new XMLHttpRequest();
    // request.open('GET', 'nolikes.json', true);
    var likes = response.data.nolikes;
    // console.log(response.data.nolikes);

    alert(response.data.nolikes);
    document.getElementById("likes").style.display = "none";

  })
  .catch(function (error) {
    console.log(error);
  });

  // end axios
        });
</script>
<script type="text/javascript">
 $("body").mousemove(function(event) {
  var eye = $(".eye");
  var x = (eye.offset().left) + (eye.width() / 2);
  var y = (eye.offset().top) + (eye.height() / 2);
  var rad = Math.atan2(event.pageX - x, event.pageY - y);
  var rot = (rad * (180 / Math.PI) * -1) + 90;
  eye.css({
    '-webkit-transform': 'rotate(' + rot + 'deg)',
    '-moz-transform': 'rotate(' + rot + 'deg)',
    '-ms-transform': 'rotate(' + rot + 'deg)',
    'transform': 'rotate(' + rot + 'deg)'
  });
});
</script>

    </body>
</html>