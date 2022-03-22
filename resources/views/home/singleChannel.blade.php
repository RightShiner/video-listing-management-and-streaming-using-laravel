@extends('layouts.mainLayout2')

@section('channel_banner')

<!-- channel -->
<div class="container-fluid">
  <div class="channel">
    <div class="row">
        <div class="img">
            <div class="img-image">
                <img src="http://localhost/snipetubes/public/screenshot/channel-banner.png" alt="" class="c-banner">
            </div>
            <div class="c-avatar">
                <a href="http://azyrusthemes.com/circlevideo/channel.html#"><img src="http://localhost/snipetubes/public/screenshot/channel-user.png" alt=""></a>
            </div>
            <a href="http://azyrusthemes.com/circlevideo/channel.html#" class="add"><i class="cv cvicon-cv-plus"></i></a>
            <div class="c-social hidden-xs">
                Social
                <a href="http://azyrusthemes.com/circlevideo/channel.html#" class="fb"><i class="fa fa-facebook"></i></a>
                <a href="http://azyrusthemes.com/circlevideo/channel.html#" class="tw"><i class="fa fa-twitter"></i></a>
                <a href="http://azyrusthemes.com/circlevideo/channel.html#" class="gp"><i class="fa fa-google-plus"></i></a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ///channel -->

@endsection
@section('content')

 <div class="col-lg-12">

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
                            <div class="infinite-scroll">
                            @foreach($single as $list)
                           

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
                                        By <a href="{{url('single/channel/'.$list->slug)}}"><strong>{{$list->channel_name}}</strong></a></strong>
                                        
                                    </div>
                                    <div class="v-views">
                                        {{number_format($list->views)}} views.
                                    </div>
                                </div>
                            </div>
                            @endforeach

                             {{ $single->links() }}
                        </div>
                           

                            </div>
                         
                        
                        </div>
                    </div>
               
                <!-- /Featured Videos -->


 </div>
                

@endsection

@section('scripts')
<script src="{{ asset('assets/js/jquery.jscroll.min.js') }}"></script>
<script type="text/javascript">
    $('ul.pagination').hide();
    $(function() {
        $('.infinite-scroll').jscroll({
            autoTrigger: true,
            loadingHtml: '<img class="center-block" src="/images/loading.gif" alt="Loading..." />',
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.infinite-scroll',
            callback: function() {
                $('ul.pagination').remove();
            }
        });
    });
</script>
@endsection