@include('Frontend.header')

<body>
    <div class="app dk" id="app">

        <!-- ############ LAYOUT START-->

        <!-- content -->
        <div id="content" class="app-content white bg" role="main">
            <div class="app-header white lt box-shadow-z1">
                @include('Frontend.nav')
            </div>
            <div class="app-footer app-player grey bg">
                <div class="playlist" style="width:100%"></div>
            </div>
            <div class="app-body" id="view">

                <!-- ############ PAGE START-->

                <div class="page-content">

                    <div class="black dk">
                        <div class="row no-gutter item-info-overlay">
                            <div class="col-sm-6 text-white">
                                <div class="owl-carousel owl-theme owl-dots-sm owl-dots-bottom-left "
                                    data-ui-jp="owlCarousel"
                                    data-ui-options="{items: 1,loop: true,autoplay: true,nav: true}">
                                    <div class="item r" data-id="item-115"
                                        data-src="http://api.soundcloud.com/tracks/239793212/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media primary">
                                            <a href="track.detail.html" class="item-media-content"
                                                style="background-image: url('images/c1.jpg');"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right">
                                                <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
                                                <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis">
                                                <a href="track.detail.html">New Album from Nouvelle</a>
                                            </div>
                                            <div class="item-author text-sm text-ellipsis">
                                                <a href="artist.detail.html" class="text-muted">Nouvelle</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item r" data-id="item-116"
                                        data-src="http://api.soundcloud.com/tracks/260682299/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media info">
                                            <a href="track.detail.html" class="item-media-content"
                                                style="background-image: url('images/c2.jpg');"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right">
                                                <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
                                                <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis">
                                                <a href="track.detail.html">Blind Me</a>
                                            </div>
                                            <div class="item-author text-sm text-ellipsis">
                                                <a href="artist.detail.html" class="text-muted">Fifty</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item r" data-id="item-117"
                                        data-src="http://api.soundcloud.com/tracks/232886537/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media accent">
                                            <a href="track.detail.html" class="item-media-content"
                                                style="background-image: url('images/c3.jpg');"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right">
                                                <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
                                                <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis">
                                                <a href="track.detail.html">New Track from Pablo Nouvelle</a>
                                            </div>
                                            <div class="item-author text-sm text-ellipsis">
                                                <a href="artist.detail.html" class="text-muted">Pablo Nouvelle</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
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
                                            <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
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

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
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
                                            <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
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

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
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
                                            <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
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

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
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
                                            <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
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

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-col">
                        <div class="col-lg-9 b-r no-border-md">
                            <div class="padding">
                                <h2 class="widget-title h4 m-b">Treading</h2>
                                <div class="owl-carousel owl-theme owl-dots-center" data-ui-jp="owlCarousel"
                                    data-ui-options="{margin: 20,responsiveClass:true,responsive:{0:{items:2},543:{items:3}}}">
                                    <div class="">
                                        <div class="item r" data-id="item-3"
                                            data-src="http://api.soundcloud.com/tracks/79031167/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media item-media-4by3">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="item r" data-id="item-6"
                                            data-src="http://api.soundcloud.com/tracks/236107824/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media item-media-4by3">
                                                <a href="track.detail.html" class="item-media-content"
                                                    style="background-image: url('images/b5.jpg');"></a>
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
                                                    <a href="track.detail.html">Body on me</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis ">
                                                    <a href="artist.detail.html" class="text-muted">Rita Ora</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="item r" data-id="item-4"
                                            data-src="http://api.soundcloud.com/tracks/230791292/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media item-media-4by3">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="item r" data-id="item-10"
                                            data-src="http://api.soundcloud.com/tracks/237514750/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media item-media-4by3">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="item r" data-id="item-9"
                                            data-src="http://api.soundcloud.com/tracks/264094434/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media item-media-4by3">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="item r" data-id="item-2"
                                            data-src="http://api.soundcloud.com/tracks/259445397/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media item-media-4by3">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="item r" data-id="item-12"
                                            data-src="http://api.soundcloud.com/tracks/174495152/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media item-media-4by3">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="item r" data-id="item-1"
                                            data-src="http://api.soundcloud.com/tracks/269944843/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media item-media-4by3">
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

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="widget-title h4 m-b">New</h2>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-3">
                                        <div class="item r" data-id="item-6"
                                            data-src="http://api.soundcloud.com/tracks/236107824/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="track.detail.html" class="item-media-content"
                                                    style="background-image: url('images/b5.jpg');"></a>
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
                                                    <a href="track.detail.html">Body on me</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis ">
                                                    <a href="artist.detail.html" class="text-muted">Rita Ora</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-3">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-3">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-3">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-3">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-3">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-3">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-3">
                                        <div class="item r" data-id="item-5"
                                            data-src="http://streaming.radionomy.com/JamendoLounge">
                                            <div class="item-media ">
                                                <a href="track.detail.html" class="item-media-content"
                                                    style="background-image: url('images/b4.jpg');"></a>
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
                                                    <a href="track.detail.html">Live Radio</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis ">
                                                    <a href="artist.detail.html" class="text-muted">Radionomy</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="widget-title h4 m-b">Recommand for you</h2>
                                <div class="row item-list item-list-md m-b">
                                    <div class="col-sm-6">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="item r" data-id="item-6"
                                            data-src="http://api.soundcloud.com/tracks/236107824/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="track.detail.html" class="item-media-content"
                                                    style="background-image: url('images/b5.jpg');"></a>
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
                                                    <a href="track.detail.html">Body on me</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis ">
                                                    <a href="artist.detail.html" class="text-muted">Rita Ora</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="item r" data-id="item-5"
                                            data-src="http://streaming.radionomy.com/JamendoLounge">
                                            <div class="item-media ">
                                                <a href="track.detail.html" class="item-media-content"
                                                    style="background-image: url('images/b4.jpg');"></a>
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
                                                    <a href="track.detail.html">Live Radio</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis ">
                                                    <a href="artist.detail.html" class="text-muted">Radionomy</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
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

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
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
        <div class="white dk pos-rlt">
            <div class="p-a-md">
                @include('Frontend.footer')
            </div>
        </div>
    </div>
    <!-- ############ SWITHCHER START-->

    <!-- ############ SWITHCHER END-->

    <!-- ############ SEARCH START -->

    <!-- ############ SEARCH END -->
    <!-- ############ SHARE START -->

    <!-- ############ SHARE END -->

    <!-- ############ LAYOUT END-->

    <!-- build:js scripts/app.min.js -->
    <!-- jQuery -->
    @include('Frontend.scripts')
    <!-- endbuild -->
</body>

</html>
