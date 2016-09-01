<!--Default Bootstrap Navbar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><span><img src="/images/logoFirstLetter1.png"></span>О&#768;бери</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Начало</a></li>
                <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Обекти</a></li>
                <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">За нас</a></li>
                <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Контакти</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Здравей, {{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('posts.index') }}">Обекти</a></li>
                        <li><a href="{{ route('categories.index') }}">Категории</a></li>
                        <li><a href="{{ route('tags.index') }}">Тагове</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('logout') }}">Изход</a></li>
                    </ul>
                </li>

                @else

                    <a href="{{ route('login') }}" class="btn btn-default btn-spacing-top">Вход</a>

                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>