@extends('main')

@section('title', '| Тагове')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="post">
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
                        <td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
        <div class="col-md-4 ">
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