<!DOCTYPE html>
<html>
    <head>
        @include('partials._head')
    </head>
        <body>

        @include('partials._nav')

        <div class="container">

            @yield('content')

            @include('partials._footer')

        </div><!-- end of .container -->
            @include('partials._javascript')
            @yield('scripts')
        </body>
</html>