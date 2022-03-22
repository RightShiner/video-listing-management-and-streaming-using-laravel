
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="favicon.png">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"> 
    <!-- player -->
    <!--<link href="{{ asset('assets/css/mediaelementplayer.min.css') }}" rel="stylesheet">-->
    <!-- Theme CSS -->
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    
     <link href="{{ asset('videojs/video-js.css')}}" rel="stylesheet">
     <link href="{{ asset('videojs/videojs.ads.css')}}" rel="stylesheet">
     <link href="{{ asset('videojs/videojs-preroll.css')}}" rel="stylesheet" type="text/css">
<script> var murl = "{{ url('/')}}"; </script>
    <!-- font-family: 'Hind', sans-serif; -->
    <link href='https://fonts.googleapis.com/css?family=Hind:400,300,500,600,700|Hind+Guntur:300,400,500,700' rel='stylesheet' type='text/css'>
</head>

<body class="single-video light">


<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-xs-12 col-sm-12">
                <!-- Video player -->
                <!--<div class="sv-video">
                    <video poster="images/single-video.png" style="width:100%;height:100%;" controls="controls" width="100%" height="100%">
                        <source src="http://azyrusthemes.com/circlevideo/videos/video-1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></source>
                    </video>
                    
                </div>-->

                
            <div class="col-md-12">
    <video controls id="examplePlayer" class="video-js vjs-default-skin" data-setup='{"fluid": true}'  autoplay="true">
                
                <source src="{{asset('videos/'.$watch->video_path)}}" type="video/mp4">
                <source src="http://localhost/snipetubes/public/videos/2%20Make%20Edo%20Great.webm" type="video/webm" />
                <source src="http://localhost/snipetubes/public/videos/2%20Make%20Edo%20Great.ogg" type="video/ogg" />
                </video>
              </div>
                <!-- Video player ends-->

                <div class="rows">
                <h1><a href="#">{{$watch->title}}</a></h1>
                </div>
                <!--<div class="acide-panel acide-panel-top">
                    <a href="#"><i class="cv cvicon-cv-watch-later" data-toggle="tooltip" data-placement="top" title="Watch Later"></i></a>
                    <a href="#"><i class="cv cvicon-cv-liked" data-toggle="tooltip" data-placement="top" title="Liked"></i></a>
                    <a href="#"><i class="cv cvicon-cv-flag" data-toggle="tooltip" data-placement="top" title="Flag"></i></a>
                </div>-->

                <!-- Video statistics start -->
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
                            <span class="green liked" id="{{$watch->vid}}"><i class="fa fa-thumbs-up like" id="{{$watch->vid}}"></i> {{$watch->likes}}</span>
                            <span class="grey dislike" id="{{$watch->vid}}"><span class="fa fa-thumbs-down"></span> {{$watch->dislikes}}</span>
                          <span class="grey flag" id="{{$watch->vid}}"><span class="fa fa-flag"></span> </span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- Video statistics ends -->

                
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
                                <div>
                                    <h4>Cast:</h4>
                                    <p>Nathan Drake , Victor Sullivan , Sam Drake , Elena Fisher</p>

                                    <h4>Category :</h4>
                                    <p>Gaming , PS4 Exclusive , Gameplay , 1080p</p>

                                    <h4>About :</h4>
                                    <p>Three years after the events of Uncharted 3: Drake's Deception, Nathan Drake, now retired as a fortune hunter, has settled into a normal life with his wife Elena Fisher. His world is then turned upside down when his older brother Sam, long believed to be dead, suddenly reappears seeking Drake's help.</p>

                                     <div class="row date-lic">
                                        <div class="col-xs-6">
                                            <h4>Release Date:</h4>
                                            <p>2 Days ago</p>
                                        </div>
                                        <div class="col-xs-6 ta-r">
                                            <h4>License:</h4>
                                            <p>Standard</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden-xs">
                                    <h4>Game:</h4>
                                    <p>Uncharted 4</p>
                                    <a href="#">
                                        <img src="images/tab-1-img-1.jpg" alt="image">
                                    </a>
                                    <a href="#" class="btn">Purchase</a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="showless hidden-xs">
                                    <a href="#">Show Less</a>
                                </div>
                            </div>
                            <!-- END tab-1 -->

                            <!-- BEGIN tab-2 -->
                            <div class="tab-2">
                                <h4>Share:</h4>
                                <div class="social">
                                    <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#" class="pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    <a href="#" class="btc"><i class="fa fa-btc" aria-hidden="true"></i></a>
                                    <a href="#" class="tumblr"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
                                    <a href="#" class="vk"><i class="fa fa-vk" aria-hidden="true"></i></a>
                                    <a href="#" class="reddit"><i class="fa fa-reddit" aria-hidden="true"></i></a>
                                    <a href="#" class="stumbleupon"><i class="fa fa-stumbleupon" aria-hidden="true"></i></a>
                                    <a href="#" class="odnoklassniki"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>
                                    <a href="#" class="pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    <a href="#" class="btc"><i class="fa fa-btc" aria-hidden="true"></i></a>
                                    <a href="#" class="tumblr"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
                                    <a href="#" class="vk"><i class="fa fa-vk" aria-hidden="true"></i></a>
                                    <a href="#" class="reddit"><i class="fa fa-reddit" aria-hidden="true"></i></a>
                                    <a href="#" class="stumbleupon"><i class="fa fa-stumbleupon" aria-hidden="true"></i></a>
                                    <a href="#" class="odnoklassniki"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>
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
                                        <textarea type="text" name="#" readonly><iframe width="560" height="315" src="https://www.circle.com/embed/ZocVTdsercgvsd3nA3JM?controls=0" frameborder="0" allowfullscreen></iframe></textarea>
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

                    <div class="content-block head-div head-arrow head-arrow-top visible-xs">
                        <div class="head-arrow-icon">
                            <i class="cv cvicon-cv-next"></i>
                        </div>
                    </div>

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
                                        <button type="submit">
                                            <i class="fa fa-comment"></i>
                                        </button>
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

            <!-- right column -->
            <div class="col-lg-4 col-xs-12 col-sm-12 hidden-xs">

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
                                2,729,347 views
                            </div>
                            <div class="v-percent"><span class="v-circle"></span> 55%</div>
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
        </div>
    </div>
