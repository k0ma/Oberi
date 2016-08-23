@extends('main')

@section('title', '| Категории')

@section('content')

    <div class="row">
        <div class="col-md-7">
            <h1>Категории</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Име</th>
                </tr>
                </thead>

                <tbody>
                @foreach($categories as $category)
                <tr>
                    <th>{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4 col-md-offset-1">
            <div class="well">
                {!! Form::open(['route'=>'categories.store', 'method' =>'POST']) !!}
                    <h2>Нова Категория</h2>

                    {{ Form::label('name', 'Име на категорията:') }}
                    {{ Form::text('name', null, ['class'=> 'form-control']) }}

                    {{ Form::submit('Създай нова категория', ['class'=>'btn btn-primary btn-block btn-h2-spacing']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection