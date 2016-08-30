@extends('main')

@section('title', '| Изтриване на коментар')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>Сигурни ли сте, че искате да изтриете коментара?</h3>
            <p>
                <strong>Име:</strong> {{ $comment->name }}<br/>
                <strong>e-mail:</strong> {{ $comment->email }}<br/>
                <strong>Коментар:</strong> {{ $comment->comment }}
            </p>

            {{ Form::open(['route'=> ['comments.destroy', $comment->id], 'method' => 'DELETE']) }}
                {{ Form::submit('Изтрий този коментар', ['class' => 'btn btn-lg btn-block btn-danger']) }}
            {{ Form::close() }}
        </div>
    </div>

@endsection