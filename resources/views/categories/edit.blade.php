@extends('main')

@section('title', '| Редактиране на Категория')

@section('content')
    <div class="post">
    {{ Form::model($categories, ['route' => ['categories.update', $categories->id], 'method' => "PUT"]) }}

    {{ Form::label('name', "Име:") }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}

    {{ Form::submit('Запази промените',['class'=> 'btn btn-success btn-spacing-top']) }}
    {{ Form::close() }}
    </div>

@endsection