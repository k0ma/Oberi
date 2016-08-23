@extends('main')

@section('title'. "| $post->title")

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <hr/>
            <p>Публикувано в категория: {{ $post->category->name }} на: {{ $post->category->created_at }}</p>
        </div>
    </div>
    @endsection