@extends('main')

@section('title', '| Тагове')

@section('content')

    <div class="row">
        <div class="col-md-7">
            <h1>Тагове</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Име</th>
                </tr>
                </thead>

                <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <th>{{ $tag->id }}</th>
                        <td>{{ $tag->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4 col-md-offset-1">
            <div class="well">
                {!! Form::open(['route'=>'tags.store', 'method' =>'POST']) !!}
                <h2>Нов Таг</h2>

                {{ Form::label('name', 'Име на таг:') }}
                {{ Form::text('name', null, ['class'=> 'form-control']) }}

                {{ Form::submit('Създай нов таг', ['class'=>'btn btn-primary btn-block btn-h2-spacing']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection