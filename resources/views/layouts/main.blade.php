<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('partials.head')

    @yield('meta')

    <title>@yield('title', 'Accueil') | TODL Consulting</title>

</head>

<body class="stretched">

<div id="wrapper">

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

</div>

<div id="gotoTop" class="uil uil-angle-up"></div>

@yield('script')

<script src="{{ asset('js/functions.js') }}"></script>

</body>
</html>
