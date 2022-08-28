<div class="navbar" data-pjax>
    <a data-toggle="collapse" data-target="#navbar" class="navbar-item pull-right hidden-md-up m-r-0 m-l">
        <i class="material-icons">menu</i>
    </a>
    <!-- brand -->
    <a href="index.html" class="navbar-brand md">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32">
            <circle cx="24" cy="24" r="24" fill="rgba(255,255,255,0.2)" />
            <circle cx="24" cy="24" r="22" fill="#1c202b" class="brand-color" />
            <circle cx="24" cy="24" r="10" fill="#ffffff" />
            <circle cx="13" cy="13" r="2" fill="#ffffff" class="brand-animate" />
            <path d="M 14 24 L 24 24 L 14 44 Z" fill="#FFFFFF" />
            <circle cx="24" cy="24" r="3" fill="#000000" />
        </svg>

        <img src="images/logo.png" alt="." class="hide">
        <span class="hidden-folded inline">pulse</span>
    </a>
    <!-- / brand -->

    <!-- nabar right -->
    <ul class="nav navbar-nav pull-right">
        <li class="nav-item">
            <a href="{{url('register')}}" class="nav-link">
                Signup
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('login')}}" class="nav-link">
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
