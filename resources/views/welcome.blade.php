<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        

        <title>
        
            MANHA FABRICS LTD
        </title>

        <link rel="icon" sizes="64x64" href="{{ url('/page_Images/ManhaFabricsLogo.png') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
        <!-- Fonts -->
        

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('frontEnd/css/bootstrap5.css') }}">
        <link rel="stylesheet" href="{{ asset('frontEnd/css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('frontEnd/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontEnd/js/bootstrap.bundle.min.js') }}">
        <link rel="stylesheet" href="{{ asset('frontEnd/css/contact.css') }}">
        

            
        
    </head>
    <body>
        @include('inc.nav')

        @include('layouts.carousel')

        @include('layouts.services')

        @include('layouts.icons')

        @include('layouts.aboutUs')

        @include('layouts.contactUs')
    </body>
</html>
