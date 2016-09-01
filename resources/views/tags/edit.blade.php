@extends('main')

@section('title', '| Редактиране на Таг')

@section('content')
    <div class="post">
    {{ Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => "PUT"]) }}

        {{ Form::label('name', "Име:") }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}

        {{ Form::submit('Запази промените',['class'=> 'btn btn-success btn-spacing-top']) }}
    {{ Form::close() }}
    </div>
@endsection