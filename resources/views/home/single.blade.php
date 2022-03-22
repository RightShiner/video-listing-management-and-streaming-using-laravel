@extends('layouts._singleLayout')



@section('content')

  
            <div class="col-lg-9 col-xs-12 col-sm-12">
                <!-- Video player -->
                <!--<div class="sv-video">
                    <video poster="images/single-video.png" style="width:100%;height:100%;" controls="controls" width="100%" height="100%">
                        <source src="http://azyrusthemes.com/circlevideo/videos/video-1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></source>
                    </video>
                    
                </div>-->

                
            <div class="col-md-12">
    <video controls id="examplePlayer" class="video-js vjs-default-skin" data-setup='{"fluid": true}' preload="auto">
                
                <source src="{{asset('videos/'.$watch->video_path)}}" type="video/mp4">
                <source src="http://localhost/snipetubes/public/videos/2%20Make%20Edo%20Great.webm" type="video/webm" />
                <source src="http://localhost/snipetubes/public/videos/2%20Make%20Edo%20Great.ogg" type="video/ogg" />
                </video>
              </div>
                <!-- Video player ends-->
<div class="clearfix"></div>
                <div class="rows">
                <h1><a href="#">{{$watch->title}}</a></h1>
                </div>
                <!--<div class="acide-panel acide-panel-top">
                    <a href="#"><i class="cv cvicon-cv-watch-later" data-toggle="tooltip" data-placement="top" title="Watch Later"></i></a>
                    <a href="#"><i class="cv cvicon-cv-liked" data-toggle="tooltip" data-placement="top" title="Liked"></i></a>
                    <a href="#"><i class="cv cvicon-cv-flag" data-toggle="tooltip" data-placement="top" title="Flag"></i></a>
                </div>-->

                @php

                //$auth = Auth::user()->id;
                if(Auth::guest())
                {
                $btnlike = 'restrict';
                $btnDislike = 'noAccess';
                $btnFlag = 'denied';
                $btncomment = 'denied';
                }
                else
                {
                $btnlike = 'liked';
                $btnDislike = 'dislike';
                $btnFlag = 'flag';
                }

                @endphp

                <!-- Video statistics start -->
                <div class="clearfix"></div>
                <div class="author">
                    <div class="author-head">
                        <a href="#"><img src="images/channel-user.png" alt="" class="sv-avatar"></a>
                        <div class="sv-name">
                            <div><a href="#">NaughtyDog</a> . 52 Videos</div>
                            <div class="c-sub hidden-xs">
                                <div class="c-f" id="{{$watch->channel_id}}">
                                    <a href="javascript:void()" class="subscribe" id="{{$watch->channel_id}}">
                                    Subscribe
                                   </a>
                                </div>
                                <div class="c-s">
                                    {{$subscriptions}}
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <a href="#" class="author-btn-add"><i class="cv cvicon-cv-plus"></i></a>
                    </div>
                    <div class="author-border"></div>
                    <div class="sv-views">
                        <div class="sv-views-count">
                            2,729,347 views
                        </div>
                        <div class="sv-views-progress">
                            <div class="sv-views-progress-bar"></div>
                        </div>
                        <div class="sv-views-stats">
                            <span class="percent">95%</span>
                            <span class="green {{$btnlike}}" id="{{$watch->vid}}"><i class="fa fa-thumbs-up {{$btnlike}}" id="{{$watch->vid}}"></i> {{$watch->likes}}</span>
                            <span class="grey {{$btnDislike}}" id="{{$watch->vid}}"><span class="fa fa-thumbs-down {{$btnDislike}}"></span> {{$watch->dislikes}}</span>
                          <span class="grey {{$btnFlag}}" id="{{$watch->vid}}"><span class="fa fa-flag"></span> </span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- Video statistics ends -->
