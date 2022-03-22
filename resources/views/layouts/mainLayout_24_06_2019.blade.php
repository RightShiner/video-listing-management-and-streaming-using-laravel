<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Upload and share personal and exciting videos with family, friends and the world">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Snipe tube | Short videos, comedy skits and movie trailers</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap4e.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/alls.css') }}" rel="stylesheet">

  <!--<link href="{{ asset('assets/css/header.css') }}" rel="stylesheet">-->
  <!--<link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet">-->
    <!-- Theme CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @yield('styles')
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-circle-video.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom-column.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/header.css') }}" rel="stylesheet">
    
    <script> var murl = "{{ url('/')}}"; </script>
   
    <!-- font-family: 'Hind', sans-serif; -->
    <link href='https://fonts.googleapis.com/css?family=Hind:400,300,500,600,700|Hind+Guntur:300,400,500,700' rel='stylesheet' type='text/css'>
</head>

<body>

<!-- Nav Bars starts -->


@php
 $cat =DB::table('categories')->where('active','=',1)->get();
  $moneuOnline =DB::table('tblmoney_url')->first();
  @endphp
<!-- mobile menu -->
<div id="mobile-menu">
  <div class="fa fa-cog pull-right" style="color: #fff; padding: 5px;" onclick="return closeMobileMenu();">Close</div>
  <div id="mobile-search">
    <form>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
      </div>
    </form>
  </div>
  <ul>
    <li><a href="{{url('/')}}" class="home1">Home</a> </li>
    
    <li><a href="{{url('/blog/list')}}">Blog </a></li>
    <li><a href="#">Advertisement </a></li>
    <li><a href="{{url("$moneuOnline->url")}}">Make Money Online</a></li>
    <li><a href="#">Contact Us </a></li>
        
        <li> <a href="#">Categories </a>
          <ul>
            @foreach($cat as $list)
            <li><a href="{{url('/each/category/'.$list->catId)}}">{{$list->category_name}}</a></li>
            @endforeach
          </ul>
        </li>
  </ul>
