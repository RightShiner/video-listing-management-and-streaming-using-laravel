@extends('layouts._singleLayout')

@section('content')

<div class="col-md-10 col-md-offset-1">

	<div class="list">

                    @foreach($display as $list)
                    <div class="h-video row" style="margin-bottom: 18px;">
                        <div class="col-lg-10 col-md-offset-1">
                        <div class="col-lg-12 col-sm-12">
                            <div class="v-desc">
                                <a href="{{url('/blog/read/'.$list->Id)}}">{{$list->freebee}}</a>
                            </div>
                            <div class="v-views">
                               Posted On {{$list->created_at}}
                            </div>
                            <div class="v-views">
                               <strong> {{ $list->content }} </strong>
                            </div>
                            
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                    @endforeach

                 
                </div>

</div>

@endsection