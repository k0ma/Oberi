@extends('main')

@section('title', '| Обекти')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Обекти</h2>
        </div>
    </div>
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>{{ $post->title }}</h3>
            <h5>Публикувано на: {{ date('j M Y', strtotime($post->created_at)) }}</h5>

            <p>{{ substr($post->body, 0, 250) }}{{ strlen($post->body)>250?"...":"" }}</p>

            <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Виж повече</a>

            <hr/>
        </div>
    </div>
    @endforeach

    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>

@endsection