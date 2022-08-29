{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@include('Frontend/header')

<body>
    <div class="app dk" id="app">

        <!-- ############ LAYOUT START-->

        <div class="padding">
            <div class="navbar">
                <div class="pull-center">
                    <!-- brand -->
                    @include('Frontend/brand')
                    <!-- / brand -->
                </div>
            </div>
        </div>
        <div class="b-t">
            <div class="center-block w-xxl w-auto-xs p-y-md text-center">
                <div class="p-a-md">
                    <div>
                        <a href="#" class="btn btn-block indigo text-white m-b-sm">
                            <i class="fa fa-facebook pull-left"></i>
                            Sign in with Facebook
                        </a>
                        <a href="#" class="btn btn-block red text-white">
                            <i class="fa fa-google-plus pull-left"></i>
                            Sign in with Google+
                        </a>
                    </div>
                    <div class="m-y text-sm">
                        OR
                    </div>
                    <form name="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="m-b-md">
                            <label class="md-check">
                                <input type="checkbox"><i class="primary"></i> Keep me signed in
                            </label>
                        </div>
                        <button type="submit" class="btn btn-lg black p-x-lg">Sign in</button>
                    </form>
                    <div class="m-y">
                        <a href="forgot-password.html" class="_600">Forgot password?</a>
                    </div>
                    <div>
                        Do not have an account?
                        <a href="{{ url('register') }}" class="text-primary _600">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ############ LAYOUT END-->
    </div>

    @include('Frontend/footer')
