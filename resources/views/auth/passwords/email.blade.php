@extends('main')

@section('title', '| Забравена парола')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Смяна на парола</div>
                <div class="panel-body">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['url'=>'password/email', 'method'=>"POST"]) !!}

                    {{ Form::label('email', 'Въведете имейл адрес:') }}
                    {{ Form::email('email', null, ['class'=>'form-control']) }}

                    {{ Form::submit('Промени паролата', ['class'=>'btn btn-primary form-spacing-top']) }}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection