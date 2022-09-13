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
                <div class="page-bg" data-stellar-ratio="2" style="background-image: url('images/a3.jpg');"></div>
                <div class="page-content">
                    <div class="padding b-b">
                        <div class="row-col">
                            <div class="col-sm w w-auto-xs m-b">
                                <div class="item w rounded">
                                    <div class="item-media">
                                        <div class="item-media-content" style="background-image: url('images/a3.jpg');">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="p-l-md no-padding-xs">
                                    <h1 class="page-title">
                                        <span class="h1 _800">Rachel Platten</span>
                                    </h1>
                                    <p class="item-desc text-ellipsis text-muted" data-ui-toggle-class="text-ellipsis">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quamquam tu hanc
                                        copiosiorem etiam soles dicere. Nihil illinc huc pervenit. Verum hoc idem saepe
                                        faciamus. Quid ad utilitatem tantae pecuniae? Utram tandem linguam nescio? Sed
                                        hoc sane concedamus.
                                    </p>
                                    <div class="item-action m-b">
                                        <a href="#" class="btn btn-sm rounded primary">Upload</a>
                                        <a href="#" class="btn btn-sm rounded white">Edit Profile</a>
                                    </div>
                                    <div class="block clearfix m-b">
                                        <span>9</span>
                                        <span class="text-muted">Albums</span>,
                                        <span>23</span>
                                        <span class="text-muted">Tracks</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-col">
                        <div class="col-lg-9 b-r no-border-md">
                            <div class="padding p-y-0 m-b-md">
                                <div class="nav-active-border b-primary bottom m-b-md m-t">
                                    <ul class="nav l-h-2x" data-ui-jp="taburl">
                                        <li class="nav-item m-r inline">
                                            <a class="nav-link active" href="#" data-toggle="tab" data-target="#track">Tracks</a>
                                        </li>
                                        <li class="nav-item m-r inline">
                                            <a class="nav-link" href="#" data-toggle="tab" data-target="#playlist">Playlists</a>
                                        </li>
                                        <li class="nav-item m-r inline">
                                            <a class="nav-link" href="#" data-toggle="tab" data-target="#like">Likes</a>
                                        </li>
                                        <li class="nav-item m-r inline">
                                            <a class="nav-link" href="#" data-toggle="tab" data-target="#profile">Profile</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="track">
                                        <div class="row item-list item-list-by m-b">
                                            <div class="col-xs-12">
                                                <div class="item r" data-id="item-10" data-src="http://api.soundcloud.com/tracks/237514750/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media ">
                                                        <a href="{{ url('track/detail') }}" class="item-media-content" style="background-image: url('images/b9.jpg');"></a>
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
                                                            <a href="artist.detail.html"
                                                                class="text-muted">Postiljonen</a>
                                                        </div>
                                                        <div class="item-meta text-sm text-muted">
                                                            <span class="item-meta-category">
                                                                <a href="{{ url('browse') }}"
                                                                    class="label">Soul</a></span>
                                                            <span class="item-meta-date text-xs">02.04.2016</span>
                                                        </div>

                                                        <div
                                                            class="item-except visible-list text-sm text-muted h-2x m-t-sm">
                                                            Litatem tantae pecuniae? Utram tandem linguam nescio? Sed
                                                            hoc sane concedamus.
                                                        </div>

                                                        <div class="item-action visible-list m-t-sm">
                                                            <a href="#" class="btn btn-xs white">Edit</a>
                                                            <a href="#" class="btn btn-xs white"
                                                                data-toggle="modal"
                                                                data-target="#delete-modal">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="item r" data-id="item-9" data-src="http://api.soundcloud.com/tracks/264094434/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media ">
                                                        <a href="{{ url('track/detail') }}" class="item-media-content" style="background-image: url('images/b8.jpg');"></a>
                                                        <div class="item-overlay center">
                                                            <button class="btn-playpause">Play</button>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-overlay bottom text-right">
                                                            <a href="#" class="btn-favorite">
                                                                <i class="fa fa-heart-o"></i>
                                                            </a>
                                                            <a href="#" class="btn-more"
                                                                data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-h"></i>
                                                            </a>
                                                            <div class="dropdown-menu pull-right black lt"></div>
                                                        </div>
                                                        <div class="item-title text-ellipsis">
                                                            <a href="{{ url('track/detail') }}">All I Need</a>
                                                        </div>
                                                        <div class="item-author text-sm text-ellipsis hide">
                                                            <a href="artist.detail.html" class="text-muted">Pablo
                                                                Nouvelle</a>
                                                        </div>
                                                        <div class="item-meta text-sm text-muted">
                                                            <span class="item-meta-category">
                                                                <a href="{{ url('browse') }}" class="label">Jazz</a>
                                                            </span>
                                                            <span class="item-meta-date text-xs">02.04.2016</span>
                                                        </div>

                                                        <div
                                                            class="item-except visible-list text-sm text-muted h-2x m-t-sm">
                                                            Tandem linguam nescio? Sed hoc sane concedamus.
                                                        </div>

                                                        <div class="item-action visible-list m-t-sm">
                                                            <a href="#" class="btn btn-xs white">Edit</a>
                                                            <a href="#" class="btn btn-xs white"
                                                                data-toggle="modal"
                                                                data-target="#delete-modal">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="item r" data-id="item-4" data-src="http://api.soundcloud.com/tracks/230791292/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media ">
                                                        <a href="{{ url('track/detail') }}" class="item-media-content" style="background-image: url('images/b3.jpg');"></a>
                                                        <div class="item-overlay center">
                                                            <button class="btn-playpause">Play</button>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-overlay bottom text-right">
                                                            <a href="#" class="btn-favorite">
                                                                <i class="fa fa-heart-o"></i>
                                                            </a>
                                                            <a href="#" class="btn-more"
                                                                data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-h"></i>
                                                            </a>
                                                            <div class="dropdown-menu pull-right black lt"></div>
                                                        </div>
                                                        <div class="item-title text-ellipsis">
                                                            <a href="{{ url('track/detail') }}">What A Time To Be
                                                                Alive</a>
                                                        </div>
                                                        <div class="item-author text-sm text-ellipsis hide">
                                                            <a href="artist.detail.html" class="text-muted">Judith
                                                                Garcia</a>
                                                        </div>
                                                        <div class="item-meta text-sm text-muted">
                                                            <span class="item-meta-category">
                                                                <a href="{{ url('browse') }}"
                                                                    class="label">Electro</a>
                                                            </span>
                                                            <span class="item-meta-date text-xs">04.05.2016</span>
                                                        </div>
                                                        <div
                                                            class="item-except visible-list text-sm text-muted h-2x m-t-sm">
                                                            Verum hoc idem saepe faciamus inguam nescio? Sed hoc sane
                                                            concedamus.
                                                        </div>
                                                        <div class="item-action visible-list m-t-sm">
                                                            <a href="#" class="btn btn-xs white">Edit</a>
                                                            <a href="#" class="btn btn-xs white"
                                                                data-toggle="modal"
                                                                data-target="#delete-modal">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="item r" data-id="item-2"data-src="http://api.soundcloud.com/tracks/259445397/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media ">
                                                        <a href="{{ url('track/detail') }}" class="item-media-content" style="background-image: url('images/b1.jpg');"></a>
                                                        <div class="item-overlay center">
                                                            <button class="btn-playpause">Play</button>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-overlay bottom text-right">
                                                            <a href="#" class="btn-favorite">
                                                                <i class="fa fa-heart-o"></i>
                                                            </a>
                                                            <a href="#" class="btn-more"
                                                                data-toggle="dropdown">
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
                                                            <span class="item-meta-category">
                                                                <a href="{{ url('browse') }}"
                                                                    class="label">Jazz</a></span>
                                                            <span class="item-meta-date text-xs">02.05.2016</span>
                                                        </div>
                                                        <div
                                                            class="item-except visible-list text-sm text-muted h-2x m-t-sm">
                                                            Hidem saepe faciamus. Quid ad utilitatem tantae pecuniae?
                                                            Utram tandem linguam nescio? Sed hoc sane concedamus.
                                                        </div>

                                                        <div class="item-action visible-list m-t-sm">
                                                            <a href="#" class="btn btn-xs white">Edit</a>
                                                            <a href="#" class="btn btn-xs white"
                                                                data-toggle="modal"
                                                                data-target="#delete-modal">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="item r" data-id="item-12" data-src="http://api.soundcloud.com/tracks/174495152/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media ">
                                                        <a href="{{ url('track/detail') }}" class="item-media-content" style="background-image: url('images/b11.jpg');"></a>
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
                                                            <span class="item-meta-category">
                                                                <a href="{{ url('browse') }}" class="label">Latin</a>
                                                            </span>
                                                            <span class="item-meta-date text-xs">09.06.2016</span>
                                                        </div>
                                                        <div
                                                            class="item-except visible-list text-sm text-muted h-2x m-t-sm">
                                                            Utilitatem tantae pecuniae? Utram tandem linguam nescio? Sed
                                                            hoc sane concedamus.
                                                        </div>
                                                        <div class="item-action visible-list m-t-sm">
                                                            <a href="#" class="btn btn-xs white">Edit</a>
                                                            <a href="#" class="btn btn-xs white"
                                                                data-toggle="modal"
                                                                data-target="#delete-modal">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="item r" data-id="item-6" data-src="http://api.soundcloud.com/tracks/236107824/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media ">
                                                        <a href="{{ url('track/detail') }}"
                                                            class="item-media-content"
                                                            style="background-image: url('images/b5.jpg');"></a>
                                                        <div class="item-overlay center">
                                                            <button class="btn-playpause">Play</button>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-overlay bottom text-right">
                                                            <a href="#" class="btn-favorite">
                                                                <i class="fa fa-heart-o"></i>
                                                            </a>
                                                            <a href="#" class="btn-more"
                                                                data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-h"></i>
                                                            </a>
                                                            <div class="dropdown-menu pull-right black lt"></div>
                                                        </div>
                                                        <div class="item-title text-ellipsis">
                                                            <a href="{{ url('track/detail') }}">Body on me</a>
                                                        </div>
                                                        <div class="item-author text-sm text-ellipsis hide">
                                                            <a href="artist.detail.html" class="text-muted">Rita
                                                                Ora</a>
                                                        </div>
                                                        <div class="item-meta text-sm text-muted">
                                                            <span class="item-meta-category">
                                                                <a href="{{ 'browse' }}"
                                                                    class="label">Nature</a>
                                                            </span>
                                                            <span class="item-meta-date text-xs">09.04.2016</span>
                                                        </div>
                                                        <div
                                                            class="item-except visible-list text-sm text-muted h-2x m-t-sm">
                                                            Tantae pecuniae? Utram tandem linguam nescio? Sed hoc sane
                                                            concedamus.
                                                        </div>
                                                        <div class="item-action visible-list m-t-sm">
                                                            <a href="#" class="btn btn-xs white">Edit</a>
                                                            <a href="#" class="btn btn-xs white"
                                                                data-toggle="modal"
                                                                data-target="#delete-modal">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="item r" data-id="item-11" data-src="http://api.soundcloud.com/tracks/218060449/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media ">
                                                        <a href="{{ 'track/detail' }}" class="item-media-content"
                                                            style="background-image: url('images/b10.jpg');"></a>
                                                        <div class="item-overlay center">
                                                            <button class="btn-playpause">Play</button>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-overlay bottom text-right">
                                                            <a href="#" class="btn-favorite">
                                                                <i class="fa fa-heart-o"></i>
                                                            </a>
                                                            <a href="#" class="btn-more"
                                                                data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-h"></i>
                                                            </a>
                                                            <div class="dropdown-menu pull-right black lt"></div>
                                                        </div>
                                                        <div class="item-title text-ellipsis">
                                                            <a href="{{ 'track/detail' }}">Spring</a>
                                                        </div>
                                                        <div class="item-author text-sm text-ellipsis hide">
                                                            <a href="artist.detail.html" class="text-muted">Pablo
                                                                Nouvelle
                                                            </a>
                                                        </div>
                                                        <div class="item-meta text-sm text-muted">
                                                            <span class="item-meta-category">
                                                                <a href="{{ url('browse') }}" class="label">Indie</a>
                                                            </span>
                                                            <span class="item-meta-date text-xs">09.03.2016</span>
                                                        </div>
                                                        <div
                                                            class="item-except visible-list text-sm text-muted h-2x m-t-sm">
                                                            Saepe faciamus. Quid ad utilitatem tantae pecuniae? Utram
                                                            tandem linguam nescio? Sed hoc sane concedamus.
                                                        </div>
                                                        <div class="item-action visible-list m-t-sm">
                                                            <a href="#" class="btn btn-xs white">Edit</a>
                                                            <a href="#" class="btn btn-xs white"
                                                                data-toggle="modal"
                                                                data-target="#delete-modal">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="item r" data-id="item-3" data-src="http://api.soundcloud.com/tracks/79031167/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media ">
                                                        <a href="{{('track/detail')}}" class="item-media-content"
                                                            style="background-image: url('images/b2.jpg');"></a>
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
                                                            <a href="{{('track/detail')}}">I Wanna Be In the Cavalry</a>
                                                        </div>
                                                        <div class="item-author text-sm text-ellipsis hide">
                                                            <a href="artist.detail.html" class="text-muted">Jeremy Scott</a>
                                                        </div>
                                                        <div class="item-meta text-sm text-muted">
                                                            <span class="item-meta-category">
                                                                <a href="{{url('browse')}}" class="label">DJ</a>
                                                            </span>
                                                            <span class="item-meta-date text-xs">09.04.2016</span>
                                                        </div>
                                                        <div
                                                            class="item-except visible-list text-sm text-muted h-2x m-t-sm">
                                                            Tantae pecuniae? Utram tandem linguam nescio? Sed hoc sane
                                                            concedamus.
                                                        </div>
                                                        <div class="item-action visible-list m-t-sm">
                                                            <a href="#" class="btn btn-xs white">Edit</a>
                                                            <a href="#" class="btn btn-xs white"
                                                                data-toggle="modal"
                                                                data-target="#delete-modal">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="item r" data-id="item-5" data-src="http://streaming.radionomy.com/JamendoLounge">
                                                    <div class="item-media ">
                                                        <a href="{{('track/detail')}}" class="item-media-content" style="background-image: url('images/b4.jpg');"></a>
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
                                                            <a href="{{('track/detail')}}">Live Radio</a>
                                                        </div>
                                                        <div class="item-author text-sm text-ellipsis hide">
                                                            <a href="artist.detail.html" class="text-muted">Radionomy</a>
                                                        </div>
                                                        <div class="item-meta text-sm text-muted">
                                                            <span class="item-meta-category">
                                                                <a href="{{url('browse')}}" class="label">Electro</a></span>
                                                            <span class="item-meta-date text-xs">09.05.2016</span>
                                                        </div>
                                                        <div
                                                            class="item-except visible-list text-sm text-muted h-2x m-t-sm">
                                                            Verum hoc idem saepe faciamus. Quid ad utilitatem tantae
                                                            pecuniae? Utram tandem linguam nescio? Sed hoc sane
                                                            concedamus.
                                                        </div>
                                                        <div class="item-action visible-list m-t-sm">
                                                            <a href="#" class="btn btn-xs white">Edit</a>
                                                            <a href="#" class="btn btn-xs white"
                                                                data-toggle="modal"
                                                                data-target="#delete-modal">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="item r" data-id="item-8" data-src="http://api.soundcloud.com/tracks/236288744/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media ">
                                                        <a href="{{('track/detail')}}" class="item-media-content"
                                                            style="background-image: url('images/b7.jpg');"></a>
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
                                                            <a href="{{('track/detail')}}">Simple Place To Be</a>
                                                        </div>
                                                        <div class="item-author text-sm text-ellipsis hide">
                                                            <a href="artist.detail.html" class="text-muted">RYD</a>
                                                        </div>
                                                        <div class="item-meta text-sm text-muted">
                                                            <span class="item-meta-category">
                                                                <a href="{{url('browse')}}" class="label">Radio</a>
                                                            </span>
                                                            <span class="item-meta-date text-xs">09.04.2016</span>
                                                        </div>

                                                        <div
                                                            class="item-except visible-list text-sm text-muted h-2x m-t-sm">
                                                            Ad utilitatem tantae pecuniae? Utram tandem linguam nescio?
                                                            Sed hoc sane concedamus.
                                                        </div>

                                                        <div class="item-action visible-list m-t-sm">
                                                            <a href="#" class="btn btn-xs white">Edit</a>
                                                            <a href="#" class="btn btn-xs white"
                                                                data-toggle="modal"
                                                                data-target="#delete-modal">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="item r" data-id="item-7" data-src="http://api.soundcloud.com/tracks/245566366/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media ">
                                                        <a href="{{('track/detail')}}" class="item-media-content"
                                                            style="background-image: url('images/b6.jpg');"></a>
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
                                                            <a href="{{('track/detail')}}">Reflection (Deluxe)</a>
                                                        </div>
                                                        <div class="item-author text-sm text-ellipsis hide">
                                                            <a href="artist.detail.html" class="text-muted">Fifth Harmony</a>
                                                        </div>
                                                        <div class="item-meta text-sm text-muted">
                                                            <span class="item-meta-category">
                                                                <a href="{{url('browse')}}" class="label">Pop</a></span>
                                                            <span class="item-meta-date text-xs">05.05.2016</span>
                                                        </div>

                                                        <div
                                                            class="item-except visible-list text-sm text-muted h-2x m-t-sm">
                                                            Quid ad utilitatem tantae pecuniae? Utram tandem linguam
                                                            nescio? Sed hoc sane concedamus.
                                                        </div>

                                                        <div class="item-action visible-list m-t-sm">
                                                            <a href="#" class="btn btn-xs white">Edit</a>
                                                            <a href="#" class="btn btn-xs white"
                                                                data-toggle="modal"
                                                                data-target="#delete-modal">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="item r" data-id="item-1" data-src="http://api.soundcloud.com/tracks/269944843/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media ">
                                                        <a href="{{('track/detail')}}" class="item-media-content" style="background-image: url('images/b0.jpg');"></a>
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
                                                            <a href="{{('track/detail')}}">Pull Up</a>
                                                        </div>
                                                        <div class="item-author text-sm text-ellipsis hide">
                                                            <a href="artist.detail.html" class="text-muted">Summerella</a>
                                                        </div>
                                                        <div class="item-meta text-sm text-muted">
                                                            <span class="item-meta-category">
                                                                <a href="{{url('browse')}}" class="label">Blue</a></span>
                                                            <span class="item-meta-date text-xs">30.05.2016</span>
                                                        </div>

                                                        <div
                                                            class="item-except visible-list text-sm text-muted h-2x m-t-sm">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Quamquam tu hanc copiosiorem etiam soles dicere. Nihil
                                                            illinc huc pervenit.
                                                        </div>

                                                        <div class="item-action visible-list m-t-sm">
                                                            <a href="#" class="btn btn-xs white">Edit</a>
                                                            <a href="#" class="btn btn-xs white"
                                                                data-toggle="modal"
                                                                data-target="#delete-modal">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-sm white rounded">Show More</a>
                                    </div>
                                    <div class="tab-pane" id="playlist">
                                        <div class="row m-b">
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                                <div class="item r" data-id="item-2" data-src="http://api.soundcloud.com/tracks/259445397/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media ">
                                                        <a href="{{('track/detail')}}" class="item-media-content" style="background-image: url('images/b1.jpg');"></a>
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
                                                            <a href="{{('track/detail')}}">Fireworks</a>
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
                                                <div class="item r" data-id="item-10" data-src="http://api.soundcloud.com/tracks/237514750/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media ">
                                                        <a href="{{('track/detail')}}" class="item-media-content" style="background-image: url('images/b9.jpg');"></a>
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
                                                            <a href="{{('track/detail')}}">The Open Road</a>
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
                                                <div class="item r" data-id="item-1" data-src="http://api.soundcloud.com/tracks/269944843/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media ">
                                                        <a href="{{('track/detail')}}" class="item-media-content" style="background-image: url('images/b0.jpg');"></a>
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
                                                            <a href="{{('track/detail')}}">Pull Up</a>
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
                                    <div class="tab-pane" id="like">
                                        <div class="row m-b">
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                                <div class="item r" data-id="item-10" data-src="http://api.soundcloud.com/tracks/237514750/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media ">
                                                        <a href="{{('track/detail')}}" class="item-media-content" style="background-image: url('images/b9.jpg');"></a>
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
                                                            <a href="{{('track/detail')}}">The Open Road</a>
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
                                                <div class="item r" data-id="item-11" data-src="http://api.soundcloud.com/tracks/218060449/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media ">
                                                        <a href="{{('track/detail')}}" class="item-media-content" style="background-image: url('images/b10.jpg');"></a>
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
                                                            <a href="{{('track/detail')}}">Spring</a>
                                                        </div>
                                                        <div class="item-author text-sm text-ellipsis hide">
                                                            <a href="artist.detail.html" class="text-muted">Pablo Nouvelle</a>
                                                        </div>
                                                        <div class="item-meta text-sm text-muted">
                                                            <span class="item-meta-stats text-xs ">
                                                                <i class="fa fa-play text-muted"></i> 4500
                                                                <i class="fa fa-heart m-l-sm text-muted"></i> 2310
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="profile">
                                        <form>
                                            <div class="form-group row">
                                                <div class="col-sm-3 form-control-label text-muted">Location</div>
                                                <div class="col-sm-9"><input value="Earth" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 form-control-label text-muted">Website</div>
                                                <div class="col-sm-9">
                                                    <input placeholder="http://" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 form-control-label text-muted">Music Type</div>
                                                <div class="col-sm-9">
                                                    <select class="form-control c-select">
                                                        <option>Blue</option>
                                                        <option>Electro</option>
                                                        <option>Pop</option>
                                                        <option>Soul</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 w-xxl w-auto-md">
                            @include('Frontend.sidebar')
                        </div>
                    </div>
                </div>

                <!-- .modal -->
                <div id="delete-modal" class="modal fade animate black-overlay" data-backdrop="false">
                    <div class="row-col h-v">
                        <div class="row-cell v-m">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content flip-y">
                                    <div class="modal-body text-center">
                                        <p class="p-y m-t"><i class="fa fa-remove text-warning fa-3x"></i></p>
                                        <p>Are you sure to delete this item?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default p-x-md"
                                            data-dismiss="modal">No</button>
                                        <button type="button" class="btn red p-x-md"
                                            data-dismiss="modal">Yes</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / .modal -->

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