</div>

<!-- footer -->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="container padding-def">
                <div class="col-lg-1  col-sm-2 col-xs-12 footer-logo">
                    <!--<a class="navbar-brand" href="index.html"><img src="images/logo.svg" alt="Project name" class="logo" /></a>-->
                    <a class="navbar-brand" href="index.html">
                        <img src="images/logo.svg" alt="Project name" class="logo" />
                        <span>Circle</span>
                    </a>
                </div>
                <div class="col-lg-7 col-sm-6 col-xs-12">
                    <div class="f-links">
                        <ul class="list-inline">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li class="hidden-xs"><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <div class="delimiter"></div>
                </div>
                <div class="col-lg-7 col-sm-6 col-xs-12">
                    <div class="f-copy">
                        <ul class="list-inline">
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li>Copyrights 2016 <a href="azyrusthemes.com" class="hidden-xs">azyrusthemes.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-3 col-sm-4 col-xs-12">
                    <div class="f-last-line">
                        <div class="f-icon pull-left">
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <div class="f-lang pull-right">
                            <!-- Small button group -->
                            <div class="btn-group dropup pull-right">
                                <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Language <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                    <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                    <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                    <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                    <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="delimiter visible-xs"></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /footer -->


<!-- Modal HTML -->
<div id="myModal" class="modal fade">
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





