@extends('layouts.mainLayout2')



@section('content')


                <!-- slider comes here -->


                <!-- Slider ends here -->


              
                <!-- Featured Videos -->
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
                            @foreach($videos as $list)
                           

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
                                        By <strong>{{$list->channel_name}}</strong>
                                        
                                    </div>
                                    <div class="v-views">
                                        19,130 views.
                                    </div>
                                </div>
                            </div>
                            @endforeach

                           

                            </div>
                          <div class="row">
                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html"><img src="http://localhost/snipetubes/public/screenshot/video1-5.png" alt="" class="img-responsive"></a>
                                        <div class="time">23:57</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html">BATTALION 1944: TAKING ON BATTLEFIELD 5</a>
                                    </div>
                                    <div class="v-views">
                                        19,130 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html">
                                            <img src="http://localhost/snipetubes/public/screenshot/video1-6.png" alt="" class="img-responsive">
                                            <div class="watched-mask"></div>
                                            <div class="watched">WATCHED</div>
                                            <div class="time">7:27</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html">Amazon Blocking VIDEO GAMES for Non-Prime...</a>
                                    </div>
                                    <div class="v-views">
                                        185,525 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html"><img src="http://localhost/snipetubes/public/screenshot/video1-7.png" alt="" class="img-responsive"></a>
                                        <div class="time">12:58</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html">Amazing Facts About Nebulas Inside Deep Universe</a>
                                    </div>
                                    <div class="v-views">
                                        203,741 views. <span class="v-percent"><span class="v-circle"></span> 95%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html"><img src="http://localhost/snipetubes/public/screenshot/video1-8.png" alt="" class="img-responsive"></a>
                                        <div class="time">9:47</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html">Cornfield Chase - Outlast II Official Gameplay</a>
                                    </div>
                                    <div class="v-views">
                                        202,513 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
               
                <!-- /Featured Videos -->

                <!-- New Videos in India -->
                <div class="content-block head-div head-arrow">
                    <div class="head-arrow-icon">
                        <i class="cv cvicon-cv-next"></i>
                    </div>
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="hidden-xs">New Videos in India</span>
                                            <span class="visible-xs">New in India</span>
                                        </a>
                                    </li>
                                    <li class="hidden-xs"><a href="#">Most Viewed</a></li>
                                    <li>
                                        <a href="#">
                                            <span class="hidden-xs">Featured This Week</span>
                                            <span class="visible-xs">Featured Videos</span>
                                        </a>
                                    </li>
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
                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html"><img src="http://localhost/snipetubes/public/screenshot/video2-1.png" alt=""></a>
                                        <div class="time">54:23</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html">There Can Only Be One! Introducing Tanc & Hercules</a>
                                    </div>
                                    <div class="v-views">
                                        127,548 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html"><img src="http://localhost/snipetubes/public/screenshot/video2-2.png" alt=""></a>
                                        <div class="time">47:12</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html">Pokémon 3: The Movie - Spell Of The Unown: Entei HD...</a>
                                    </div>
                                    <div class="v-views">
                                        18,241,542 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html"><img src="http://localhost/snipetubes/public/screenshot/video2-3.png" alt=""></a>
                                        <div class="watched-mask"></div>
                                        <div class="watched">WATCHED</div>
                                        <div class="time">19:23</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html">Bullet Trains and Octopus Balls in South Korea</a>
                                    </div>
                                    <div class="v-views">
                                        729,347 views . <span class="v-percent"><span class="v-circle"></span> 95%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html"><img src="http://localhost/snipetubes/public/screenshot/video2-4.png" alt=""></a>
                                        <div class="time">21:18</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="#">Top 10 NEW 3DS Games Of 2016 that blew our mind</a>
                                    </div>
                                    <div class="v-views">
                                        79,239,852 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html"><img src="http://localhost/snipetubes/public/screenshot/video2-5.png" alt=""></a>
                                        <div class="time">1:23:57</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html">Mirror's Edge Catalyst Beta: PS4 vs Xbox One Frame-Rate... </a>
                                    </div>
                                    <div class="v-views">
                                        519,130 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html"><img src="http://localhost/snipetubes/public/screenshot/video2-6.png" alt=""></a>
                                        <div class="time">8:27</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html">THE MAGNIFICENT SEVEN - Teaser Trailer (HD)</a>
                                    </div>
                                    <div class="v-views">
                                        15,525 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html"><img src="http://localhost/snipetubes/public/screenshot/video2-7.png" alt=""></a>
                                        <div class="time">6:58</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html">Game of Thrones Season 6: Event Promo (HBO)</a>
                                    </div>
                                    <div class="v-views">
                                        43,741 views. <span class="v-percent"><span class="v-circle"></span> 95%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html"><img src="http://localhost/snipetubes/public/screenshot/video2-8.png" alt=""></a>
                                        <div class="time">5:47</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html">CHAPPIE Movie – Die Antwoord Featurette...</a>
                                    </div>
                                    <div class="v-views">
                                        3,202,513 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /New Videos in India -->

                <!-- Popular Playlists -->
                <div class="content-block head-div head-arrow">
                    <div class="head-arrow-icon">
                        <i class="cv cvicon-cv-next"></i>
                    </div>
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li><a href="#" class="color-active">Popular Playlists</a></li>
                                    <li><a href="#">Recently Featured</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sort by  <span class="caret"></span>
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
                    <div class="cb-content">
                        <div class="row">

                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="b-playlist">
                                    <div class="v-img">
                                        <img src="http://localhost/snipetubes/public/screenshot/video1-1.png" alt="" class="l-1" />
                                        <img src="http://localhost/snipetubes/public/screenshot/video1-2.png" alt="" class="l-2" />
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html"><img src="http://localhost/snipetubes/public/screenshot/playlist-1.png" alt="" class="l-3" /></a>
                                        <div class="items">20</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="#">There Can Only Be One! Introducing Tanc & Hercules</a>
                                    </div>
                                    <div class="v-views">
                                        127,548 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="b-playlist">
                                    <div class="v-img">
                                        <img src="http://localhost/snipetubes/public/screenshot/video2-1.png" alt="" class="l-1" />
                                        <img src="http://localhost/snipetubes/public/screenshot/video2-2.png" alt="" class="l-2" />
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html"><img src="http://localhost/snipetubes/public/screenshot/playlist-2.png" alt="" class="l-3"></a>
                                        <div class="items">15</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="#">Pokémon 3: The Movie - Spell Of The Unown: Entei HD...</a>
                                    </div>
                                    <div class="v-views">
                                        18,241,542 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="b-playlist">
                                    <div class="v-img">
                                        <img src="http://localhost/snipetubes/public/screenshot/video2-6.png" alt="" class="l-1" />
                                        <img src="http://localhost/snipetubes/public/screenshot/video2-4.png" alt="" class="l-2" />
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html"><img src="http://localhost/snipetubes/public/screenshot/playlist-3.png" alt="" class="l-3" ></a>
                                        <div class="items">7</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="#">Bullet Trains and Octopus Balls in South Korea</a>
                                    </div>
                                    <div class="v-views">
                                        729,347 views . <span class="v-percent"><span class="v-circle"></span> 95%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="b-playlist">
                                    <div class="v-img">
                                        <img src="http://localhost/snipetubes/public/screenshot/video1-6.png" alt="" class="l-1" />
                                        <img src="http://localhost/snipetubes/public/screenshot/video1-4.png" alt="" class="l-2" />
                                        <a href="http://azyrusthemes.com/circlevideo/single-video-tabs.html"><img src="http://localhost/snipetubes/public/screenshot/playlist-4.png" alt="" class="l-3"></a>
                                        <div class="items">27</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="#">Top 10 NEW 3DS Games Of 2016 that blew our mind</a>
                                    </div>
                                    <div class="v-views">
                                        79,239,852 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /Popular Playlists -->

                <!-- Popular Channels -->
                <div class="content-block head-div head-arrow">
                    <div class="head-arrow-icon">
                        <i class="cv cvicon-cv-next"></i>
                    </div>
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li><a href="#" class="color-active">Popular Channels</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       More <span class="caret"></span>
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
                    <div class="cb-content chanels-row">
                        <div class="row">
                            <div class="col-lg-2 col-sm-4 col-xs-4">
                                <div class="b-chanel">
                                    <a href="#">
                                        <img src="http://localhost/snipetubes/public/screenshot/chanel-1.png" alt="">
                                        <div class="hover">
                                            <span>Ray Simpson</span>
                                            <span><i class="cv cvicon-cv-liked"></i> 5K</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-xs-4">
                                <div class="b-chanel">
                                    <a href="#">
                                        <img src="http://localhost/snipetubes/public/screenshot/chanel-2.png" alt="">
                                        <div class="hover">
                                            <span>Ray</span>
                                            <span><i class="cv cvicon-cv-liked"></i> 215K</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-xs-4">
                                <div class="b-chanel">
                                    <a href="#">
                                        <img src="http://localhost/snipetubes/public/screenshot/chanel-3.png" alt="">
                                        <div class="hover">
                                            <span>Simpson</span>
                                            <span><i class="cv cvicon-cv-liked"></i> 21</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-xs-4">
                                <div class="b-chanel">
                                    <a href="#">
                                        <img src="http://localhost/snipetubes/public/screenshot/chanel-4.png" alt="">
                                        <div class="hover">
                                            <span>Ray Simpson</span>
                                            <span><i class="cv cvicon-cv-liked"></i> 134</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-xs-4">
                                <div class="b-chanel">
                                    <a href="#">
                                        <img src="http://localhost/snipetubes/public/screenshot/chanel-5.png" alt="">
                                        <div class="hover">
                                            <span>Simpson</span>
                                            <span><i class="cv cvicon-cv-liked"></i> 1.6M</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-xs-4">
                                <div class="b-chanel">
                                    <a href="#">
                                        <img src="http://localhost/snipetubes/public/screenshot/chanel-6.png" alt="">
                                        <div class="hover">
                                            <apan>Ray</apan>
                                            <span><i class="cv cvicon-cv-liked"></i> 265K</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Popular Channels -->

                <!-- pagination -->
                <div class="v-pagination">
                    <ul class="list-inline">
                        <li class="v-pagination-prev"><a href="#"><i class="cv cvicon-cv-previous"></i></a></li>
                        <li class="v-pagination-first"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">10</a></li>
                        <li class="v-pagination-skin visible-xs"><a href="#">Skip 5 Pages</a></li>
                        <li class="v-pagination-next"><a href="#"><i class="cv cvicon-cv-next"></i></a></li>
                    </ul>
                </div>
                <!-- /pagination -->

            

@endsection