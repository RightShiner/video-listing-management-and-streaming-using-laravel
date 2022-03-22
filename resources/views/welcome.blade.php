@extends('layouts.mainLayout2')
@section('styles')
<style type="text/css">
    
</style>
@endsection

@section('channel_banner')
   <!-- slider comes here -->
            <div class="ad-video-wrapper" style="width: 100%; height: 350px; overflow: hidden;">
                <div class="alert alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" style="background: #093;color: #FFF;border-radius: 50%;padding:0px 16px;">&times;</span></button>
            <video autoplay data-setup='{"fluid": true}' poster="{{asset('assets/images/poster.jpg')}}"  height="auto" id="videobg" loop muted>
                <source src="images/video.webm" type="video/webm">
                <source src="{{asset("backgroundVideos/$bgVideo->video_path")}}" type="video/mp4">
                Your browser does not support the video tag. I suggest you upgrade your browser.
            </video>
               </div>
                <div class="clearfix"></div>   
            </div>
            
                <!-- Slider ends here -->
@endsection

@section('content') 

              
                <!-- Featured Videos -->
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="visible-xs">Recent</span>
                                            <span class="hidden-xs">Recent Videos</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        More <span class="caret"></span>
                                    </button>
                                   
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="row">
                            @foreach($recent as $list)
                           

                            <div class="col-md5 col-sm-6 videoitem" style="padding-left: 8px; padding-right: 8px;">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="{{url('/watch/video/'.$list->vid)}}"><img src="{{asset('screenshot/'.$list->image_path)}}" class="img-responsive" alt=""></a>
                                        <div class="time">{{$list->duration}}</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="{{url('/watch/video/'.$list->vid)}}">{{$list->title}}</a>
                                        
                                    </div>
                                    <div class="v-desc" style="padding-top: 0px;">
                                        By <a href="{{url('single/channel/'.$list->slug)}}"><strong>{{$list->channel_name}}</strong></a>
                                        
                                    </div>
                                    <div class="v-views">
                                        {{number_format($list->views)}} views.
                                    </div>
                                </div>
                            </div>
                            @endforeach

                           

                            </div>
                         
                        </div>
                    </div>
               
                <!-- /Featured Videos -->

                


                                <!-- FMost Viewed Videos -->
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="visible-xs">Most</span>
                                            <span class="hidden-xs">Most Viewed Videos</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        More <span class="caret"></span>
                                    </button>
                                    
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="row">
                            @foreach($mostViewed as $list)
                           

                            <div class="col-md5 col-sm-6 videoitems" style="padding-left: 8px; padding-right: 8px;">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="{{url('/watch/video/'.$list->vid)}}"><img src="{{asset('screenshot/'.$list->image_path)}}" class="img-responsive" alt=""></a>
                                        <div class="time">{{$list->duration}}</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="{{url('/watch/video/'.$list->vid)}}">{{$list->title}}</a>
                                        
                                    </div>
                                    <div class="v-desc" style="padding-top: 0px;">
                                        By <a href="{{url('single/channel/'.$list->slug)}}"><strong>{{$list->channel_name}}</strong></a>
                                        
                                    </div>
                                    <div class="v-views">
                                        {{number_format($list->views)}} views.
                                    </div>
                                </div>
                            </div>
                            @endforeach

                           

                            </div>
                         
                        </div>
                    </div>
               
                <!-- /most viewed Videos -->

                                <!-- Music Videos -->
                                @if(count($music) > 0)
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="visible-xs">Featured</span>
                                            <span class="hidden-xs">Featured Videos</span>
                                        </a>
                                    </li>
                                    <li><a href="#">New Videos</a></li>
                                    <li class="hidden-xs"><a href="#">Recommended For You</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sort by <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="row">
                            @foreach($music as $list)
                           

                            <div class="col-md5 col-sm-6 videoitem" style="padding-left: 8px; padding-right: 8px;">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="{{url('/watch/video/'.$list->vid)}}"><img src="{{asset('screenshot/'.$list->image_path)}}" class="img-responsive" alt=""></a>
                                        <div class="time">23:57</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="{{url('/watch/video/'.$list->vid)}}">{{$list->title}}</a>
                                        
                                    </div>
                                    <div class="v-desc" style="padding-top: 0px;">
                                        By <a href="{{url('single/channel/'.$list->slug)}}"><strong>{{$list->channel_name}}</strong></a>
                                        
                                    </div>
                                    <div class="v-views">
                                        19,130 views.
                                    </div>
                                </div>
                            </div>
                            @endforeach

                           

                            </div>
                         
                        </div>
                    </div>

                    @endif
               
                <!-- /music Videos -->



                               <!-- Movies Videos -->
                @if(count($movies) > 0)
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="visible-xs">Featured</span>
                                            <span class="hidden-xs">Featured Videos</span>
                                        </a>
                                    </li>
                                    <li><a href="#">New Videos</a></li>
                                    <li class="hidden-xs"><a href="#">Recommended For You</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sort by <span class="caret"></span>
                                    </button>
                                   
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="row">
                            @foreach($movies as $list)
                           

                            <div class="col-md5 col-sm-6 videoitem" style="padding-left: 8px; padding-right: 8px;">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="{{url('/watch/video/'.$list->vid)}}"><img src="{{asset('screenshot/'.$list->image_path)}}" class="img-responsive" alt=""></a>
                                        <div class="time">23:57</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="{{url('/watch/video/'.$list->vid)}}">{{$list->title}}</a>
                                        
                                    </div>
                                    <div class="v-desc" style="padding-top: 0px;">
                                        By <a href="{{url('single/channel/'.$list->slug)}}"><strong>{{$list->channel_name}}</strong></a>
                                        
                                    </div>
                                    <div class="v-views">
                                        19,130 views.
                                    </div>
                                </div>
                            </div>
                            @endforeach

                           

                            </div>
                         
                        </div>
                    </div>

                    @endif
               
                <!-- /Featured Videos -->


                 <!-- Music Videos -->
                                @if(count($comedy) > 0)
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="visible-xs"></span>
                                            <span class="hidden-xs">Comedy</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        More <span class="caret"></span>
                                    </button>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="row">
                            @foreach($comedy as $list)
                           

                            <div class="col-md5 col-sm-6 videoitem" style="padding-left: 8px; padding-right: 8px;">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="{{url('/watch/video/'.$list->vid)}}"><img src="{{asset('screenshot/'.$list->image_path)}}" class="img-responsive" alt=""></a>
                                        <div class="time">23:57</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="{{url('/watch/video/'.$list->vid)}}">{{$list->title}}</a>
                                        
                                    </div>
                                    <div class="v-desc" style="padding-top: 0px;">
                                        By <a href="{{url('single/channel/'.$list->slug)}}"><strong>{{$list->channel_name}}</strong></a>
                                        
                                    </div>
                                    <div class="v-views">
                                        19,130 views.
                                    </div>
                                </div>
                            </div>
                            @endforeach

                           

                            </div>
                         
                        </div>
                    </div>

                    @endif
               
                <!-- /comedy Videos -->

                <!-- News Politics Videos -->
                                @if(count($newsPolitics) > 0)
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="visible-xs"></span>
                                            <span class="hidden-xs">News and Politics</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        More <span class="caret"></span>
                                    </button>
                                   
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="row">
                            @foreach($newsPolitics as $list)
                           

                            <div class="col-md5 col-sm-6 videoitem" style="padding-left: 8px; padding-right: 8px;">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="{{url('/watch/video/'.$list->vid)}}"><img src="{{asset('screenshot/'.$list->image_path)}}" class="img-responsive" alt=""></a>
                                        <div class="time">23:57</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="{{url('/watch/video/'.$list->vid)}}">{{$list->title}}</a>
                                        
                                    </div>
                                    <div class="v-desc" style="padding-top: 0px;">
                                        By <a href="{{url('single/channel/'.$list->slug)}}"><strong>{{$list->channel_name}}</strong></a>
                                        
                                    </div>
                                    <div class="v-views">
                                        19,130 views.
                                    </div>
                                </div>
                            </div>
                            @endforeach

                           

                            </div>
                         
                        </div>
                    </div>

                    @endif
               
                <!-- /News and Politics Videos -->

                <!-- News Politics Videos -->
                                @if(count($entertain) > 0)
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="visible-xs"></span>
                                            <span class="hidden-xs">Entertainment</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        More <span class="caret"></span>
                                    </button>
                                   
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="row">
                            @foreach($entertain as $list)
                           

                            <div class="col-md5 col-sm-6 videoitem" style="padding-left: 8px; padding-right: 8px;">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="{{url('/watch/video/'.$list->vid)}}"><img src="{{asset('screenshot/'.$list->image_path)}}" class="img-responsive" alt=""></a>
                                        <div class="time">23:57</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="{{url('/watch/video/'.$list->vid)}}">{{$list->title}}</a>
                                        
                                    </div>
                                    <div class="v-desc" style="padding-top: 0px;">
                                        By <a href="{{url('single/channel/'.$list->slug)}}"><strong>{{$list->channel_name}}</strong></a>
                                        
                                    </div>
                                    <div class="v-views">
                                        19,130 views.
                                    </div>
                                </div>
                            </div>
                            @endforeach

                           

                            </div>
                         
                        </div>
                    </div>

                    @endif
               
                <!-- /Entertainment Videos -->

                <!-- Education Videos -->
                                @if(count($education) > 0)
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="visible-xs"></span>
                                            <span class="hidden-xs">Education</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        More <span class="caret"></span>
                                    </button>
                                   
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="row">
                            @foreach($education as $list)
                           

                            <div class="col-md5 col-sm-6 videoitem" style="padding-left: 8px; padding-right: 8px;">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="{{url('/watch/video/'.$list->vid)}}"><img src="{{asset('screenshot/'.$list->image_path)}}" class="img-responsive" alt=""></a>
                                        <div class="time">23:57</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="{{url('/watch/video/'.$list->vid)}}">{{$list->title}}</a>
                                        
                                    </div>
                                    <div class="v-desc" style="padding-top: 0px;">
                                        By <a href="{{url('single/channel/'.$list->slug)}}"><strong>{{$list->channel_name}}</strong></a>
                                        
                                    </div>
                                    <div class="v-views">
                                        19,130 views.
                                    </div>
                                </div>
                            </div>
                            @endforeach

                           

                            </div>
                         
                        </div>
                    </div>

                    @endif
               
                <!-- /Education Videos -->


                <!-- Science and tech Videos -->
                                @if(count($scienceTech) > 0)
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="visible-xs"></span>
                                            <span class="hidden-xs">Science and Tech</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        More <span class="caret"></span>
                                    </button>
                                   
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="row">
                            @foreach($scienceTech as $list)
                           

                            <div class="col-md5 col-sm-6 videoitem" style="padding-left: 8px; padding-right: 8px;">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="{{url('/watch/video/'.$list->vid)}}"><img src="{{asset('screenshot/'.$list->image_path)}}" class="img-responsive" alt=""></a>
                                        <div class="time">23:57</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="{{url('/watch/video/'.$list->vid)}}">{{$list->title}}</a>
                                        
                                    </div>
                                    <div class="v-desc" style="padding-top: 0px;">
                                        By <a href="{{url('single/channel/'.$list->slug)}}"><strong>{{$list->channel_name}}</strong></a>
                                        
                                    </div>
                                    <div class="v-views">
                                        19,130 views.
                                    </div>
                                </div>
                            </div>
                            @endforeach

                           

                            </div>
                         
                        </div>
                    </div>

                    @endif
               
                <!-- /Science and Tech Videos -->

                <!-- News Politics Videos -->
                                @if(count($sport) > 0)
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="visible-xs"></span>
                                            <span class="hidden-xs">Sport</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        More <span class="caret"></span>
                                    </button>
                                   
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="row">
                            @foreach($sport as $list)
                           

                            <div class="col-md5 col-sm-6 videoitem" style="padding-left: 8px; padding-right: 8px;">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="{{url('/watch/video/'.$list->vid)}}"><img src="{{asset('screenshot/'.$list->image_path)}}" class="img-responsive" alt=""></a>
                                        <div class="time">23:57</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="{{url('/watch/video/'.$list->vid)}}">{{$list->title}}</a>
                                        
                                    </div>
                                    <div class="v-desc" style="padding-top: 0px;">
                                        By <a href="{{url('single/channel/'.$list->slug)}}"><strong>{{$list->channel_name}}</strong></a>
                                        
                                    </div>
                                    <div class="v-views">
                                        19,130 views.
                                    </div>
                                </div>
                            </div>
                            @endforeach

                           

                            </div>
                         
                        </div>
                    </div>

                    @endif
               
                <!-- /sport Videos -->

                <!-- Travel and Events Videos -->
                                @if(count($travelEvents) > 0)
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="visible-xs"></span>
                                            <span class="hidden-xs">Travel and Event</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        More <span class="caret"></span>
                                    </button>
                                   
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="row">
                            @foreach($travelEvents as $list)
                           

                            <div class="col-md5 col-sm-6 videoitem" style="padding-left: 8px; padding-right: 8px;">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="{{url('/watch/video/'.$list->vid)}}"><img src="{{asset('screenshot/'.$list->image_path)}}" class="img-responsive" alt=""></a>
                                        <div class="time">23:57</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="{{url('/watch/video/'.$list->vid)}}">{{$list->title}}</a>
                                        
                                    </div>
                                    <div class="v-desc" style="padding-top: 0px;">
                                        By <a href="{{url('single/channel/'.$list->slug)}}"><strong>{{$list->channel_name}}</strong></a>
                                        
                                    </div>
                                    <div class="v-views">
                                        19,130 views.
                                    </div>
                                </div>
                            </div>
                            @endforeach

                           

                            </div>
                         
                        </div>
                    </div>

                    @endif
               
                <!-- /Travel and Events Videos -->

                <!-- Beauty and Makeup Videos -->
                                @if(count($beautyMakeup) > 0)
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="visible-xs"></span>
                                            <span class="hidden-xs">Beauty and Makeup</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        More <span class="caret"></span>
                                    </button>
                                   
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="row">
                            @foreach($beautyMakeup as $list)
                           

                            <div class="col-md5 col-sm-6 videoitem" style="padding-left: 8px; padding-right: 8px;">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="{{url('/watch/video/'.$list->vid)}}"><img src="{{asset('screenshot/'.$list->image_path)}}" class="img-responsive" alt=""></a>
                                        <div class="time">23:57</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="{{url('/watch/video/'.$list->vid)}}">{{$list->title}}</a>
                                        
                                    </div>
                                    <div class="v-desc" style="padding-top: 0px;">
                                        By <a href="{{url('single/channel/'.$list->slug)}}"><strong>{{$list->channel_name}}</strong></a>
                                        
                                    </div>
                                    <div class="v-views">
                                        19,130 views.
                                    </div>
                                </div>
                            </div>
                            @endforeach

                           

                            </div>
                         
                        </div>
                    </div>

                    @endif
               
                <!-- /Beauty and Makeup Videos -->





          

@endsection

@section('styles')
<style type="text/css">
    .autocomplete-suggestions{

    background-color:#F4F4F4 !important;
    border-bottom: 1px solid #666 !important;
    padding: 1px 5px !important;
    cursor: Pointer !important;
    font-size: 14px;

}
.close
{
    border-radius: 50% !important;
    background: green !important;
    color: #FFF !important;
}
</style>
@endsection

@section('scripts')

<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
<!-- autocomplete js-->
<script src="{{ asset('assets/js/jquery.autocomplete.js') }}" ></script>
<script type="text/javascript">
  $(function() {
    $("#autocomplete").autocomplete({
      serviceUrl: murl + '/searchVideos',
      minLength: 2,
      onSelect: function (suggestion) {
//alert('hello');
$('#searchWords').val(suggestion.data);
console.log(suggestion.data);
}
});
  });

  $('.close').click(function()
  {
    $('.ad-video-wrapper').hide();
  })
</script>


@endsection