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
                    @auth
                        
                    <a class="dropdown-item" href="{{url('logout')}}">
                        Sign out
                    </a>
                    @endauth
                    @guest
                        
                    <a href="{{url('register')}}" class="nav-link">
                        Signup
                    </a>
                    <a href="{{url('login')}}" class="nav-link">
                        <span class="btn btn-sm rounded primary _600">
                            Signin
                        </span>
                    </a>
                    @endguest
                </div>
            </div>

        </div>
    </div>
</div>
