@extends('main')

@section('title', '| All Posts')

@section('content')


    <div class="row">
        <div class="col-md-10">
            <h2>Всички обекти</h2>
        </div>

        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-sm btn-block btn-primary btn-h2-spacing">Създай нов обект</a>
        </div>
        <div class="col-md-12">
            <hr/>
        </div>
    </div>
    <div class="row">
        <col-md-12>
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Обект</th>
                    <th>Описание</th>
                    <th>Създаден на</th>
                    <th></th>
                </thead>

                <tbody>
                    @foreach($posts as $post)

                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ substr($post->body,0, 50) }}{{ strlen($post->body)>50 ? "..." : "" }}</td>
                            <td>{{ date('j M Y', strtotime($post->created_at)) }}</td>
                            <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">Преглед</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Редактирай</a></td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </col-md-12>
    </div>

@stop