@extends('layouts.guest')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-5 col-sm-6 col-12">
            <form method="POST" action="{{ route('login') }}" class="my-5">
                @csrf
                <div class="border rounded-2 p-4 mt-5">
                    <div class="login-form">
                        <a href="{{ url('/') }}" class="mb-4 d-flex">
                            <img src="assets/images/logo.svg" class="img-fluid login-logo" alt="Your Logo" />
                        </a>
                        <h5 class="fw-bold mb-5">Sign in to access dashboard.</h5>

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autofocus autocomplete="username" />
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Your Password</label>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Enter password" required autocomplete="current-password" />
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex align-items-center justify-content-between">
                            <div class="form-check m-0">
                                <input class="form-check-input" type="checkbox" name="remember" id="rememberPassword">
                                <label class="form-check-label" for="rememberPassword">Remember</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-blue text-decoration-underline">Lost password?</a>
                            @endif
                        </div>

                        <div class="d-grid py-3 mt-4">
                            <button type="submit" class="btn btn-lg btn-primary">LOGIN</button>
                        </div>

                        {{-- <div class="text-center py-3">or Login with</div> --}}
                        {{-- <div class="btn-group w-100">
                            <button type="button" class="btn btn-sm btn-outline-danger">Google</button>
                            <button type="button" class="btn btn-sm btn-outline-primary">Facebook</button>
                            <button type="button" class="btn btn-sm btn-outline-info">Twitter</button>
                        </div> --}}

                        <div class="text-center pt-4">
                            <span>Not registered?</span>
                            <a href="{{ route('register') }}" class="text-blue text-decoration-underline ms-2">SignUp</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
