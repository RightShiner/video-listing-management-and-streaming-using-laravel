@extends('layouts._singleLayout')



@section('content')

  
            <div class="col-lg-8 col-xs-12 col-sm-12 col-md-offset-2">
                <!-- Video player -->
                <!--<div class="sv-video">
                    <video poster="images/single-video.png" style="width:100%;height:100%;" controls="controls" width="100%" height="100%">
                        <source src="http://azyrusthemes.com/circlevideo/videos/video-1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></source>
                    </video>
                    
                </div>-->

            <h1 style="padding: 0px;" class="blog-title">{{$read->title}}</h1>
            <div class="col-md-12" style="margin-bottom: 6px; padding-left: 0px;">
               <img src="{{asset('blogImages/'.$read->filename)}}" alt=""  style="width: 100%;">
              </div>
                <!-- Video player ends-->

                <div class="rows" style="margin-top: 16px;">
                    <span >{{$read->date_posted}}</span>
                
                </div>
               
                

                
                <div class="info" style="padding-top: 0px; margin-top: 0px;">
                    <!-- Video Info -->
                    <div class="custom-tabs">
                        
                        <div class="clearfix"></div>

                        <!-- BEGIN tabs-content -->
                        <div class="">
                            <!-- BEGIN tab-1 -->
                            <div class="tab-1">
                                <div class="text">
                                    
                                    <p>{!!$read->text!!}</p>

                                     <div class="row date-lic">
                                        <div class="col-xs-6">
                                           
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <!-- END tab-1 -->

                            
                            
                            
                        </div>
                        <!-- END tabs-content -->
                    </div>

                    <!-- Video Info ends -->


                    <!-- Comment section -->
                    
                    <div class="single-v-footer">
                       
                        
                        <!-- comments -->
                        <div class="comments">
                            <div class="reply-comment">
                                <div class="rc-header"><i class="cv cvicon-cv-comment"></i> <span class="semibold">236</span> Comments</div>
                                <div class="rc-ava"><a href="#"><img src="images/ava5.png" alt=""></a></div>
                                <div class="rc-comment">
                                    <form action="{{url('/blog-comment/store')}}" method="post">
                                        {{ csrf_field() }} 
                                        <textarea name="comment" rows="3">Share what you think?</textarea >
                                        <input type="hidden" name="videoID" value="{{$read->Id}}">
                                        <input type="hidden" name="replyID" value="">
                                        <button type="submit">
                                            <i class="fa fa-comment"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="comments-list">

                                

                                <!-- comment -->
                                
                                 @foreach($comments as $list)
                                
                                <div class="cl-comment">
                                    <div class="cl-avatar"><a href="#"><img src="images/ava8.png" alt=""></a></div>
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

            



@endsection

@section('scripts')

@endsection


