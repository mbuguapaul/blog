<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MY BLOG</title>
<link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/linericon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/lightbox/simpleLightbox.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/animate-css/animate.css') }}">
        <!-- main css -->
       <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <style type="text/css">
        .mybtn{
            background-color: #8490FF;
            color: #fff;
        }
        .mybtn:hover{
           background-color: transparent;
           border:2px solid #8490FF;
            color: #8490FF; 
        }
        .demo {
  padding: 30px;
  min-height: 280px;
}

.tab-content{
  padding: 10px;
}

@nav-link-hover-bg: #eeeeee;
@nav-tabs-border-color: #dddddd;
@border-radius-base: 5px;
@screen-xs-max: 767px;


//css to add hamburger and create dropdown
.nav-tabs.nav-tabs-dropdown,
.nav-tabs-dropdown {
 @media (max-width: @screen-xs-max) {
      border: 1px solid @nav-tabs-border-color;
      border-radius: @border-radius-base;
      overflow: hidden;
      position: relative;

      &::after {
        content: "☰";
        position: absolute;
        top: 8px;
        right: 15px;
        z-index: 2;
        pointer-events: none;
      }

      &.open {
        a {
          position: relative;
          display: block;
        }

        > li.active > a {
          background-color: @nav-link-hover-bg;
        }
      }


    li {
      display: block;
      padding: 0;
      vertical-align: bottom;
    }

    > li > a {
      position: absolute;
      top: 0;
      left: 0;
      margin: 0;
      width: 100%;
      height: 100%;
      display: inline-block;
      border-color: transparent;

      &:focus,
      &:hover,
      &:active {
        border-color: transparent;
      }
    }

    > li.active > a {
      display:block;
      border-color: transparent;
      position: relative;
      z-index: 1;
      background: #fff;

      &:focus,
      &:hover,
      &:active {
        border-color: transparent;
      }
       
    }
  }
}
    </style>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    MY BLOG
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item"><a href="/" class="nav-link">Blogs</a></li>
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


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
                           <div class="f_title">
                                <h3>About Me</h3>
                            </div>
                            <p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Em creations</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
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
            function fileValidation(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
     var FileSize = file.files[0].size / 1024 / 1024; // in MB
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.JPG)$/i;

    if(!allowedExtensions.exec(filePath)){
        // alert('Please upload file having extensions .jpeg/.jpg/.png/.gif/.JPG only.');
        document.getElementById('red').innerHTML = 'invalid file format. Please choose .jpeg, .jpg, .png';

fileInput.value = '';
        return false;


    }else{
        //Image preview

        if (FileSize > 3) {
             document.getElementById('red').innerHTML = 'The file is too big. Exceeds 3MB';
           // $(file).val(''); //for clearing with Jquery
                
        fileInput.value = '';
        return false;
        } else {


             if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }


        }
       

    }
}
        </script>



<script type="text/javascript">
            function fiupdate(){
    var fileInput = document.getElementById('fupdate');
    var filePath = fileInput.value;
     var FileSize = fupdate.files[0].size / 1024 / 1024; // in MB
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.JPG)$/i;

    if(!allowedExtensions.exec(filePath)){
        // alert('Please upload file having extensions .jpeg/.jpg/.png/.gif/.JPG only.');
        document.getElementById('fu').innerHTML = 'invalid file format. Please choose .jpeg, .jpg, .png';

fileInput.value = '';
        return false;


    }else{
        //Image preview

        if (FileSize > 3) {
             document.getElementById('fu').innerHTML = 'The file is too big. Exceeds 3MB';
           // $(file).val(''); //for clearing with Jquery
                
        fileInput.value = '';
        return false;
        } else {


             if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                // document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }


        }
       

    }
}
        </script>


<!-- ////////////////////////s -->

<script type="text/javascript">
            function seupdate(){
    var fileInput = document.getElementById('supdate');
    var filePath = fileInput.value;
     var FileSize = supdate.files[0].size / 1024 / 1024; // in MB
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.JPG)$/i;

    if(!allowedExtensions.exec(filePath)){
        // alert('Please upload file having extensions .jpeg/.jpg/.png/.gif/.JPG only.');
        document.getElementById('su').innerHTML = 'invalid file format. Please choose .jpeg, .jpg, .png';

fileInput.value = '';
        return false;


    }else{
        //Image preview

        if (FileSize > 3) {
             document.getElementById('su').innerHTML = 'The file is too big. Exceeds 3MB';
           // $(file).val(''); //for clearing with Jquery
                
        fileInput.value = '';
        return false;
        } else {


             if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                // document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }


        }
       

    }
}
        </script>

        <!-- /////////////////////////////////t -->

        <script type="text/javascript">
            function thupdate(){
    var fileInput = document.getElementById('tupdate');
    var filePath = fileInput.value;
     var FileSize = tupdate.files[0].size / 1024 / 1024; // in MB
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.JPG)$/i;

    if(!allowedExtensions.exec(filePath)){
        // alert('Please upload file having extensions .jpeg/.jpg/.png/.gif/.JPG only.');
        document.getElementById('tu').innerHTML = 'invalid file format. Please choose .jpeg, .jpg, .png';

fileInput.value = '';
        return false;


    }else{
        //Image preview

        if (FileSize > 3) {
             document.getElementById('tu').innerHTML = 'The file is too big. Exceeds 3MB';
           // $(file).val(''); //for clearing with Jquery
                
        fileInput.value = '';
        return false;
        } else {


             if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                // document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }


        }
       

    }
}
        </script>

       
</body>
</html>
