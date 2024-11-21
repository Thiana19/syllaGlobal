<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>{{$title ?? 'SyllaEd Global'}}</title>
@include('layout.head')
@yield('style')
<link rel="icon" href="{{ asset('images/fav.png') }}" type="image/x-icon">
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        @include('layout.nav')
        {{-- @include('layout.hero') --}}

        @yield('main')

        @include('layout.footer')
    </div>
    @include('layout.scripts')
    @yield('script')
</body>
</html>

