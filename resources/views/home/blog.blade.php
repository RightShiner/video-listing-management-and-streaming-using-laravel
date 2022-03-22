@extends('layouts._singleLayout')

@section('content')

<div class="col-md-10 col-md-offset-1">

	<div class="list">

                    @foreach($blog as $list)
                    <div class="h-video row">
                        <div class="col-lg-4 col-sm-4">
                            <div class="v-img">
                                <a href="{{url('/blog/read/'.$list->Id)}}"><img src="{{asset('blogImages/'.$list->filename)}}" alt="" class="img-responsive"></a>
                                
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <div class="v-desc">
                                <a href="{{url('/blog/read/'.$list->Id)}}">{{$list->title}}</a>
                            </div>
                            <div class="v-views">
                               Podted On {{$list->date_posted}}
                            </div>
                            <div class="v-views">
                               <strong> {{ implode(' ', array_slice(str_word_count($list->text,1), 0, 20)) }} </strong>
                            </div>
                            
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @endforeach

                 
                </div>

</div>

@endsection