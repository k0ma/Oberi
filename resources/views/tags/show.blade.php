@extends('main')

@section('title', "| $tag->name Tag")

@section('content')
    <div class="post">
    <div class="row">
        <div class="col-md-8">
            <h1>Тагът "{{ $tag->name }}"<small> е свързан с {{$tag->posts()->count()}} обекта</small></h1>
        </div>
        <div class="col-md-2 col-md-offset-1">
            <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-sm btn-primary btn-h2-spacing btn-block">Редактиране</a>
        </div>
        <div class="col-md-2 col-md-offset-1">
            {{ Form::open(['route'=> ['tags.destroy', $tag->id], 'method'=> 'DELETE']) }}
                {{ Form::submit('Delete', ['class'=> 'btn btn-sm btn-danger btn-block btn-h2-spacing']) }}
            {{ Form::close() }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Име</th>
                        <th>Тагове</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($tag->posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>@foreach ($post->tags as $tag)
                                <span class="label label-default">{{ $tag->name }}</span>
                                @endforeach
                            </td>
                            <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-xs">Преглед</a> </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection