@extends('layouts._singleLayout')

@section('content')

<div class="col-md-10 col-md-offset-1">

	<div class="list">

                    @foreach($search as $list)
                    <div class="h-video row">
                        <div class="col-lg-3 col-sm-3">
                            <div class="v-img">
                                <a href="{{url('/watch/video/'.$list->vid)}}"><img src="{{asset('screenshot/'.$list->image_path)}}" alt="" class="img-responsive"></a>
                                <div class="time">15:19</div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-9">
                            <div class="v-desc">
                                <a href="{{url('/watch/video/'.$list->vid)}}">{{$list->title}}</a>
                            </div>
                            <div class="v-views">
                               {{$list->channel_name}}
                            </div>
                            <div class="v-v

                            iews">
                                {{$list->views}} views
                            </div>
                            
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @endforeach

                 
                </div>

</div>

@endsection