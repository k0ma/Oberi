@extends('main')

@section('title', '| Вход')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open() !!}

            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', null, ['class'=> 'form-control']) }}

            {{ Form::label('password', 'Парола:') }}
            {{ Form::password('password', ['class'=>'form-control']) }}

            <br/>
            {{ Form::checkbox('remember') }}{{Form::label('remember', 'Запомни ме')}}
            <br/>
            {{ Form::submit('Вход', ['class'=>'btn btn-primary btn-block']) }}



            {!! Form::close() !!}

        </div>
    </div>

@endsection