@extends('main')

@section('title', '| Редактиране на коментар')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>Редактиране на коментар</h2>

        {{ Form::model($comment, ['route'=>['comments.update', $comment->id], 'method' => 'PUT']) }}

            {{ Form::label('name', 'Име') }}
            {{ Form::text('name', null, ['class'=>'form-control', 'disabled'=> '']) }}

            {{ Form::label('email', 'e-mail') }}
            {{ Form::text('email', null, ['class'=>'form-control', 'disabled'=> '']) }}

            {{ Form::label('comment', 'Коментар') }}
            {{ Form::textarea('comment', null, ['class'=>'form-control', 'rows'=> '5']) }}

            {{ Form::submit('Обнови коментара', ['class'=>'btn btn-block btn-success btn-spacing-top']) }}

        {{ Form::close() }}
    </div>
</div>
@endsection