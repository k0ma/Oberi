@extends('main')

@section('title', '| Обекти')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2 post">
            <h2>Обекти</h2>
        </div>
    </div>
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-8 col-md-offset-2 post">
            <h3>{{ $post->title }}</h3>
            <hr/>
            <h5>Публикувано на: {{ date('j M Y', strtotime($post->created_at)) }}</h5>
            <p>Категория: {{ $post->category->name }}</p>
            <img src="{{ asset('images/' . $post->image) }}" height="200" width="400"/>

            <p class="spacing-top">{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body))>250?"...":"" }}</p>

            <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Виж повече</a>


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