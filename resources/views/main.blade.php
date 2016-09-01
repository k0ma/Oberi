<!DOCTYPE html>
<html>
    <head>
        @include('partials._head')
    </head>
        <body>
            <div id="backgroundImage">

                <div class="main">
                @include('partials._nav')

                <div class="container">
                    @include('partials._messages')

                    @yield('content')

                    @include('partials._footer')

                </div><!-- end of .container -->
                    @include('partials._javascript')
                    @yield('scripts')
                </div>
            </div>
        </body>
</html>