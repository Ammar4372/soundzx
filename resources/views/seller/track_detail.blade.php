@include('Frontend.header')

<body>
    <div class="app dk" id="app">

        <!-- ############ LAYOUT START-->

        <!-- aside -->
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
                <div class="pos-rlt">
                    <div class="page-bg" data-stellar-ratio="2"
                        style="background-image: url('{{ asset('images/b0.jpg') }}');">
                    </div>
                </div>
                <div class="page-content">
                    <div class="padding b-b">
                        <div class="row-col">
                            <div class="col-sm w w-auto-xs m-b">
                                <div class="item w r">
                                    <div class="item-media">
                                        <div class="item-media-content"
                                            style="background-image: url('{{ asset('images/b0.jpg') }}');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="p-l-md no-padding-xs">
                                    <div class="page-title">
                                        <h1 class="inline">Simple Place To Be</h1>
                                    </div>
                                    <p class="item-desc text-ellipsis text-muted" data-ui-toggle-class="text-ellipsis">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Quamquam tu hanc copiosiorem etiam soles dicere. Nihil illinc
                                        huc pervenit. Verum hoc idem saepe faciamus. Quid ad utilitatem tantae pecuniae?
                                        Utram tandem linguam nescio? Sed hoc sane concedamus.
                                    </p>
                                    <div class="item-action m-b">
                                        <a class="btn btn-icon white rounded btn-share pull-right" data-toggle="modal"
                                            data-target="#share-modal"><i class="fa fa-share-alt"></i></a>
                                        <button class="btn-playpause text-primary m-r-sm"></button>
                                        <span class="text-muted">2356</span>
                                        <a class="btn btn-icon rounded btn-favorite"><i class="fa fa-heart-o"></i></a>
                                        <span class="text-muted">232</span>
                                        <div class="inline dropdown m-l-xs">
                                            <a class="btn btn-icon rounded btn-more" data-toggle="dropdown"><i
                                                    class="fa fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu pull-right black lt"></div>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <a class="btn btn-xs rounded white">Pop</a> <a
                                            class="btn btn-xs rounded white">Happy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-col">
                        <div class="col-lg-9 b-r no-border-md">
                            <div class="padding">

                                <h6 class="m-b">
                                    <span class="text-muted">by</span>
                                    <a href="artist.detail.html" data-pjax class="item-author _600">Rachel Platten</a>
                                    <span class="text-muted text-sm">- 10 song, 50 min 32 sec</span>
                                </h6>
                                <div id="tracks" class="row item-list item-list-xs item-list-li m-b">
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-7"
                                            data-src="http://api.soundcloud.com/tracks/245566366/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="{{ url('track/detail') }}" class="item-media-content"
                                                    style="background-image: url('{{ asset('images/b6.jpg') }}');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="{{ url('track/detail') }}">Reflection (Deluxe)</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis hide">
                                                    <a href="artist.detail.html" class="text-muted">Fifth Harmony</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-right">5:05</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r"
                                            data-id="item-9"data-src="http://api.soundcloud.com/tracks/264094434/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="{{ asset('track/detail') }}" class="item-media-content"
                                                    style="background-image: url('{{ asset('images/b8.jpg') }}');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="{{ url('track/detail') }}">All I Need</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis hide">
                                                    <a href="artist.detail.html" class="text-muted">Pablo Nouvelle</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-right">3:10</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-6"
                                            data-src="http://api.soundcloud.com/tracks/236107824/streamclient_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="{{ url('track/detail') }}" class="item-media-content"
                                                    style="background-image: url('{{ asset('images/b5.jpg') }}');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="{{ url('track/detail') }}">Body on me</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis hide">
                                                    <a href="artist.detail.html" class="text-muted">Rita Ora</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-right">3:55</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-3"
                                            data-src="http://api.soundcloud.com/tracks/79031167/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="{{ url('track/detail') }}" class="item-media-content"
                                                    style="background-image: url('{{ asset('images/b2.jpg') }}');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="{{ url('track/detail') }}">I Wanna Be In the Cavalry</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis hide">
                                                    <a href="artist.detail.html" class="text-muted">Jeremy Scott</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-right">2:50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-1"
                                            data-src="http://api.soundcloud.com/tracks/269944843/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="{{ url('track/detail') }}" class="item-media-content"
                                                    style="background-image: url('{{ asset('images/b0.jpg') }}');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="{{ url('track/detail') }}">Pull Up</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis hide">
                                                    <a href="artist.detail.html" class="text-muted">Summerella</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-right">2:50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-5"
                                            data-src="http://streaming.radionomy.com/JamendoLounge">
                                            <div class="item-media ">
                                                <a href="{{ asset('track/detail') }}" class="item-media-content"
                                                    style="background-image: url('{{ asset('images/b4.jpg') }}');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="{{ url('track/detail') }}">Live Radio</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis hide">
                                                    <a href="artist.detail.html" class="text-muted">Radionomy</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-right">3:35</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-2"
                                            data-src="http://api.soundcloud.com/tracks/259445397/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="{{ url('track/detail') }}" class="item-media-content"
                                                    style="background-image: url('{{ asset('images/b1.jpg') }}');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="{{ url('track/detail') }}">Fireworks</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis hide">
                                                    <a href="artist.detail.html" class="text-muted">Kygo</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-right">4:25</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-8"
                                            data-src="http://api.soundcloud.com/tracks/236288744/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="{{ url('track/detail') }}" class="item-media-content"
                                                    style="background-image: url('{{ asset('images/b7.jpg') }}');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="{{ url('track/detail') }}">Simple Place To Be</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis hide">
                                                    <a href="artist.detail.html" class="text-muted">RYD</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-right">4:20</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-10"
                                            data-src="http://api.soundcloud.com/tracks/237514750/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="{{ url('track/detail') }}" class="item-media-content"
                                                    style="background-image: url('{{ asset('images/b9.jpg') }}');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="{{ url('track/detail') }}">The Open Road</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis hide">
                                                    <a href="artist.detail.html" class="text-muted">Postiljonen</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-right">5:20</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-12"
                                            data-src="http://api.soundcloud.com/tracks/174495152/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="{{ url('track/detail') }}" class="item-media-content"
                                                    style="background-image: url('{{ asset('images/b11.jpg') }}');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="{{ url('track/detail') }}">Happy ending</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis hide">
                                                    <a href="artist.detail.html" class="text-muted">Postiljonen</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-right">5:20</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="m-b">From Rachel</h5>
                                <div class="row m-b">
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="item r" data-id="item-12"
                                            data-src="http://api.soundcloud.com/tracks/174495152/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="{{ url('track/detail') }}" class="item-media-content"
                                                    style="background-image: url('{{ asset('images/b11.jpg') }}');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="{{ url('track/detail') }}">Happy ending</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis hide">
                                                    <a href="artist.detail.html" class="text-muted">Postiljonen</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-stats text-xs ">
                                                        <i class="fa fa-play text-muted"></i> 860
                                                        <i class="fa fa-heart m-l-sm text-muted"></i> 240
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="item r" data-id="item-5"
                                            data-src="http://streaming.radionomy.com/JamendoLounge">
                                            <div class="item-media ">
                                                <a href="{{ url('track/detail') }}" class="item-media-content"
                                                    style="background-image: url('{{ asset('images/b4.jpg') }}');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="{{ url('track/detail') }}">Live Radio</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis hide">
                                                    <a href="artist.detail.html" class="text-muted">Radionomy</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-stats text-xs ">
                                                        <i class="fa fa-play text-muted"></i> 3340
                                                        <i class="fa fa-heart m-l-sm text-muted"></i> 100
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="item r" data-id="item-1"
                                            data-src="http://api.soundcloud.com/tracks/269944843/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="{{ url('track/detail') }}" class="item-media-content"
                                                    style="background-image: url('{{ asset('images/b0.jpg') }}');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="{{ url('track/detail') }}">Pull Up</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis hide">
                                                    <a href="artist.detail.html" class="text-muted">Summerella</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-stats text-xs ">
                                                        <i class="fa fa-play text-muted"></i> 3200
                                                        <i class="fa fa-heart m-l-sm text-muted"></i> 210
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="item r" data-id="item-8"
                                            data-src="http://api.soundcloud.com/tracks/236288744/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media ">
                                                <a href="{{ url('track/detail') }}" class="item-media-content"
                                                    style="background-image: url('{{ asset('images/b7.jpg') }}');"></a>
                                                <div class="item-overlay center">
                                                    <button class="btn-playpause">Play</button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-overlay bottom text-right">
                                                    <a href="#" class="btn-favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" class="btn-more" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="dropdown-menu pull-right black lt"></div>
                                                </div>
                                                <div class="item-title text-ellipsis">
                                                    <a href="{{ url('track/detail') }}">Simple Place To Be</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis hide">
                                                    <a href="artist.detail.html" class="text-muted">RYD</a>
                                                </div>
                                                <div class="item-meta text-sm text-muted">
                                                    <span class="item-meta-stats text-xs ">
                                                        <i class="fa fa-play text-muted"></i> 400
                                                        <i class="fa fa-heart m-l-sm text-muted"></i> 220
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="m-b">Comments</h5>
                                <div class="streamline m-b m-l">
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <img src="{{ asset('images/a0.jpg') }}" alt="."
                                                class="img-circle">
                                        </div>
                                        <div class="sl-content">
                                            <div class="sl-author m-b-0">
                                                <a href="#">Peter Joo</a>
                                                <span class="sl-date text-muted">2 minutes ago</span>
                                            </div>
                                            <div>
                                                <p>Check your Internet connection</p>
                                            </div>
                                            <div class="sl-footer">
                                                <a href="#" data-toggle="collapse" data-target="#reply-1">
                                                    <i class="fa fa-fw fa-mail-reply text-muted"></i> Reply
                                                </a>
                                            </div>
                                            <div class="box collapse m-a-0 b-a" id="reply-1">
                                                <form>
                                                    <textarea class="form-control no-border" rows="3" placeholder="Type something..."></textarea>
                                                </form>
                                                <div class="box-footer clearfix">
                                                    <button class="btn btn-info pull-right btn-sm">Post</button>
                                                    <ul class="nav nav-pills nav-sm">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">
                                                                <i class="fa fa-camera text-muted"></i>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">
                                                                <i class="fa fa-video-camera text-muted"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <img src="{{ asset('images/a2.jpg') }}" alt="."
                                                class="img-circle">
                                        </div>
                                        <div class="sl-content">
                                            <div class="sl-author m-b-0">
                                                <a href="#">Moke</a>
                                                <span class="sl-date text-muted">8:30</span>
                                            </div>
                                            <div>
                                                <p>Call to customer <a href="#" class="text-primary">Jacob</a>
                                                    and discuss the detail.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <img src="{{ asset('images/a3.jpg') }}" alt="."
                                                class="img-circle">
                                        </div>
                                        <div class="sl-content">
                                            <div class="sl-author m-b-0">
                                                <a href="#">Moke</a>
                                                <span class="sl-date text-muted">Sat, 5 Mar</span>
                                            </div>
                                            <blockquote>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                    posuere erat a ante soe aiea ose dos soois.</p>
                                                <small>Someone famous in <cite title="Source Title">Source
                                                        Title</cite></small>
                                            </blockquote>

                                            <div class="sl-item">
                                                <div class="sl-left">
                                                    <img src="{{ asset('images/a2.jpg') }}" alt="."
                                                        class="img-circle">
                                                </div>
                                                <div class="sl-content">
                                                    <div class="sl-date text-muted">Sun, 11 Feb</div>
                                                    <p>
                                                        <a href="#" class="text-primary">Jessi</a> assign you a
                                                        task
                                                        <a href="#" class="text-primary">Mockup Design</a>.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="sl-item">
                                                <div class="sl-left">
                                                    <img src="{{ asset('images/a5.jpg') }}" alt="."
                                                        class="img-circle">
                                                </div>
                                                <div class="sl-content">
                                                    <div class="sl-date text-muted">Thu, 17 Jan</div>
                                                    <p>Follow up to close deal</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="m-t-lg m-b">Leave a comment</h5>
                                <form>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label>Your name</label>
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Comment</label>
                                        <textarea class="form-control" rows="5" placeholder="Type your comment"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm white rounded">Submit
                                            comment</button>
                                    </div>
                                </form>
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

        <!-- ############ SEARCH START -->
        @include('Frontend.search')
        <!-- ############ SEARCH END -->
        <!-- ############ SHARE START -->
        <div id="share-modal" class="modal fade animate">
            <div class="modal-dialog">
                <div class="modal-content fade-down">
                    <div class="modal-header">

                        <h5 class="modal-title">Share</h5>
                    </div>
                    <div class="modal-body p-lg">
                        <div id="share-list" class="m-b">
                            <a href="" class="btn btn-icon btn-social rounded btn-social-colored indigo"
                                title="Facebook">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="" class="btn btn-icon btn-social rounded btn-social-colored light-blue"
                                title="Twitter">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="" class="btn btn-icon btn-social rounded btn-social-colored red-600"
                                title="Google+">
                                <i class="fa fa-google-plus"></i>
                                <i class="fa fa-google-plus"></i>
                            </a>

                            <a href="" class="btn btn-icon btn-social rounded btn-social-colored blue-grey-600"
                                title="Trumblr">
                                <i class="fa fa-tumblr"></i>
                                <i class="fa fa-tumblr"></i>
                            </a>

                            <a href="" class="btn btn-icon btn-social rounded btn-social-colored red-700"
                                title="Pinterst">
                                <i class="fa fa-pinterest"></i>
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </div>
                        <div>
                            <input class="form-control" value="http://plamusic.com/slug" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ############ SHARE END -->
        <!-- ############ LAYOUT END-->
    </div>

    <!-- build:js scripts/app.min.js -->
    <!-- jQuery -->
    @include('Frontend.scripts')
    <!-- endbuild -->
</body>

</html>