<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
 <script type="text/javascript">
      $(document).ready(function(){
        //alert('ok');
        $('.liked').click( function(){
      //alert('ok')
      var Id = $(this).attr('id');

      //alert(Id);
      $token = $("input[name='_token']").val();
      $.ajax({
        //headers: {'X-CSRF-TOKEN': $token},
        url: murl +'/liking/video',
        type: "post",
        data: {'id': Id, _token:'{{csrf_token()}}'},
        success: function(data){
          console.log(data);
          //location.reload(true);
          }
      });
    });
    });

          $(document).ready(function(){
        //alert('ok');
        $('.dislike').click( function(){
      //alert('ok')
      var Id = $(this).attr('id');
      
      //alert(Id);
      $token = $("input[name='_token']").val();
      $.ajax({
        //headers: {'X-CSRF-TOKEN': $token},
        url: murl +'/disliking/video',
        type: "post",
        data: {'id': Id, _token:'{{csrf_token()}}'},
        success: function(data){
          console.log(data);
          //location.reload(true);
          }
      });
    });
    });
  </script>
  <script type="text/javascript">
       $(document).ready(function(){
        //alert('ok');
        $('#button').click( function(){
      //alert('ok')
       //$('#msg').html("working");
      var Id = $("#vid").val();
      var report = $("#report").val();

      $('#msg').html(report);
      //alert(Id);
      $token = $("input[name='_token']").val();
      $.ajax({
        //headers: {'X-CSRF-TOKEN': $token},
        url: murl +'/report/video',
        type: "post",
        data: {'id': Id, 'rpt': report, _token:'{{csrf_token()}}'},
        success: function(data){
          console.log(data);
          //location.reload(true);
          $('#msg').html(data);
          }
      });
    });
    });
  </script>

    <script type="text/javascript">
       $(document).ready(function(){
        
        $('.subscribe').click( function(){
        var Id = $(this).attr('id');
        //alert(Id);
        $token = $("input[name='_token']").val();
      $.ajax({
        //headers: {'X-CSRF-TOKEN': $token},
        url: murl +'/subscribe/channel',
        type: "post",
        data: {'id': Id, _token:'{{csrf_token()}}'},
        success: function(data){
          console.log(data);
          //location.reload(true);
          alert(data);
          }
      });
    });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
        $(".flag").click(function(){
            $("#myModal").modal('show');
        });
    });
</script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!--<script src="{{ asset('assets/js/clipboard.min.js') }}"></script>-->
<!--<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>--> 
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!--<script src="{{ asset('videojs/mediaelement-andf-player.min.js') }}"></script>-->
<script src="{{ asset('videojs/video.js') }}"></script>

  <script src="{{ asset('videojs/videojs.ads.js') }}"></script>
  <script src="{{ asset('videojs/videojs-preroll.js') }}"></script>


  <script>
    // fire up the plugin
    videojs('examplePlayer',{},function(){
      var player = this;
      player.preroll({
        src:{src:"{{asset('adsVideos/gloads.mp4')}}",type:"video/mp4"},
        href:"http://videojs.com",
        allowSkip:true,
        skipTime:10,
        lang:{'skip':'Skip'},
        adsOptions: {debug:true}
      });
    });
  </script>
  <script type="text/javascript">
      
// This example script hides the "Big Play Button" (a.k.a. BPB), 
// which may be useful to prevent it flashing and presenting a
// playable UI

var player = videojs(document.querySelector('.video-js'));
var bpb = player.getChild('bigPlayButton');

// It's always a good idea to verify that a component exists before
// doing things with it.
if (bpb) {
  
  // Hide the BPB as early as possible, before the player is ready.
  bpb.hide();
  
  player.ready(function() {
    var promise = player.play();

    // If no promise is returned, show the BPB immediately.
    if (promise === undefined) {
      bpb.show();
    
    // If a promise is returned, wait until it either succeeds or
    // fails to show the BPB.
    } else {
      promise.then(function() {
        bpb.show();
      }, function() {
        bpb.show();
      });
    }
  });
}

  </script>

  


</body>
</html>
