<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azyrusthemes.com/circlevideo/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 May 2019 23:36:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Circle Video | Home Page</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ asset('assets/css/bootstrap4e.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/alls.css') }}" rel="stylesheet">

  <!--<link href="{{ asset('assets/css/header.css') }}" rel="stylesheet">-->
  <!--<link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet">-->
    <!-- Theme CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-circle-video.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom-column.css') }}" rel="stylesheet">
    
   
    <!-- font-family: 'Hind', sans-serif; -->
    <link href='https://fonts.googleapis.com/css?family=Hind:400,300,500,600,700|Hind+Guntur:300,400,500,700' rel='stylesheet' type='text/css'>
</head>

<body>

<!--Top Nav starts -->
<div class="top-nav">

    <nav class="navbar">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand"><img src="{{asset('assets/images/logo.png')}}" alt="snipetubes Logo" class="img-responsive"></a>
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">HOME</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="#">ADVERTISEMENT</a></li>
            <li><a href="#">MAKE MONEY ONLINE</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" class=""><i class="fa fa-user"></i> Online: 26365262</a></li>
          <li style=" margin-right: 6px;"><a href="#" class="btn btn-round"><i class="fa fa-user-o"></i> Register</a></li>
            <li><a href="#" class="btn btn-round"><i class="fa fa-user"></i> Login</a></li>
        </ul>
    </div>
</nav>

</div><!-- ///// Top Nav ends-->


<header class="middle-nav">
  
  <div class="container">
    <div class="nav navbar-nav col-md-2"  style="">
  <div class="dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle">CATEGORIES <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>

    </ul>
</div>
    </div>
    
    <div id="navbarCollapse" class="nav navbar-nav col-md-7">
    <div class="col-md-11 col-xs-10 col-sm-10" style="padding-right:0px; padding-left: 3px">
    <input type="text" name="search" class="form-control search-input" placeholder="Search Videos">
    </div>
   <div class="col-md-1 col-xs-2 col-sm-2" style="padding-left:0px; padding-right:6px;">
   <button type="submit" class="search-btn"><i class="fa fa-search"></i> SEARCH</button>
  
   </div>
 </div>

 <div class="nav navbar-nav col-md-3 rnav" style="padding-right:3px; padding-left: 3px">
<ul class="nav navbar-nav navbar-right">
          <li style=" margin-right: 6px;"><a href="#" class="">&nbsp;<i class="fa fa-user-o"></i> Registered Users: 123456678</a></li>
            
        </ul>
 </div>

  </div><!-- container-->
</header>




<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

               @yield('content')     

            </div>
        </div>
    </div>
</div>

<!-- footer -->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="container padding-def">
                <div class="col-lg-1  col-sm-2 col-xs-12 footer-logo">
                    <!--<a class="navbar-brand" href="index.html"><img src="images/logo.svg" alt="Project name" class="logo" /></a>-->
                    <a class="navbar-brand" href="http://azyrusthemes.com/circlevideo/index.html">
                        <img src="http://localhost:8080/snipetubes/public/screenshot/logo.svg" alt="Project name" class="logo" />
                        <span>Circle</span>
                    </a>
                </div>
                <div class="col-lg-7 col-sm-6 col-xs-12">
                    <div class="f-links">
                        <ul class="list-inline">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li class="hidden-xs"><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <div class="delimiter"></div>
                </div>
                <div class="col-lg-7 col-sm-6 col-xs-12">
                    <div class="f-copy">
                        <ul class="list-inline">
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li>Copyrights 2016 <a href="http://azyrusthemes.com/circlevideo/azyrusthemes.com" class="hidden-xs">azyrusthemes.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-3 col-sm-4 col-xs-12">
                    <div class="f-last-line">
                        <div class="f-icon pull-left">
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <div class="f-lang pull-right">
                            <!-- Small button group -->
                            <div class="btn-group dropup pull-right">
                                <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Language <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                    <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                    <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                    <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                    <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="delimiter visible-xs"></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /footer -->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>


</html>
