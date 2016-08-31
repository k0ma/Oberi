@extends('main')
@section('title', '| Начало')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Добре дошли в О&#768;бери - гидовник за катерачи!</h1>
                <p>Благодаря за отделеното време</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Популярни обекти</a></p>
            </div>
        </div><!-- end of header .row -->
        <div class="row">
            <div class="col-md-8">
                @foreach($posts as $post)
                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
                    <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Прочетете повече</a>
                </div>
                <hr/>
                @endforeach
            </div>

            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>
    </div>
@endsection