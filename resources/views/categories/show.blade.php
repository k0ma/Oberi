@extends('main')

@section('title', "| $categories->name категория")

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>В категория "{{ $categories->name }}"<small> са включени {{$categories->posts()->count()}} обекта</small></h1>
        </div>
        <div class="col-md-2 col-md-offset-2">
            <a href="{{ route('categories.edit', $categories->id) }}" class="btn btn-sm btn-primary pull-right btn-h2-spacing btn-block">Редактиране</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Обект</th>
                    <th>Категория</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($categories->posts as $post)
                    <tr>
                        <th>{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $categories->name }}</td>
                        <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-xs">Преглед</a> </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection