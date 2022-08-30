@section('indexNavbar')
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
                        <img src="{{ asset('images/a3.jpg') }}" alt="...">
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
                    <a class="dropdown-item" href="{{ 'logout' }}">Sign out</a>
                </div>
            </li>
        </ul>
        <!-- / navbar right -->

        <!-- navbar collapse -->
        <div class="collapse navbar-toggleable-sm l-h-0 text-center" id="navbar">
            <!-- link and dropdown -->
            <ul class="nav navbar-nav nav-md inline text-primary-hover" data-ui-nav>
                <li class="nav-item">
                    <a href="{{ url('home') }}" class="nav-link">
                        <span class="nav-text">Discover</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('browse') }}" class="nav-link">
                        <span class="nav-text">Browse</span>
                    </a>
                </li>
                <li class="nav-item dropdown pos-stc">
                    <a href="{{ url('charts') }}" class="nav-link">
                        <span class="nav-text">Charts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('artist') }}" class="nav-link">
                        <span class="nav-text">Artists</span>
                    </a>
                </li>
            </ul>
            <!-- / link and dropdown -->
        </div>
        <!-- / navbar collapse -->
    </div>
@endsection
@section('sideNavbar')
    <div id="aside" class="app-aside modal fade nav-dropdown">
        <div class="left navside grey dk" data-layout="column">
            <div class="navbar no-radius">
                <!-- brand -->
                @include('Frontend.brand')
                <!-- / brand -->
            </div>
            <div data-flex class="hide-scroll">
                <nav class="scroll nav-stacked nav-active-primary">

                    <ul class="nav" data-ui-nav>
                        <li class="nav-header hidden-folded">
                            <span class="text-xs text-muted">Main</span>
                        </li>
                        <li>
                            <a href="{{ url('player') }}">
                                <span class="nav-icon">
                                    <i class="material-icons">
                                        play_circle_outline
                                    </i>
                                </span>
                                <span class="nav-text">Discover</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('browse') }}">
                                <span class="nav-icon">
                                    <i class="material-icons">
                                        sort
                                    </i>
                                </span>
                                <span class="nav-text">Browse</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('charts') }}">
                                <span class="nav-icon">
                                    <i class="material-icons">
                                        trending_up
                                    </i>
                                </span>
                                <span class="nav-text">Charts</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('artist') }}">
                                <span class="nav-icon">
                                    <i class="material-icons">
                                        portrait
                                    </i>
                                </span>
                                <span class="nav-text">Artist</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="modal" data-target="#search-modal">
                                <span class="nav-icon">
                                    <i class="material-icons">
                                        search
                                    </i>
                                </span>
                                <span class="nav-text">Search</span>
                            </a>
                        </li>

                        <li class="nav-header hidden-folded m-t">
                            <span class="text-xs text-muted">Your collection</span>
                        </li>
                        <li>
                            <a href="profile.html#tracks">
                                <span class="nav-label">
                                    <b class="label">8</b>
                                </span>
                                <span class="nav-icon">
                                    <i class="material-icons">
                                        list
                                    </i>
                                </span>
                                <span class="nav-text">Tracks</span>
                            </a>
                        </li>
                        <li>
                            <a href="profile.html#playlists">
                                <span class="nav-icon">
                                    <i class="material-icons">
                                        queue_music
                                    </i>
                                </span>
                                <span class="nav-text">Playlists</span>
                            </a>
                        </li>
                        <li>
                            <a href="profile.html#likes">
                                <span class="nav-icon">
                                    <i class="material-icons">
                                        favorite_border
                                    </i>
                                </span>
                                <span class="nav-text">Likes</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div data-flex-no-shrink>
                <div class="nav-fold dropup">
                    <a data-toggle="dropdown">
                        <span class="pull-left">
                            <img src="images/a3.jpg" alt="..." class="w-32 img-circle">
                        </span>
                        <span class="clear hidden-folded p-x p-y-xs">
                            <span class="block _500 text-ellipsis">Rachel Platten</span>
                        </span>
                    </a>
                    <div class="dropdown-menu w dropdown-menu-scale ">
                        <a class="dropdown-item" href="">
                            <span>Profile</span>
                        </a>
                        <a class="dropdown-item" href="">
                            <span>Tracks</span>
                        </a>
                        <a class="dropdown-item" href="">
                            <span>Playlists</span>
                        </a>
                        <a class="dropdown-item" href="">
                            <span>Likes</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="">
                            Need help?
                        </a>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('indexNavbar')
    <div class="navbar" data-pjax>
        <a data-toggle="collapse" data-target="#navbar" class="navbar-item pull-right hidden-md-up m-r-0 m-l">
            <i class="material-icons">menu</i>
        </a>
        <!-- brand -->
        @include('Frontend.brand')
        <!-- / brand -->

        <!-- nabar right -->
        <ul class="nav navbar-nav pull-right">
            <li class="nav-item">
                <a href="{{ url('register') }}" class="nav-link">
                    Signup
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('login') }}" class="nav-link">
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
@endsection