</div>
<!-- end mobile menu -->

  
  <!-- Header -->
  <header>
    <div class="header-container">
      
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-3 col-xs-12"> 
            <!-- Header Logo -->
            <div class="logo"><a title="e-commerce" href="index-2.html"><img alt="e-commerce" src="{{asset('assets/images/logo.png')}}"></a> </div>
            <!-- End Header Logo --> 
          </div>
          <div class="col-md-9 col-sm-8 hidden-xs">
            <div class="mtmegamenu">
              <ul>
                <li class="mt-root demo_custom_link_cms">
                  <div class="mt-root-item"><a href="{{url('/')}}">
                    <div class="title title_font"><span class="title-text">Home</span></div>
                    </a></div>
                </li>
                <li class="mt-root">
                  <div class="mt-root-item"><a href="{{url('/blog/list')}}">
                    <div class="title title_font"><span class="title-text">Blog</span></div>
                    </a></div>
                 </li>
              
                <li class="mt-root">
                  <div class="mt-root-item"><a href="{{url('/free/gifts')}}">
                    <div class="title title_font"><span class="title-text">Free Gifts</span> </div>
                    </a></div>
                </li>

               
                <li class="mt-root">
                  <div class="mt-root-item"><a href="{{url("$moneuOnline->url")}}" target="_blank">
                    <div class="title title_font"><span class="title-text">Make Money Online</span></div>
                    </a></div>
                </li>
                
                <li class="mt-root">
                  <div class="mt-root-item"><a href="#">
                    <div class="title title_font"><span class="title-text">Contact Us</span></div>
                    </a></div>
                </li>
                 @if(Auth::check())
                <li class="mt-root">
                  <div class="mt-root-item"><a href="{{url('/video/upload')}}">
                    <div class="title title_font"><span class="title-text btn btn-danger btn-xs" style="font-size: 12px; color:#FFF;">Upload</span></div>
                    </a></div>
                </li>
                  @endif

                               
              </ul>
              <div class="call-us hidden-sm"> <i class="fa fa-user-o"></i>
                <div class="call-us-inner"> <span class="call-text">Online/</span>
                  @if(Auth::check())
                 <span><a href="{{url('/logout')}}" class="btn btn-success btn-xs" style="font-size: 12px;"> Logout </a></span>
                  @else
                  
                   <span><a href="{{route('login')}}" class="btn btn-success btn-xs" style="font-size: 12px;"> Login </a></span>
                  @endif
                  <br/> <span class="call-num">24</span> </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header --> 
  
  <!-- Navbar -->
  
  <nav>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-3">
          <div class="mm-toggle-wrap">
            <div class="mm-toggle"> <i class="fa fa-align-justify"></i> </div>
            <span class="mm-label hidden-xs">Categories</span> </div>
          <div class="mega-container visible-lg visible-md visible-sm">
            <div class="navleft-container">
              <div class="mega-menu-title">
                <h3>Browse by category</h3>
              </div>
              <div class="mega-menu-category">
                <ul class="nav">
                    @foreach($cat as $list)
                  <li class="nosub"> <a href="{{url('/each/category/'.$list->catId)}}"><i class="icon fa fa-cog fa-fw"></i>{{strtoupper($list->category_name)}}</a>
                    
                  </li>
                  @endforeach
                  <!--<li class="nosub"> <a href="#"><i class="icon fa fa-hotel fa-fw"></i> Living Rooms</a>
                    
                  </li>
                  <li class="nosub"><a href="#"><i class="icon fa fa-wheelchair fa-fw"></i> Home Office</a></li>
                  <li> <a href="shop_grid.html"><i class="icon fa fa-bed fa-fw"></i> Bedroom</a>
                    
                  </li>
                  <li> <a href="shop_grid.html"><i class="icon fa  fa-coffee fa-fw"></i> Kitchen & Dining</a>
                  </li>
                  <li><a href="#"><i class="icon fa fa-codepen fa-fw"></i> Accessories</a>
                    
                  </li>
                  <li class="nosub"><a href="shop_grid.html"><i class="icon fa fa-cloud fa-fw"></i></i> Sofas</a></li>
                  <li class="nosub"><a href="shop_grid.html"><i class="icon fa fa-shopping-basket fa-fw"></i> Outdoor Furniture</a></li>
                  <li class="nosub"><a href="shop_grid.html"><i class="icon fa fa-lightbulb-o fa-fw"></i> Lightings</a></li>-->
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-9 col-sm-6 col-md-7 hidden-xs"> 
          <!-- Search -->
          
          <div class="top-search">
            <div id="search">
              <form action="{{url('/search/videos')}}" method="post">
                {{ csrf_field() }}
                <div class="input-group">
                  <input type="text" class="form-control" id="autocomplete" placeholder="Search" name="search">
                  <input type="hidden" id="searchWords" name="words">
                  <select class="cate-dropdown hidden-xs hidden-sm" name="category_id">
                    <option>All Categories</option>
                    <option>women</option>
                    <option>&nbsp;&nbsp;&nbsp;Chair </option>
                    <option>&nbsp;&nbsp;&nbsp;Decoration</option>
                    <option>&nbsp;&nbsp;&nbsp;Lamp</option>
                    <option>&nbsp;&nbsp;&nbsp;Handbags </option>
                    <option>&nbsp;&nbsp;&nbsp;Sofas </option>
                    <option>&nbsp;&nbsp;&nbsp;Essential </option>
                    <option>Men</option>
                    <option>Electronics</option>
                    <option>&nbsp;&nbsp;&nbsp;Mobiles </option>
                    <option>&nbsp;&nbsp;&nbsp;Music &amp; Audio </option>
                  </select>
                  <button class="btn-search" type="submit"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div>
          </div>
          
          <!-- End Search --> 
        </div>
        <!-- top cart -->
        <div class="col-md-2 col-xs-9 col-sm-2 top-cart" style="padding-right: 0px;">
          <div class="top-cart-contain">
            <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#">
                <div class="cart-icon"><i class="fa fa-users"></i></div>
                <div class="shoppingcart-inner hidden-sm"><span class="cart-title">Registered Users</span> <span class="cart-total">44774</span></div>
                </a></div>
              <div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- end nav --> 




<!-- // Nav Bars Ends -->

@yield('channel_banner')

<div class="content-wrapper">
    <div class="container">
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
                <div class="col-lg-2  col-sm-2 col-xs-12 footer-logo">
                    <!--<a class="navbar-brand" href="index.html"><img src="images/logo.svg" alt="Project name" class="logo" /></a>-->
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{asset('assets/images/logo.png')}}" alt="Project name" class="logo" />
                        <span>Circle</span>
                    </a>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="f-links">
                        <ul class="list-inline">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li class="hidden-xs"><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <div class="delimiter"></div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="f-copy">
                        <ul class="list-inline">
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li>Copyrights 2016 Snipetube</a></li>
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
@yield('scripts')
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/custom-.js') }}"></script>
<script src="{{ asset('assets/js/mobile-menu.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<script type="text/javascript">
  function closeMobileMenu(e)
  {
    $('#mobile-menu').hide(); 
    e.preventDefault();
  }
</script>

</body>


</html>
