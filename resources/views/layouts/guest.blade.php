<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="{{ asset('assets/fonts/bootstrap/bootstrap-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}" />
    <!-- Custom CSS -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body>
    {{-- <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center pt-5">
        <div>
            <a href="/">
                <img src="{{ asset('path/to/your/logo.png') }}" class="img-fluid w-25" alt="Application Logo">
            </a>
        </div> --}}

        {{-- <div class="w-100" style="max-width: 400px;">
            <div class="p-4 bg-white shadow rounded"> --}}
                @yield('content')
            {{-- </div>
        </div>
    </div> --}}

    <!-- Bootstrap JS Bundle with Popper -->

		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Overlay Scroll JS -->
		<script src="{{ asset('assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>

		<!-- Toastify JS -->
		{{-- <script src="{{ asset('assets/vendor/toastify/toastify.js') }}"></script>
		<script src="{{ asset('assets/vendor/toastify/custom.js') }}"></script> --}}

		<!-- Apex Charts -->
		<script src="{{ asset('assets/vendor/apex/apexcharts.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/apex/custom/home/overview.js') }}"></script>
		<script src="{{ asset('assets/vendor/apex/custom/home/reachedAudience.js') }}"></script>
		<script src="{{ asset('assets/vendor/apex/custom/home/social.js') }}"></script>
		<script src="{{ asset('assets/vendor/apex/custom/home/sparkline.js') }}"></script>
		<script src="{{ asset('assets/vendor/apex/custom/home/sparkline2.js') }}"></script>
		<script src="{{ asset('assets/vendor/apex/custom/home/visitors.js') }}"></script>

		<!-- Custom JS files -->
		<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
