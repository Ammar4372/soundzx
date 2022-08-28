<div class="navbar" data-pjax>
    <a data-toggle="collapse" data-target="#navbar" class="navbar-item pull-right hidden-md-up m-r-0 m-l">
        <i class="material-icons">menu</i>
    </a>
    <!-- brand -->
    <a href="index.html" class="navbar-brand md">
        @include('Frontend.brand')
    </a>
    <!-- / brand -->

    <!-- nabar right -->
    <ul class="nav navbar-nav pull-right">
        <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#search-modal">
                <i class="material-icons">search</i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <span class="hidden-xs-down btn btn-sm rounded primary _600">
                    Upload
                </span>
                <span class="hidden-sm-up btn btn-sm btn-icon rounded primary">
                    <i class="material-icons">file_upload</i>
                </span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link clear" data-toggle="dropdown">
                <span class="avatar w-32">
                    <img src="{{asset('images/a3.jpg')}}" alt="...">
                </span>
            </a>
            <div class="dropdown-menu w dropdown-menu-scale pull-right">
                <a class="dropdown-item" href="profile.html#profile">
                    <span>Profile</span>
                </a>
                <a class="dropdown-item" href="profile.html#tracks">
                    <span>Tracks</span>
                </a>
                <a class="dropdown-item" href="profile.html#playlists">
                    <span>Playlists</span>
                </a>
                <a class="dropdown-item" href="profile.html#likes">
                    <span>Likes</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="docs.html">
                    Need help?
                </a>
                <a class="dropdown-item" href="signin.html">Sign out</a>
            </div>
        </li>
    </ul>
    <!-- / navbar right -->

    <!-- navbar collapse -->
    <div class="collapse navbar-toggleable-sm l-h-0 text-center" id="navbar">
        <!-- link and dropdown -->
        <ul class="nav navbar-nav nav-md inline text-primary-hover" data-ui-nav>
            <li class="nav-item">
                <a href="{{url('home')}}" class="nav-link">
                    <span class="nav-text">Discover</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('browse')}}" class="nav-link">
                    <span class="nav-text">Browse</span>
                </a>
            </li>
            <li class="nav-item dropdown pos-stc">
                <a href="{{url('charts')}}" class="nav-link">
                    <span class="nav-text">Charts</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('artist')}}" class="nav-link">
                    <span class="nav-text">Artists</span>
                </a>
            </li>
        </ul>
        <!-- / link and dropdown -->
    </div>
    <!-- / navbar collapse -->
</div>
