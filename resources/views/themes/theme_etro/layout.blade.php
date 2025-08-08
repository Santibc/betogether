<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>My website</title>
    <meta name="description"
        content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries.">
    <meta name="keywords"
        content="medical theme, vegetables, medicine store, eCommerce html template, responsive, multipurpose, mask, sanitizer, eCommerce store, health, tables, dental, healthcare, pharmacy, herbal, medicine shop">
    <meta name="author" content="spacingtech_webify">
    <link rel="shortcut icon" type="image/favicon" href="image/home1/favicon.png">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/etro/css/plugin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/etro/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/etro/css/collection.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/etro/css/feather.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/etro/css/blog.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/etro/css/other-pages.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/etro/css/product-page.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/etro/css/style1.css') }}">
</head>

<body>
    <div class="screen-bg"></div>
    <div class="top-notification-bar">
        <div class="container">
            <ul class="notification-entry">
                <li class="notify-wrap notify-mail">
                    <div class="notify-text">
                        <ul class="grid-wrap">
                            <li class="grid-wrapper">
                                <p class="notification-free"><span class="top-c">Envio gratis</span> en pedidos
                                    superiores a
                                    400.000 mil COP</p>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @include('themes.theme_etro.header')
    {{-- @include('themes.theme_etro.main-menu') --}}
    @include('themes.theme_etro.main')
    @include('themes.theme_etro.footer')
    @include('themes.theme_etro.product_modal')
    @include('themes.theme_etro.mobile-menu')
    @include('themes.theme_etro.search_modal')
    @include('themes.theme_etro.cart_drawer')
    @include('themes.theme_etro.bottom_menu')

    <div class="bg-screen"></div>
    <a href="javascript:void(0)" id="top" class="scroll"><span><i class="feather-arrow-up"></i></span></a>
    <script src="{{ asset('themes/etro/js/plugin.js') }}"></script>
    <script src="{{ asset('themes/etro/js/main.js') }}"></script>
</body>

</html>
