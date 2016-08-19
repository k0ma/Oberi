@extends('main')

@section('title', '| View Post')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>
            <p class="lead">{{ $post->body }}</p>
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Създаден на:</dt>
                    <dd>{{ date('j M Y H:i', strtotime($post->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Последна редакция:</dt>
                    <dd>{{ date('j M Y H:i', strtotime($post->updated_at)) }}</dd>
                </dl>
                <hr/>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit', 'Редактирай', array($post->id), array('class'=>'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.destroy', 'Изтрий', array($post->id), array('class'=>'btn btn-danger btn-block')) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection