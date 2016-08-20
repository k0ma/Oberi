@extends('main')

@section('title', '| Регистрация')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open() !!}

            {{ Form::label('name', 'Име') }}
            {{ Form::email('name', null, ['class'=> 'form-control']) }}

            {{ Form::label('email', 'Email:') }}
            {{ Form::email('email', null, ['class'=>'form-control']) }}

            {{ Form::label('password', 'Парола:') }}
            {{ Form::password('password', ['class'=>'form-control']) }}

            {{ Form::label('password_confirmation', 'Повтори парола:') }}
            {{ Form::password('password_confirmation', ['class'=>'form-control']) }}
            
            {{ Form::submit('Създай профил', ['class'=>'btn btn-primary btn-block form-spacing-top']) }}



            {!! Form::close() !!}

        </div>
    </div>

@endsection