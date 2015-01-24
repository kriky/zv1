<!DOCTYPE html>
<html lang="en-us">
    <head>
        @include('includes.head')
    </head>
    <body class="">
        @include('includes.header')
        @include('includes.nav')
        <div id="main" role="main">
            <div id="content">
             @yield('content')
            </div>
        </div>
        @include('includes.footer')
        
        
        @include('scripts.default')
        
        @yield('page-related-scripts')
        
    </body>
</html>