@extends('layouts.mainLayout2')

@section('channel_banner')


@endsection
@section('content')

                 <!-- Featured Videos -->
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                   
                                    <li><a href="#">{{strtoupper($cat->category_name)}}</a></li>
                                    
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="row">
                            <div class="infinite-scroll">
                            @foreach($videos as $list)
                           

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
                                        By <strong>{{$list->channel_name}}</strong>
                                        
                                    </div>
                                    <div class="v-views">
                                        {{number_format($list->views)}} views.
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{ $videos->links() }}
                        </div>
                           

                            </div>
                         
                        </div>
                    </div>
               
                <!-- /Featured Videos -->

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