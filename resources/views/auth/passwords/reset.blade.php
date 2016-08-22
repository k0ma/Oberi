@extends('main')

@section('title', '| Забравена парола')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Смяна на парола</div>
                <div class="panel-body">
                    {!! Form::open(['url'=>'password/reset', 'method'=>"POST"]) !!}

                    {{ Form::hidden('token', $token) }}

                    {{ Form::label('email', 'Въведете имейл адрес:') }}
                    {{ Form::email('email', $email, ['class'=>'form-control']) }}

                    {{ Form::label('password', 'Нова парола:') }}
                    {{ Form::password('password', ['class'=>'form-control']) }}

                    {{ Form::label('password-confirmation', 'Потвърдете паролата:') }}
                    {{ Form::password('password-confirmation', ['class'=>'form-control']) }}

                    {{ Form::submit('Промени паролата', ['class'=>'btn btn-primary form-spacing-top']) }}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection