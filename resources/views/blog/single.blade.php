@extends('main')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <hr/>
            <p>Публикувано в категория: {{ $post->category->name }} на: {{ $post->category->created_at }}</p>
            <hr/>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach($post->comments as $comment)
                <div class="comment">
                    <p><strong>Име:</strong> {{ $comment->name }}</p>
                    <p><strong>Коментар:</strong><br/> {{ $comment->comment }}</p><br/><hr/>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div id="comment-form" class="col-md-8 col-md-offset-2">
            {{Form::open(['route'=>['comments.store', $post->id], 'method' => 'POST'])}}
            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('name', "Име:") }}
                    {{ Form::text('name',null, ['class'=> 'form-control']) }}
                </div>
                <div class="col-md-6">
                    {{ Form::label('email', "e-mail:") }}
                    {{ Form::text('email',null, ['class'=> 'form-control']) }}
                </div>
                <div class="col-md-12">
                    {{ Form::label('comment', "Коментар:") }}
                    {{ Form::textarea('comment',null, ['class'=> 'form-control', 'rows'=> '5']) }}

                    {{ Form::submit('Добави коментар', ['class'=>'btn btn-success btn-block btn-spacing-top']) }}
                </div>
            </div>

            {{ Form::close() }}
        </div>
    </div>
    @endsection