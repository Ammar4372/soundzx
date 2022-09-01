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

                <div class="page-content">
                    <div class="row-col">
                        <div class="col-lg-9 b-r no-border-md">
                            <div class="padding">

                                <div class="page-title m-b">
                                    <h1 class="inline m-a-0">Artists</h1>
                                    <div class="dropdown inline">
                                        <button class="btn btn-sm no-bg h4 m-y-0 v-b dropdown-toggle text-primary"
                                            data-toggle="dropdown">By name</button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item active">
                                                By name
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                Songs
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-ui-jp="jscroll"
                                    data-ui-options="{ autoTrigger: false, loadingHtml: '<i class=\'fa fa-refresh fa-spin text-md text-muted\'></i>', padding: 50, nextSelector: 'a.jscroll-next:last' }">
                                    <div class="row row-lg">
                                        <div class="col-xs-4 col-sm-4 col-md-3">
                                            <div class="item">
                                                <div class="item-media rounded ">
                                                    <a href="artist.detail.html" class="item-media-content"
                                                        style="background-image: url('images/a4.jpg');"></a>
                                                </div>
                                                <div class="item-info text-center">
                                                    <div class="item-title text-ellipsis">
                                                        <a href="artist.detail.html">Judith Garcia</a>
                                                        <div class="text-sm text-muted">13 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-3">
                                            <div class="item">
                                                <div class="item-media rounded ">
                                                    <a href="artist.detail.html" class="item-media-content"
                                                        style="background-image: url('images/a3.jpg');"></a>
                                                </div>
                                                <div class="item-info text-center">
                                                    <div class="item-title text-ellipsis">
                                                        <a href="artist.detail.html">Joe Holmes</a>
                                                        <div class="text-sm text-muted">24 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-3">
                                            <div class="item">
                                                <div class="item-media rounded ">
                                                    <a href="artist.detail.html" class="item-media-content"
                                                        style="background-image: url('images/a1.jpg');"></a>
                                                </div>
                                                <div class="item-info text-center">
                                                    <div class="item-title text-ellipsis">
                                                        <a href="artist.detail.html">James Garcia</a>
                                                        <div class="text-sm text-muted">9 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-3">
                                            <div class="item">
                                                <div class="item-media rounded ">
                                                    <a href="artist.detail.html" class="item-media-content"
                                                        style="background-image: url('images/a6.jpg');"></a>
                                                </div>
                                                <div class="item-info text-center">
                                                    <div class="item-title text-ellipsis">
                                                        <a href="artist.detail.html">OlsJesse Russell</a>
                                                        <div class="text-sm text-muted">23 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-3">
                                            <div class="item">
                                                <div class="item-media rounded ">
                                                    <a href="artist.detail.html" class="item-media-content"
                                                        style="background-image: url('images/a0.jpg');"></a>
                                                </div>
                                                <div class="item-info text-center">
                                                    <div class="item-title text-ellipsis">
                                                        <a href="artist.detail.html">Crystal Guerrero</a>
                                                        <div class="text-sm text-muted">12 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-3">
                                            <div class="item">
                                                <div class="item-media rounded ">
                                                    <a href="artist.detail.html" class="item-media-content"
                                                        style="background-image: url('images/a8.jpg');"></a>
                                                </div>
                                                <div class="item-info text-center">
                                                    <div class="item-title text-ellipsis">
                                                        <a href="artist.detail.html">Sara King</a>
                                                        <div class="text-sm text-muted">14 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-3">
                                            <div class="item">
                                                <div class="item-media rounded ">
                                                    <a href="artist.detail.html" class="item-media-content"
                                                        style="background-image: url('images/a2.jpg');"></a>
                                                </div>
                                                <div class="item-info text-center">
                                                    <div class="item-title text-ellipsis">
                                                        <a href="artist.detail.html">Jean Schneider</a>
                                                        <div class="text-sm text-muted">8 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-3">
                                            <div class="item">
                                                <div class="item-media rounded ">
                                                    <a href="artist.detail.html" class="item-media-content"
                                                        style="background-image: url('images/b0.jpg');"></a>
                                                </div>
                                                <div class="item-info text-center">
                                                    <div class="item-title text-ellipsis">
                                                        <a href="artist.detail.html">Jeremy Scott</a>
                                                        <div class="text-sm text-muted">14 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-3">
                                            <div class="item">
                                                <div class="item-media rounded ">
                                                    <a href="artist.detail.html" class="item-media-content"
                                                        style="background-image: url('images/b1.jpg');"></a>
                                                </div>
                                                <div class="item-info text-center">
                                                    <div class="item-title text-ellipsis">
                                                        <a href="artist.detail.html">Melissa Garza</a>
                                                        <div class="text-sm text-muted">20 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-3">
                                            <div class="item">
                                                <div class="item-media rounded ">
                                                    <a href="artist.detail.html" class="item-media-content"
                                                        style="background-image: url('images/a9.jpg');"></a>
                                                </div>
                                                <div class="item-info text-center">
                                                    <div class="item-title text-ellipsis">
                                                        <a href="artist.detail.html">Douglas Torres</a>
                                                        <div class="text-sm text-muted">20 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-3">
                                            <div class="item">
                                                <div class="item-media rounded ">
                                                    <a href="artist.detail.html" class="item-media-content"
                                                        style="background-image: url('images/a5.jpg');"></a>
                                                </div>
                                                <div class="item-info text-center">
                                                    <div class="item-title text-ellipsis">
                                                        <a href="artist.detail.html">Judy Woods</a>
                                                        <div class="text-sm text-muted">23 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-3">
                                            <div class="item">
                                                <div class="item-media rounded ">
                                                    <a href="artist.detail.html" class="item-media-content"
                                                        style="background-image: url('images/a7.jpg');"></a>
                                                </div>
                                                <div class="item-info text-center">
                                                    <div class="item-title text-ellipsis">
                                                        <a href="artist.detail.html">Richard Carr</a>
                                                        <div class="text-sm text-muted">6 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="scroll.author.html" class="btn btn-sm white rounded jscroll-next">Show More</a>
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
