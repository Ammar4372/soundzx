<body>
    <div class="app dk" id="app">

        <!-- ############ LAYOUT START-->

        <!-- content -->
        <div id="content" class="app-content" role="main">
            <div class="app-header navbar-md black box-shadow-z1">
                <div class="navbar" data-pjax>
                    <a data-toggle="collapse" data-target="#navbar" class="navbar-item pull-right hidden-md-up m-r-0 m-l">
                        <i class="material-icons">menu</i>
                    </a>
                    <!-- brand -->
                    @include('Frontend/brand')
                    <!-- / brand -->

                    <!-- nabar right -->
                    <ul class="nav navbar-nav pull-right">
                        <li class="nav-item">
                            <a href="{{ url('signup') }}" class="nav-link">
                                Signup
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('signin')}}" class="nav-link">
                                <span class="btn btn-sm rounded primary _600">
                                    Signin
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- / navbar right -->

                    <!-- navbar collapse -->
                    <div class="collapse navbar-toggleable-sm l-h-0 text-center" id="navbar">
                        <!-- link and dropdown -->
                        <ul class="nav navbar-nav nav-md inline text-primary-hover">
                            <li class="nav-item">
                                <a href="home.html" class="nav-link">
                                    <span class="nav-text">Site</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="player.html" class="nav-link">
                                    <span class="nav-text">Web App</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="rtl.html" class="nav-link">
                                    <span class="nav-text">Rtl</span>
                                </a>
                            </li>
                        </ul>
                        <!-- / link and dropdown -->
                    </div>
                    <!-- / navbar collapse -->
                </div>
            </div>
