<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
@component('layouts.app.head', ['page' => $page])@endcomponent
@yield('js')
</head>
<body class="bg-light">
<header class="header"></header>
<main class="content">
    <div class="container bg-white">
        @yield('content')
    </div>
</main>
<footer class="footer"></footer>
<script src="{{ mix('js/manifest.js') }}"></script>
<script src="{{ mix('js/vendor.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
