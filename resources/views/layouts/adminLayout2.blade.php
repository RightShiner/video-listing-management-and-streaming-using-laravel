<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Snipetube</title>
<meta name="description" content="Responsive, Bootstrap, BS4">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<link rel="stylesheet" href="{{ asset('assets/admin-css/site.min.css')}}">
<link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<script> var murl = "{{ url('/')}}"; </script>
@yield('styles')
</head>
<body class="layout-column">
<header id="header" class="page-header bg-white b-b">
  <div class="navbar navbar-expand-lg"><a href="index.html" class="navbar-brand w w-auto-sm">
 
    <span class="hidden-folded d-inline l-s-n-1x w w-auto-sm"><img alt="snipetube" src="{{asset('assets/images/logo.png')}}"></span></a>
    <div class="collapse navbar-collapse order-2 order-lg-1" id="navbarToggler">
      <!--<form class="input-group m-2 my-lg-0">
        <div class="input-group-prepend">
          <button type="button" class="btn no-shadow no-bg px-0"><i data-feather="search"></i></button>
        </div>
        <input type="text" class="form-control no-border no-shadow no-bg typeahead" placeholder="Search components..." data-plugin="typeahead" data-api="../assets/api/menu.json">
      </form>-->
    </div>
    <ul class="nav navbar-menu order-1 order-lg-2">
      <li class="nav-item d-none d-sm-block"><a class="nav-link px-2" data-toggle="fullscreen" data-plugin="fullscreen"><i data-feather="maximize"></i></a></li>
      <li class="nav-item dropdown"><a class="nav-link px-2" data-toggle="dropdown"><i data-feather="settings"></i></a>
        
      </li>
      <li class="nav-item dropdown"><a class="nav-link px-2 mr-lg-2" data-toggle="dropdown"><i data-feather="bell"></i> <span class="badge badge-pill badge-up bg-primary">4</span></a>
      </li>
      <li class="nav-item dropdown"><a href="#" data-toggle="dropdown" class="nav-link d-flex align-items-center px-2 text-color"><span class="avatar w-24" style="margin: -2px"><img src="{{asset('assets/images/a0.jpg')}}" class="img-responsive" alt="..."></span></a>
        <div class="dropdown-menu dropdown-menu-right w mt-3 animate fadeIn">     
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="page.profile.html"><span>Profile</span> </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ url('/logout') }}">Sign out</a>
        </div>
      </li>
      <li class="nav-item d-lg-none"><a href="#" class="nav-link px-2" data-toggle="collapse" data-toggle-class data-target="#navbarToggler"><i data-feather="search"></i></a></li>
      <li class="nav-item d-lg-none"><a class="nav-link px-1" data-toggle="modal" data-target="#aside"><i data-feather="menu"></i></a></li>
    </ul>
  </div>
</header>
@php

$channel = DB::table('tblchannels')->where('user_id','=',Auth::user()->id)->first();
        $totalVideos = DB::table('tblvideos')
        //->join('users','users.id','=','tblsubscribe.user_id')
        ->where('channel_id','=',$channel->Id)
        ->count();
        $totalSubscription =  DB::table('tblsubscribe')
        //->join('users','users.id','=','tblsubscribe.user_id')
        ->where('tblsubscribe.channel_id','=',$channel->Id)
        ->count();
        if($totalSubscription > 1000 && $totalSubscription < 1000000)
        {
          $sub = $totalSubscription/1000;
          $total_subcriptions = number_format($sub,2).'k';
        }
        elseif($totalSubscription > 1000000)
        {
          $sub = $totalSubscription/1000000;
          $total_subcriptions = number_format($sub,2).'m';
        }
        else
        {
          $total_subcriptions = $totalSubscription;
        }


@endphp
<div id="main" class="layout-row flex">
  <div id="aside" class="page-sidenav no-shrink bg-white b-r nav-dropdown fade">
    <div class="sidenav h-100 modal-dialog bg-white b-r">
      <div class="flex scrollable hover">
        <div class="nav-border b-primary" data-nav>
          <div class="nav-fold flex-column pt-4"><a class="d-flex p-2" data-toggle="dropdown"><span class="avatar w-56 circle hide">J</span> <img src="{{asset('assets/images/a0.jpg')}}" alt="..." class="w-56 mx-auto circle"></a>
            <div class="hidden-folded w-100 p-2 pb-4 b-b">
              <div class="text-center"><a href="#" class="mr-auto text-nowrap text-color">{{Auth::user()->first_name}} {{Auth::user()->first_name}}<small class="d-block text-sm text-muted">London, UK</small></a></div>
              <div class="d-flex text-center pt-4">
                <div class="px-2 flex">
                  <div class="font-weight-bold">{{$totalVideos}}</div>
                  <small class="text-muted">Videos</small></div>
                <div class="px-2 flex">
                  <div class="font-weight-bold">{{$total_subcriptions}}</div>
                  <small class="text-muted">Subscribers</small></div>
              </div>
            </div>
          </div>
          <ul class="nav bg">
            @if(Entrust::hasRole('admin'))
            <li><a href="{{url('/channel/edit')}}"> <i class="fa fa-check-square awesome"> </i> <span class="nav-text">Edit Channel</span></a></li>
            <li><a href="{{url('/video/upload')}}"><i class="fa fa-film awesome"> </i><span class="nav-text">Upload Video</span></a></li>
            <li><a href="{{url('/uploaded/videos')}}"><i class="fa fa-film awesome"> </i><span class="nav-text">All Uploaded Videos</span></a></li>
            @endif
            <li><a href="{{url('/channel/subscribers')}}"><span class="fa fa-plus-circle awesome"></span><span class="nav-text">Subscriptions</span></a></li>

            <li><a href="{{url('/liked/videos')}}"><span class="fa fa-thumbs-up awesome"></span><span class="nav-text">Liked Videos</span></a></li>
            <li><a href="{{url('/channels/you-subscribed')}}"><span class="fa fa-desktop awesome"></span><span class="nav-text">Channels You Subscribed</span></a></li>
            <li><a href="{{url('/flaged/videos')}}"><span class="fa fa-flag awesome"></span><span class="nav-text">Videos Reported</span></a></li>
            <!-- admin -->
            <li><a href="{{url('/video/listall')}}"><span class="fa fa-film awesome"></span><span class="nav-text">All Videos</span></a></li>
            <li><a href="{{url('/channel/listall')}}"><span class="fa fa-check-square awesome"></span><span class="nav-text">All Channels</span></a></li>
            <li><a href="{{url('/make-money/url')}}"><span class="fa fa-dollar awesome"></span><span class="nav-text">Make Money Url</span></a></li>
            

            </ul>
        </div>
      </div>
      
    </div>
  </div>


  <div class="flex">
    <div id="content" class="">
      <div>
        

        @yield('content')
        
        <!-- Content -->
    </div>
    <footer id="footer" class="page-footer b-t">
      <div class="page-container">
        <div class="padding">
           <div class="py-5 text-sm text-muted">
            <div class="row">
              <div class="col-12 col-sm-3"></div>
              <div class="col-12 col-sm-9">&copy; Copyright. Snipetube</div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</div>
@yield('scripts')
<script src="{{ asset('assets/admin-css/site.min.js')}}"></script>

</body>

</html>