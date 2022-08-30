@section('footer')
    <div class="footer p-y-md text-primary-hover">
        <div class="row">
            <div class="col-md-3">
                <div class="clearfix m-b-lg">
                    <!-- brand -->
                    @include('Frontend.brand')
                    <!-- / brand -->
                </div>
            </div>
            <div class="col-sm-2 col-xs-6">
                <h6 class="text-u-c m-b text-muted">About</h6>
                <div class="m-b-md">
                    <ul class="nav l-h-2x _600">
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mobile apps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Jobs</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2 col-xs-6">
                <h6 class="text-u-c m-b text-muted">Links</h6>
                <div class="m-b-md">
                    <ul class="nav l-h-2x _600">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Legal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Copyright</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2 col-xs-6">
                <h6 class="text-u-c m-b text-muted">Connect</h6>
                <div class="m-b-md">
                    <ul class="nav l-h-2x _600">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Facebook</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Twitter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Google+</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <h6 class="text-u-c m-b text-muted">Subscribe</h6>
                <p>Do not want to miss our newsletter?</p>
                <form class="m-b-lg">
                    <input type="text" class="form-control" placeholder="Your email">
                    <button type="submit" class="btn btn-sm btn-outline b-dark rounded m-t">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="b b-b m-b m-t-lg"></div>
        <div class="row">
            <div class="col-sm-8">
                <a href="#"="#" class="text-muted text-sm">Cookies</a>
            </div>
            <div class="col-sm-4">
                <div class="text-sm-right text-xs-left">
                    <small class="text-muted">&copy; Copyright. All rights reserved.</small>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('Scripts')
    <!-- build:js scripts/app.min.js -->
    <!-- jQuery -->
    <script src="{{ asset('libs/jquery/dist/jquery.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('libs/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.js') }}"></script>
    <!-- core -->
    <script src="{{ asset('libs/jQuery-Storage-API/jquery.storageapi.min.js') }}"></script>
    <script src="{{ asset('libs/jquery.stellar/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('libs/jscroll/jquery.js') }}croll.min.js')}}"></script>
    <script src="{{ asset('libs/PACE/pace.min.js') }}"></script>
    <script src="{{ asset('libs/jquery-pjax/jquery.pjax.js') }}"></script>

    <script src="{{ asset('libs/mediaelement/build/mediaelement-and-player.min.js') }}"></script>
    <script src="{{ asset('libs/mediaelement/build/mep.js') }}"></script>
    <script src="{{ asset('scripts/player.js') }}"></script>

    <script src="{{ asset('scripts/config.lazyload.js') }}"></script>
    <script src="{{ asset('scripts/ui-load.js') }}"></script>
    <script src="{{ asset('scripts/ui-jp.js') }}"></script>
    <script src="{{ asset('scripts/ui-include.js') }}"></script>
    <script src="{{ asset('scripts/ui-device.js') }}"></script>
    <script src="{{ asset('scripts/ui-form.js') }}"></script>
    <script src="{{ asset('scripts/ui-nav.js') }}"></script>
    <script src="{{ asset('scripts/ui-screenfull.js') }}"></script>
    <script src="{{ asset('scripts/ui-scroll-to.js') }}"></script>
    <script src="{{ asset('scripts/ui-toggle-class.js') }}"></script>
    <script src="{{ asset('scripts/ui-taburl.js') }}"></script>
    <script src="{{ asset('scripts/app.js') }}"></script>
    <script src="{{ asset('scripts/site.js') }}"></script>
    <script src="{{ asset('scripts/ajax.js') }}"></script>
@endsection
