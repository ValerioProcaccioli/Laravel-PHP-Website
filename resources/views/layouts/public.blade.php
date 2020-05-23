<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}" >
        <title>@yield('title', 'Homepage')</title>
    </head>
    <body>
        <div class="wrapper row1" id="barra">
            <header id="header" class="clear">
                <div id="hgroup" >
                    <img href="http://localhost/LaraProj_TWEB/public" style="width: 100px; height: 100px; margin: 10px; "src="http://localhost/LaraProj_TWEB/public/images/logo.png"></img>
                </div>
                
                @include('layouts/publicnavbar')
            </header>
        </div>

        <!-- content -->
        <div class="wrapper row2">
            <div id="container">
                @yield('content')
            </div>
        </div>
        <!--PAGINAZIONE-->
        @isset($products)
        <div class="wrapper paginator">@include('pagination.paginator', ['paginator' => $products])</div>
        @endisset
        <!-- footer -->
        <div class="wrapper row3" id="barra">
            <footer id="footer" >
                <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#"></a></p>
                <p class="fl_right"></p>
            </footer>
        </div>
    </body>
</html>

