<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    </head>
    <body class="font-sans antialiased">
        <div class="bg-gray-500 dark:bg-gray-100">
            @include('layouts.topBar')
            @include('layouts.sideBar')

            <main style="margin-top: 200px;">
                 @yield('content')
            </main>
        </div>

    </body>
</html>