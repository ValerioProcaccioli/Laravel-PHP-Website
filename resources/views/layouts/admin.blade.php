<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}" >
        <title>@yield('title', 'Homepage')</title>
    </head>
    <body>
        <div class="wrapper row1">
            <header id="header" class="clear">
                <div id="hgroup">
                    <h1><a href="#">Inserire Logo Sito</a></h1>
                </div>
                
                @include('layouts/publicnavbar')
            </header>
        </div>

        <!-- content -->
        <div class="wrapper row2">
            <div id="container" class="clear">
                @yield('content')
            </div>
        </div>
        <!-- footer -->
        <div class="wrapper row3">
            <footer id="footer" >
                <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#"></a></p>
                <p class="fl_right"></p>
            </footer>
        </div>
    </body>
</html>