<div class="clearfix"></div>
                
                <div class="info">

                    <!-- Video Info -->
                    <div class="custom-tabs">
                        <div class="tabs-panel">
                            <a href="#" class="active" data-tab="tab-1">
                                <i class="cv cvicon-cv-about" data-toggle="tooltip" data-placement="top" title="About"></i>
                                <span>About</span>
                            </a>
                            <a href="#" data-tab="tab-2">
                                <i class="cv cvicon-cv-share" data-toggle="tooltip" data-placement="top" title="Share"></i>
                                <span>Share</span>
                            </a>

                            <div class="acide-panel hidden-xs">
                                
                                 <a href="#"><i class="cv cvicon-cv-liked" data-toggle="tooltip" data-placement="top" title="Liked"></i></a>
                                 <a href="#"><i class="cv cvicon-cv-flag" data-toggle="tooltip" data-placement="top" title="Flag"></i></a>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <!-- BEGIN tabs-content -->
                        <div class="tabs-content">
                            <!-- BEGIN tab-1 -->
                            <div class="tab-1">
                                <div style="border:none !important;">
                                    <!--<h4>Cast:</h4>
                                    <p>Nathan Drake , Victor Sullivan , Sam Drake , Elena Fisher</p>

                                    <h4>Category :</h4>
                                    <p>Gaming , PS4 Exclusive , Gameplay , 1080p</p>-->

                                    <h4>Description :</h4>
                                    <p>{!! $watch->description !!}</p>

                                     <div class="row date-lic">
                                        <div class="col-xs-6">
                                            <h4>Release Date:</h4>
                                            <p>2 Days ago</p>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="clearfix"></div>
                                <div class="showless hidden-xs" style="margin-top: 15px; margin-bottom: 10px;">
                                    <a href="#">Show Less</a>
                                </div>
                            </div>
                            <!-- END tab-1 -->
                            @php
                            $url =  "http://localhost/snipetubes/public/watch/video/$watch->vid";
                            $title = "$watch->title";
                            @endphp
                            <!-- BEGIN tab-2 -->
                            <div class="tab-2">
                                <h4>Share:</h4>
                                <div class="social">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{$url}}&t=$title" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="http://twitter.com/share?{{$title}}&url={{$url}}" class="twitter"><i class="fa fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="http://pinterest.com/pin/create/button/?url={{$url}}&media={{asset('screenshot/'.$watch->image_path)}}&description={{$title}}" class="pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    <a href="#" class="tumblr"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{$url}}&title={{$title}}&source=Snipetube" class="vk"><i class="fa fa-vk" aria-hidden="true"></i></a>
                                    <a href="#" class="reddit"><i class="fa fa-reddit" aria-hidden="true"></i></a>
                                    <a href="http://www.stumbleupon.com/submit?url={{$url}}&title={{$title}}" class="stumbleupon"><i class="fa fa-stumbleupon" aria-hidden="true"></i></a>
                                    <a href="#" class="odnoklassniki"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>
                                    <a href="#" class="btc"><i class="fa fa-btc" aria-hidden="true"></i></a>
                                    
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-9">
                                        <h4>Link:</h4>
                                        <label class="clipboard">
                                            <input type="text" name="#" class="share-link" value="http://youtu.be/DwGgdfe-C6c" readonly>
                                            <div class="btn-copy" data-clipboard-target=".share-link">Copy</div>
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <h4>Start at:</h4>
                                        <label class="checkbox">
                                            <input type="checkbox" name="#">
                                            <span class="arrow"></span>
                                        </label>
                                        <input type="text" name="#" value="3:20" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Embed:</h4>
                                        <textarea type="text" name="#" readonly><iframe width="560" height="315" src="{{asset('videos/'.$watch->video_path)}}" frameborder="0" allowfullscreen></iframe></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Video Size:</h4>
                                        <div class="tags-type1">
                                            <a href="#">360P</a>
                                            <a href="#">480P</a>
                                            <a href="#">720P</a>
                                            <a href="#">1080P</a>
                                            <a href="#">Custom</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="checkbox-text">
                                            <label class="checkbox">
                                                <input type="checkbox" name="#">
                                                <span class="arrow"></span>
                                            </label>
                                            <p>Show suggested videos when the video finishes</p>
                                        </label>
                                        <label class="checkbox-text">
                                            <label class="checkbox">
                                                <input type="checkbox" name="#">
                                                <span class="arrow"></span>
                                            </label>
                                            <p>Show player controls</p>
                                        </label>
                                        <label class="checkbox-text">
                                            <label class="checkbox">
                                                <input type="checkbox" name="#">
                                                <span class="arrow"></span>
                                            </label>
                                            <p>Show video title and player actions</p>
                                        </label>
                                    </div>
                                </div>
                                <div class="tab-popup popup-share">
                                    <div class="tab-popup-head">
                                        <i class="cv cvicon-cv-share"></i>
                                        <span>Share this video</span>
                                        <a href="#" class="tab-popup-close"><i class="cv cvicon-cv-cancel"></i></a>
                                    </div>
                                    <div class="tab-popup-content">
                                        <h4>Copy Link:</h4>
                                        <label class="clipboard">
                                            <input type="text" name="#" class="share-link" value="http://youtu.be/DwGgdfe-C6c" readonly>
                                            <div class="btn-copy" data-clipboard-target=".share-link">Copy</div>
                                        </label>
                                    </div>
                                    <div class="tab-popup-content">
                                        <div class="popup-share-social">
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                                <span>Facebook</span>
                                            </a>
                                            <a href="#" class="twitter">
                                                <i class="fa fa fa-twitter" aria-hidden="true"></i>
                                                <span>Twitter</span>
                                            </a>
                                            <a href="#" class="google">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                                <span>Google Plus</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END tab-2 -->

                            
                            
                        </div>
                        <!-- END tabs-content -->
                    </div>

                    <!-- Video Info ends -->

                    

                    <div class="adblock2">
                        <div class="img">
                            <span class="hidden-xs">
                                Google AdSense<br>728 x 90
                            </span>
                            <span class="visible-xs">
                                Google AdSense 320 x 50
                            </span>
                        </div>
                    </div>

                    <!-- Comment section -->
                    
                    <div class="single-v-footer">
                       
                        
                        <!-- comments -->
                        <div class="comments">
                            <div class="reply-comment">
                                <div class="rc-header"><i class="cv cvicon-cv-comment"></i> <span class="semibold">236</span> Comments</div>
                                <div class="rc-ava"><a href="#"><img src="images/ava5.png" alt=""></a></div>
                                <div class="rc-comment">
                                    <form action="{{url('/save/comment')}}" method="post">
                                        {{ csrf_field() }} 
                                        <textarea name="comment" rows="3">Share what you think?</textarea >
                                        <input type="hidden" name="videoID" value="{{$watch->vid}}">
                                        <input type="hidden" name="replyID" value="">
                                        @if(Auth::guest())
                                        <button type="button" id="button">
                                            <i class="fa fa-comment"></i>
                                        </button>
                                        @else
                                        <button type="submit">
                                            <i class="fa fa-comment"></i>
                                        </button>
                                        @endif
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="comments-list">

                                <div class="cl-header">
                                    <div class="c-nav">
                                        <ul class="list-inline">
                                            <li><a href="#" class="active">Popular <span class="hidden-xs">Comments</span></a></li>
                                            <li><a href="#">Newest <span class="hidden-xs">Comments</span></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- comment -->
                                @foreach($comments as $list)
                                
                                <div class="cl-comment">
                                    <div class="cl-avatar"><a href="#"><!--<img src="images/ava8.png" alt=""></a>--> <i class="fa fa-user"></i></div>
                                    <div class="cl-comment-text">
                                        <div class="cl-name-date"><a href="#">{{$list->first_name}}</a>On  {{$list->date_posted}}</div>
                                        <div class="cl-text"> {{$list->comment}}</div>
                                        <div class="cl-meta"><span class="green"><span class="circle"></span> 121</span> <span class="grey"><span class="circle"></span> 2</span> . <a href="#" id="{{$list->comment_id}}">Reply</a></div>
                                        <div class="cl-replies"><a href="#">View all 5 replies <i class="fa fa-chevron-down" aria-hidden="true"></i></a></div>
                                        <div class="cl-flag"><a href="#"><i class="cv cvicon-cv-flag"></i></a></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                               

                                @endforeach
                                <!-- END comment -->

                                
                                

                                <div class="row hidden-xs">
                                    <div class="col-lg-12">
                                        <div class="loadmore-comments">
                                            <form action="#" method="post">
                                                <button class="btn btn-default h-btn">Load more Comments</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END comments -->
                    </div> <!-- ends single footer -->

                    <!-- Comment section end-->
                </div>
                <div class="content-block head-div head-arrow visible-xs">
                    <div class="head-arrow-icon">
                        <i class="cv cvicon-cv-next"></i>
                    </div>
                    <div class="adblock2 adblock2-v2">
                        <div class="img">
                            <span>Google AdSense 300 x 250</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- right column -->
            <div class="col-lg-3 col-xs-12 col-sm-12 hidden-xs">

                <!-- up next -->
                <div class="caption">
                    <div class="left">
                        <a href="#">Up Next</a>
                    </div>
                    <div class="right">
                        <a href="#">Autoplay <i class="cv cvicon-cv-btn-off"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                 
                 @foreach($sidebarAds as $l)
                <div class="col-md-12">
                    {!!$l->script!!}
                </div>
                @endforeach

                <div class="list">

                    @foreach($related as $list)
                    <div class="h-video row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-img">
                                <a href="{{url('/watch/video/'.$list->vid)}}"><img src="{{asset('screenshot/'.$list->image_path)}}" alt=""></a>
                                <div class="time">15:19</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-desc">
                                <a href="{{url('/watch/video/'.$list->vid)}}">{{$list->title}}</a>
                            </div>
                            <div class="v-views">
                               {{$list->channel_name}}
                            </div>
                            <div class="v-v

                            iews">
                                2,729,347 views
                            </div>
                            
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @endforeach

                 
                </div>
                <!-- END up next -->

                <!--<div class="adblock">
                    <div class="img">
                        Google AdSense<br>
                        336 x 280
                    </div>
                </div>-->

                
                <!-- load more -->
                <div class="loadmore">
                    <a href="#">Show more videos</a>
                </div>
            </div>

            <!--End Right Column -->
       


<!-- Modal HTML -->
<div id="reportModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Report Video</h4>
      </div>
      <div class="modal-body">
       <div id="msg" class=""></div>
        
          <input type="hidden"  value="{{$watch->vid}}" name="year" id="vid" class="btn btn-success" />
          
        
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="month">Report</label>
               <textarea name="report" id="report" class="form-control"></textarea>
              </div>
            </div>
            
          </div>
         
          <input type="button" id="button" class="btn btn-success" value="Submit" />
          
          <div id="desc">

        </div>
       


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
<!--///// end modal -->



@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('.restrict').click(function(){
            alert('You must login to like any video');
        });
        $('.noAccess').click(function(){
            alert('You must login to dislike any video');
        });
        $('.denied').click(function(){
            alert('You must login to report any video');
        });
        $('#button').click(function(){
            alert('You must login to Comment on any video');
        });
    })
</script>

@endsection


