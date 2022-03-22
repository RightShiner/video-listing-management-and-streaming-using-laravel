@extends('layouts.adminLayout2')


@section('content')

	<div class="col-md-12" style="margin-top: 25px;">
         @if($recent != '')
         @foreach($recent as $list)
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <p>Recently Uploaded Videos</p> 
            <div class="col-md-12"> <a href="{{url('/watch/video/'.$list->vid)}}"> <i class="fa fa-film"></i>&nbsp; {{$list->title}} </a> &nbsp; <span>By {{$list->channel_name}}</span></div>
          </div>
          @endforeach                        
         @endif
     </div>

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


<div class="col-md-12" style="margin-top: 15px;">
                  <div class="row row-sm">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="row row-sm">
                            <div class="col-6"><small class="text-muted">Number Of Suscribers</small>
                              <div class="mt-2 font-weight-500"><span class="text-info">{{$total_subcriptions}}</span> </div>
                            </div>
                            <div class="col-6"><small class="text-muted">Total number of Videos Uploaded</small>
                              <div class="text-highlight mt-2 font-weight-500">{{$totalVideos}}</div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 
                </div>
               
               
              </div>

              @endsection