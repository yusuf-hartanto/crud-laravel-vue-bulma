<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Manajemen Sampah</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ URL::asset('bulma/css/bulma.css?v=1.1') }}">

        <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('favicon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('favicon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('favicon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('favicon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('favicon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('favicon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('favicon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('favicon/apple-icon-180x180.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ URL::asset('favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="144x144" href="{{ URL::asset('favicon/android-icon-144x144.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ URL::asset('favicon/manifest.json') }}">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ URL::asset('favicon/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">

    </head>
    <body>
        <div class="columns is-mobile is-centered">
            <div class="column is-half">
                <div id="app">
                    <div class="vld-parent"></div>
                    <router-view></router-view>
                </div>
            </div>
        </div>

        <script src="{{ URL::asset('js/app.js') }}" charset="utf-8"></script>
    </body>
</html>
