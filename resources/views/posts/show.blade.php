@extends('main')

@section('title', '| Преглед на обект')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <img src="{{asset('images/'.$post->image)}}" alt="изображение"/>
            <h2>{{ $post->title }}</h2>
            <p class="lead">{!! $post->body !!}</p>
            <hr/>
            <div class="tags">
                @foreach($post->tags as $tag)
                    <span class="label label-default tags-spacing-top">{{ $tag->name }}</span>
                @endforeach
            </div>
            <div id="backend-comments">
                <h3><small>{{ $post->comments()->count() }}</small> коментара общо</h3>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Име</th>
                            <th>e-mail</th>
                            <th>Коментар</th>
                            <th style="width: 70px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($post->comments as $comment)
                        <tr>
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->email }}</td>
                            <td>{{ $comment->comment }}</td>
                            <td>
                                <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <div class="well">

                <dl class="dl-horizontal">
                    <label>URL:</label>
                    <p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>
                </dl>
                <dl class="dl-horizontal">
                    <label>В категория:</label>
                    <p>{{ $post->category->name }}</p>
                </dl>

                <dl class="dl-horizontal">
                    <label>Създаден на:</label>
                    <p>{{ date('j M Y H:i', strtotime($post->created_at)) }}</p>
                </dl>

                <dl class="dl-horizontal">
                    <label>Последна редакция:</label>
                    <p>{{ date('j M Y H:i', strtotime($post->updated_at)) }}</p>
                </dl>
                <hr/>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit', 'Редактирай', array($post->id), array('class'=>'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'DELETE']) !!}

                        {!! Form::submit('Изтрий', ["class"=>'btn btn-danger btn-block']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {{ Html::linkRoute('posts.index', "<< Виж всички обекти", [], ["class"=>'btn btn-default btn-block btn-h2-spacing']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection