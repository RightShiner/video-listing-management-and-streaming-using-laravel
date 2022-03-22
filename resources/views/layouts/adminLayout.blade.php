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
<link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/alls.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/sidebar.css') }}" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-circle-video.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom-column.css') }}" rel="stylesheet">

   <style>
        .progress { position:relative; width:100%; border: 1px solid #7F98B2; padding: 1px; border-radius: 3px; }
        .bar { background-color: #B4F5B4; width:0%; height:25px; border-radius: 3px; }
        .percent { position:absolute; display:inline-block; top:3px; left:48%; color: #7F98B2;}
    </style>
    
    <!-- font-family: 'Hind', sans-serif; -->
    <link href='https://fonts.googleapis.com/css?family=Hind:400,300,500,600,700|Hind+Guntur:300,400,500,700' rel='stylesheet' type='text/css'>
@yield('styles')
</head>

<body class="light">
<!-- logo, menu, search, avatar -->
<div class="container-fluid">
    <div class="row">
        <div class="btn-color-toggle">
            <img src="http://localhost/snipetubes/public/screenshot/icon_bulb_light.png" alt="">
        </div>
        <div class="navbar-container">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 visible-xs">
                        <a href="#" class="btn-menu-toggle"><i class="cv cvicon-cv-menu"></i></a>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-xs-6">
                        <a class="navbar-brand" href="http://azyrusthemes.com/circlevideo/index.html">
                            <img src="http://localhost/snipetubes/public/screenshot/logo.svg" alt="Project name" class="logo" />
                            <span>Circle</span>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-10 hidden-xs">
                        <ul class="list-inline menu">
                            <li class="color-active">
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="http://azyrusthemes.com/circlevideo/index.html">Home Page</a></li>
                                    <li><a href="http://azyrusthemes.com/circlevideo/single-video.html">Single Video Page</a></li>
                                    <li><a href="http://azyrusthemes.com/circlevideo/single-video-youtube.html">Single Video Youtube Embedded Page</a></li>
                                    <li><a href="http://azyrusthemes.com/circlevideo/single-video-vimeo.html">Single Video Vimeo Embedded Page</a></li>
                                    <li><a href="http://azyrusthemes.com/circlevideo/upload.html">Upload Video Page</a></li>
                                    <li><a href="http://azyrusthemes.com/circlevideo/upload-edit.html">Upload Video Edit Page</a></li>
                                    <li><a href="http://azyrusthemes.com/circlevideo/search.html">Searched Videos Page</a></li>
                                    <li><a href="http://azyrusthemes.com/circlevideo/channel.html">Single Channel Page</a></li>
                                    <li><a href="http://azyrusthemes.com/circlevideo/channels.html">Channels Page</a></li>
                                    <li><a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html">Single Videos Page With Tabs</a></li>
                                    <li><a href="http://azyrusthemes.com/circlevideo/single-video-playlist.html">Single Videos Page With Playlist</a></li>
                                    <li><a href="http://azyrusthemes.com/circlevideo/history.html">History Page</a></li>
                                    <li><a href="http://azyrusthemes.com/circlevideo/categories.html">Browse Categories Page</a></li>
                                    <li><a href="http://azyrusthemes.com/circlevideo/categories_side_menu.html">Browse Categories Side Menu Page</a></li>
                                    <li><a href="http://azyrusthemes.com/circlevideo/subscription.html">Subscription Page</a></li>
                                    <li><a href="http://azyrusthemes.com/circlevideo/login.html">Login Page</a></li>
                                    <li><a href="http://azyrusthemes.com/circlevideo/signup.html">Signup Page</a></li>
                                </ul>
                            </li>
                            <li><a href="http://azyrusthemes.com/circlevideo/categories.html">Categories</a></li>
                            <li><a href="http://azyrusthemes.com/circlevideo/channel.html">Channels</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-8 col-xs-3">

                    </div>
                    <div class="col-lg-2 col-sm-4 hidden-xs">
                        <div class="avatar pull-left">
                            <img src="http://localhost:8080/snipetubes/public/screenshot/avatar.png" alt="avatar" />
                            <span class="status"></span>
                        </div>
                        <div class="selectuser pull-left">
                            <div class="btn-group pull-right dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Bailey
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void()" id="login">Login</a></li>
                                    <li><a href="javascript:void()" id="register">Sign up</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- /logo -->

<div class="mobile-menu">
    <div class="mobile-menu-head">
        <a href="#" class="mobile-menu-close"></a>
        <a class="navbar-brand" href="http://azyrusthemes.com/circlevideo/index.html">
            <img src="http://localhost:8080/snipetubes/public/screenshot/logo.svg" alt="Project name" class="logo" />
            <span>Circle</span>
        </a>
        <div class="mobile-menu-btn-color">
            <img src="http://localhost:8080/snipetubes/public/screenshot/icon_bulb_light.png" alt="">
        </div>
    </div>
    <div class="mobile-menu-content">
        <div class="mobile-menu-user">
            <div class="mobile-menu-user-img">
                <img src="http://localhost:8080/snipetubes/public/screenshot/ava11.png" alt="">
            </div>
            <p>Bailey Fry </p>
            <span class="caret"></span>
        </div>
        <a href="#" class="btn mobile-menu-upload">
            <i class="cv cvicon-cv-upload-video"></i>
            <span>Upload Video</span>
        </a>
        <div class="mobile-menu-list">
            <ul>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-play-circle"></i>
                        <p>Popular Videos</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-playlist"></i>
                        <p>Browse Categories</p>
                        <span class="caret"></span>
                    </a>
                    <ul class="mobile-menu-categories">
                        <li class="color-active">
                            <a href="#">Pages <span class="caret"></span></a>
                            <ul>
                                <li><a href="http://azyrusthemes.com/circlevideo/index.html">Home Page</a></li>
                                <li><a href="http://azyrusthemes.com/circlevideo/single-video.html">Single Video Page</a></li>
                                <li><a href="http://azyrusthemes.com/circlevideo/single-video-youtube.html">Single Video Youtube Embedded Page</a></li>
                                <li><a href="http://azyrusthemes.com/circlevideo/single-video-vimeo.html">Single Video Vimeo Embedded Page</a></li>
                                <li><a href="http://azyrusthemes.com/circlevideo/upload.html">Upload Video Page</a></li>
                                <li><a href="http://azyrusthemes.com/circlevideo/upload-edit.html">Upload Video Edit Page</a></li>
                                <li><a href="http://azyrusthemes.com/circlevideo/search.html">Searched Videos Page</a></li>
                                <li><a href="http://azyrusthemes.com/circlevideo/channel.html">Single Channel Page</a></li>
                                <li><a href="http://azyrusthemes.com/circlevideo/channels.html">Channels Page</a></li>
                                <li><a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html">Single Videos Page With Tabs</a></li>
                                <li><a href="http://azyrusthemes.com/circlevideo/single-video-playlist.html">Single Videos Page With Playlist</a></li>
                                <li><a href="http://azyrusthemes.com/circlevideo/history.html">History Page</a></li>
                                <li><a href="http://azyrusthemes.com/circlevideo/categories.html">Browse Categories Page</a></li>
                                <li><a href="http://azyrusthemes.com/circlevideo/categories_side_menu.html">Browse Categories Side Menu Page</a></li>
                                <li><a href="http://azyrusthemes.com/circlevideo/subscription.html">Subscription Page</a></li>
                                <li><a href="http://azyrusthemes.com/circlevideo/login.html">Login Page</a></li>
                                <li><a href="http://azyrusthemes.com/circlevideo/signup.html">Signup Page</a></li>
                            </ul>
                        </li>
                        <li><a href="http://azyrusthemes.com/circlevideo/categories.html">Categories</a></li>
                        <li><a href="http://azyrusthemes.com/circlevideo/channel.html">Channels</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-liked"></i>
                        <p>Liked Videos</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-history"></i>
                        <p>History</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-purchased"></i>
                        <p>Purchased Videos</p>
                    </a>
                </li>
            </ul>
        </div>
        <a href="#" class="btn mobile-menu-logout">Log out</a>
    </div>
</div>

<!-- content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

<div class="col-md-2 eq bgs" style="padding-right: 3px; ">
<!-- sidebar -->

<!-- Sidebar Holder -->
<div class="column" >
        <nav id="sidebar" style="margin-top: 20px;padding-right: 0px; background: #394263; color:#FFF">
            
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li>
                    <a href="index.html">
                        <i class="fa fa-th-large"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-laptop"></i>
                        Videos
                        <i class="fa fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{url('/video/upload')}}">Upload</a>
                        </li>
                        <li>
                            <a href="{{url('/channel/create')}}">Create Channel</a>
                        </li>
                        <li>
                            <a href="{{url('/channel/edit')}}">Edit Channel</a>
                        </li>
                        <li>
                            <a href="{{url('')}}">List All Videos</a>
                        </li>
                       
                    </ul>
                </li>
                
                <li>
                    <a href="grids.html">
                        <i class="fa fa-th"></i>
                        Grid Layouts
                    </a>
                </li>
                <li class="active">
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">
                        <i class="far fa-file"></i>
                        Pages
                        <i class="fa fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li>
                            <a href="404.html">404</a>
                        </li>
                        <li>
                            <a href="500.html">500</a>
                        </li>
                        <li>
                            <a href="blank.html">Blank</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="mailbox.html">
                        <i class="far fa-envelope"></i>
                        Mailbox
                        <span class="badge badge-secondary float-md-right bg-danger">5 New</span>
                    </a>
                </li>
                <li>
                    <a href="widgets.html">
                        <i class="far fa-window-restore"></i>
                        Widgets
                    </a>
                </li>
                <li>
                    <a href="pricing.html">
                        <i class="fa fa-table"></i>
                        Pricing Tables
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-users"></i>
                        User
                        <i class="fa fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forgot.html">Forgot password</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="fa fa-map"></i>
                        Maps
                    </a>
                </li>
            </ul>
        </nav>
</div>

<!--// sidebar -->

</div>

<div class="col-md-10 eq" style="padding-left: 10px; bottom: #f32;">
<!-- video upload form -->
@yield('content')
</div> 
<!-- end video upload form -->   

            </div>
        </div>
    </div>
</div>
<!--End content -->

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


<!--Registration modal bootstrap -->
<form action="{{url('/user/registration')}}" method="post">
{{ csrf_field() }} 
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Update Module</h4>
            </div>
            <div class="modal-body">
           
                    <div class="row" style="margin-bottom: 10px;">
                     <div class="form-group">
                        <label for="section" class="col-md-3 control-label">First Name</label>
                        <div class="col-md-9">
                          <input id="module" type="text" class="form-control" name="firstName" required>
                          <input id="id" type="hidden" class="form-control" name="moduleID" required>
                        </div>
                      </div>
                    </div>
                      
                    <div class="row" style="margin-bottom: 10px;">
                     <div class="form-group">
                       <label for="section" class="col-md-3 control-label">Surname</label>
                        <div class="col-md-9">
                          <input id="ranks" type="text" class="form-control" name="surname" value="" required>
                          
                        </div>
                      </div>
                    </div> 

                    <div class="row" style="margin-bottom: 10px;">
                     <div class="form-group">
                       <label for="section" class="col-md-3 control-label">Username</label>
                        <div class="col-md-9">
                          <input id="ranks" type="text" class="form-control" name="username" value="" required>
                          
                        </div>
                      </div>
                    </div>    


                    <div class="row" style="margin-bottom: 10px;">
                     <div class="form-group">
                       <label for="section" class="col-md-3 control-label">E-mail</label>
                        <div class="col-md-9">
                          <input id="ranks" type="text" class="form-control" name="email" value="" required>
                          
                        </div>
                      </div>
                    </div>  

                    <div class="row" style="margin-bottom: 10px;">
                     <div class="form-group">
                       <label for="section" class="col-md-3 control-label">Country</label>
                        <div class="col-md-9">
                          <input id="ranks" type="text" class="form-control" name="country" value="" required>
                          
                        </div>
                      </div>
                    </div> 

                    <div class="row" style="margin-bottom: 10px;">
                     <div class="form-group">
                       <label for="section" class="col-md-3 control-label">State/Province</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="province" value="" required>
                          
                        </div>
                      </div>
                    </div> 

                    <div class="row" style="margin-bottom: 10px;">
                     <div class="form-group">
                       <label for="section" class="col-md-3 control-label">Phone (Optional)</label>
                        <div class="col-md-9">
                          <input id="ranks" type="text" class="form-control" name="phone" value="" required>
                          
                        </div>
                      </div>
                    </div>    
   
   
  
   


            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>

<!--// Registration modal Bootstrap -->
</form>



<!--login modal bootstrap -->
<form action="{{url('/user/login')}}" method="post">
{{ csrf_field() }} 
<div id="myModallog" class="modal fade myModalLogin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
           
                     

                    <div class="row" style="margin-bottom: 10px;">
                     <div class="form-group">
                       <label for="section" class="col-md-3 control-label">Username</label>
                        <div class="col-md-9">
                          <input id="ranks" type="text" class="form-control" name="username" value="" required>
                          
                        </div>
                      </div>
                    </div>    


                    <div class="row" style="margin-bottom: 10px;">
                     <div class="form-group">
                       <label for="section" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                          <input id="ranks" type="text" class="form-control" name="password" value="" required>
                          
                        </div>
                      </div>
                    </div>  

   
  
   


            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>
<!--// login modal Bootstrap -->
</form>






<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script>

  $(document).ready(function(){
$('#register').click(function()
{

$("#myModal").modal('show');
});



  });

   $(document).ready(function(){


$('#login').click(function()
{

$(".myModalLogin").modal('show');
})

  });
</script>
@yield('script')
</body>


</html>
