<head>
    <title>@yield('page.title')</title>
    <meta charset="utf-8">
    <meta name="description" content="{{ config('site.site.description') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/animations.css">
    <link rel="stylesheet" href="/assets/css/fonts.css">
    <link rel="stylesheet" href="/assets/css/main.css" class="color-switcher-link">
    <link rel="stylesheet" href="/assets/css/shop.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="/assets/js/vendor/modernizr-2.6.2.min.js"></script>
</head>