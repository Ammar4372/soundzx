@include('Frontend.header')

<body>
    <div class="app dk" id="app">

        <!-- ############ LAYOUT START-->

        <!-- aside -->

        <!-- fluid app aside -->
        @include('Frontend.lognav')

        <!-- / -->

        <!-- content -->
        <div id="content" class="app-content white bg box-shadow-z2" role="main">
            <div class="app-header hidden-lg-up white lt box-shadow-z1">
                <div class="navbar">
                    <!-- brand -->
                    @include('Frontend.brand')
                    <!-- / brand -->
                    <!-- nabar right -->
                    <ul class="nav navbar-nav pull-right">
                        <li class="nav-item">
                            <!-- Open side - Naviation on mobile -->
                            <a data-toggle="modal" data-target="#aside" class="nav-link">
                                <i class="material-icons">menu</i>
                            </a>
                            <!-- / -->
                        </li>
                    </ul>
                    <!-- / navbar right -->
                </div>
            </div>
            <div class="app-footer app-player grey bg">
                <div class="playlist" style="width:100%"></div>
            </div>
            <div class="app-body" id="view">

                <!-- ############ PAGE START-->

                <div class="page-content">
                    <div class="row-col">
                        <div class="col-lg-9 b-r no-border-md">
                            <div class="padding">

                                <div class="page-title m-b">
                                    <h1 class="inline m-a-0">Charts</h1>
                                    <div class="dropdown inline">
                                        <button class="btn btn-sm no-bg h4 m-y-0 v-b dropdown-toggle text-primary"
                                            data-toggle="dropdown">Last week</button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item active">
                                                Last week
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                Last month
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                Last year
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                All the time
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row item-list item-list-md item-list-li m-b">
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-12"
                                            data-src="http://api.soundcloud.com/tracks/174495152/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="track.detail.html" class="item-media-content"
                                                    style="background-image: url('images/b11.jpg');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite"><i
                                                            class="fa fa-heart-o"></i></a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                            class="fa fa-ellipsis-h"></i></a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="track.detail.html">Happy ending</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis ">
                                                    <a href="artist.detail.html" class="text-muted">Postiljonen</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-stats text-xs  item-meta-right">
                                                        <i class="fa fa-play text-muted"></i> 860
                                                        <i class="fa fa-heart m-l-sm text-muted"></i> 240
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-1"
                                            data-src="http://api.soundcloud.com/tracks/269944843/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="track.detail.html" class="item-media-content"
                                                    style="background-image: url('images/b0.jpg');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite"><i
                                                            class="fa fa-heart-o"></i></a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                            class="fa fa-ellipsis-h"></i></a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="track.detail.html">Pull Up</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis ">
                                                    <a href="artist.detail.html" class="text-muted">Summerella</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-stats text-xs  item-meta-right">
                                                        <i class="fa fa-play text-muted"></i> 3200
                                                        <i class="fa fa-heart m-l-sm text-muted"></i> 210
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-10"
                                            data-src="http://api.soundcloud.com/tracks/237514750/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="track.detail.html" class="item-media-content"
                                                    style="background-image: url('images/b9.jpg');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite"><i
                                                            class="fa fa-heart-o"></i></a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                            class="fa fa-ellipsis-h"></i></a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="track.detail.html">The Open Road</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis ">
                                                    <a href="artist.detail.html" class="text-muted">Postiljonen</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-stats text-xs  item-meta-right">
                                                        <i class="fa fa-play text-muted"></i> 860
                                                        <i class="fa fa-heart m-l-sm text-muted"></i> 240
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-2"
                                            data-src="http://api.soundcloud.com/tracks/259445397/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="track.detail.html" class="item-media-content"
                                                    style="background-image: url('images/b1.jpg');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite"><i
                                                            class="fa fa-heart-o"></i></a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                            class="fa fa-ellipsis-h"></i></a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="track.detail.html">Fireworks</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis ">
                                                    <a href="artist.detail.html" class="text-muted">Kygo</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-stats text-xs  item-meta-right">
                                                        <i class="fa fa-play text-muted"></i> 30
                                                        <i class="fa fa-heart m-l-sm text-muted"></i> 10
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-3"
                                            data-src="http://api.soundcloud.com/tracks/79031167/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="track.detail.html" class="item-media-content"
                                                    style="background-image: url('images/b2.jpg');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite"><i
                                                            class="fa fa-heart-o"></i></a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                            class="fa fa-ellipsis-h"></i></a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="track.detail.html">I Wanna Be In the Cavalry</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis ">
                                                    <a href="artist.detail.html" class="text-muted">Jeremy Scott</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-stats text-xs  item-meta-right">
                                                        <i class="fa fa-play text-muted"></i> 300
                                                        <i class="fa fa-heart m-l-sm text-muted"></i> 10
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-7"
                                            data-src="http://api.soundcloud.com/tracks/245566366/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="track.detail.html" class="item-media-content"
                                                    style="background-image: url('images/b6.jpg');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite"><i
                                                            class="fa fa-heart-o"></i></a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                            class="fa fa-ellipsis-h"></i></a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="track.detail.html">Reflection (Deluxe)</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis ">
                                                    <a href="artist.detail.html" class="text-muted">Fifth Harmony</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-stats text-xs  item-meta-right">
                                                        <i class="fa fa-play text-muted"></i> 200
                                                        <i class="fa fa-heart m-l-sm text-muted"></i> 510
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-8"
                                            data-src="http://api.soundcloud.com/tracks/236288744/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="track.detail.html" class="item-media-content"
                                                    style="background-image: url('images/b7.jpg');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite"><i
                                                            class="fa fa-heart-o"></i></a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                            class="fa fa-ellipsis-h"></i></a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="track.detail.html">Simple Place To Be</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis ">
                                                    <a href="artist.detail.html" class="text-muted">RYD</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-stats text-xs  item-meta-right">
                                                        <i class="fa fa-play text-muted"></i> 400
                                                        <i class="fa fa-heart m-l-sm text-muted"></i> 220
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-9"
                                            data-src="http://api.soundcloud.com/tracks/264094434/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="track.detail.html" class="item-media-content"
                                                    style="background-image: url('images/b8.jpg');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite"><i
                                                            class="fa fa-heart-o"></i></a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                            class="fa fa-ellipsis-h"></i></a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="track.detail.html">All I Need</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis ">
                                                    <a href="artist.detail.html" class="text-muted">Pablo Nouvelle</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-stats text-xs  item-meta-right">
                                                        <i class="fa fa-play text-muted"></i> 4500
                                                        <i class="fa fa-heart m-l-sm text-muted"></i> 2310
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-4"
                                            data-src="http://api.soundcloud.com/tracks/230791292/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="track.detail.html" class="item-media-content"
                                                    style="background-image: url('images/b3.jpg');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite"><i
                                                            class="fa fa-heart-o"></i></a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                            class="fa fa-ellipsis-h"></i></a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="track.detail.html">What A Time To Be Alive</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis ">
                                                    <a href="artist.detail.html" class="text-muted">Judith Garcia</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-stats text-xs  item-meta-right">
                                                        <i class="fa fa-play text-muted"></i> 320
                                                        <i class="fa fa-heart m-l-sm text-muted"></i> 20
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-11"
                                            data-src="http://api.soundcloud.com/tracks/218060449/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="track.detail.html" class="item-media-content"
                                                    style="background-image: url('images/b10.jpg');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite"><i
                                                            class="fa fa-heart-o"></i></a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                            class="fa fa-ellipsis-h"></i></a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="track.detail.html">Spring</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis ">
                                                    <a href="artist.detail.html" class="text-muted">Pablo Nouvelle</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-stats text-xs  item-meta-right">
                                                        <i class="fa fa-play text-muted"></i> 4500
                                                        <i class="fa fa-heart m-l-sm text-muted"></i> 2310
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 w-xxl w-auto-md">
                            @include('Frontend.sidebar')
                        </div>
                    </div>
                </div>

                <!-- ############ PAGE END-->

            </div>
        </div>
        <!-- / -->

        <!-- ############ SWITHCHER START-->
        
        <!-- ############ SWITHCHER END-->
        <!-- ############ SEARCH START -->
        
        <!-- ############ SEARCH END -->
        <!-- ############ SHARE START -->
        
        <!-- ############ SHARE END -->

        <!-- ############ LAYOUT END-->
    </div>

    <!-- build:js scripts/app.min.js -->
    @include('Frontend.scripts')
    <!-- endbuild -->
</body>

</html>
