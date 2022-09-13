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
            <div class="page-content">
                <div class="row-col">
                    <div class="col-lg-9 b-r no-border-md">
                        <div class="padding">
                            <div class="row m-b">
                                <div class="col-xs-4 col-sm-4 col-md-3">
                                    <div class="item r" data-id="item-2"
                                        data-src="http://api.soundcloud.com/tracks/259445397/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media ">
                                            <a href="{{ 'track/detail' }}" class="item-media-content"
                                                style="background-image: url('images/b1.jpg');"></a>
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
                                                <a href="{{ 'track/detail' }}">Fireworks</a>
                                            </div>
                                            <div class="item-author text-sm text-ellipsis hide">
                                                <a href="artist.detail.html" class="text-muted">Kygo</a>
                                            </div>
                                            <div class="item-meta text-sm text-muted">
                                                <span class="item-meta-stats text-xs ">
                                                    <i class="fa fa-play text-muted"></i> 30
                                                    <i class="fa fa-heart m-l-sm text-muted"></i> 10
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3">
                                    <div class="item r" data-id="item-10"
                                        data-src="http://api.soundcloud.com/tracks/237514750/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media ">
                                            <a href="{{ 'track/detail' }}" class="item-media-content"
                                                style="background-image: url('images/b9.jpg');"></a>
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
                                                <a href="{{ 'track/detail' }}">The Open Road</a>
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
                                <div class="col-xs-4 col-sm-4 col-md-3">
                                    <div class="item r" data-id="item-1"
                                        data-src="http://api.soundcloud.com/tracks/269944843/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media ">
                                            <a href="{{ 'track/detail' }}" class="item-media-content"
                                                style="background-image: url('images/b0.jpg');"></a>
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
                                                <a href="{{ 'track/detail' }}">Pull Up</a>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 w-xxl w-auto-md">
                        @include('Frontend.sidebar')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('Frontend.scripts')

</html>
