@extends('main')
@section('title', '| Начало')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-2">
                        <span><img src="images/jumbotronImage.png"/></span>
                    </div>
                    <div class="col-md-10">
                        <h1>Добре дошли в О&#768;бери - гидовник за катерачи!</h1>
                    </div>
                 </div>

            </div>
        </div><!-- end of header .row -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @foreach($posts as $post)
                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <div class="tags">
                        @foreach($post->tags as $tag)
                            <span class="label label-default ">{{ $tag->name }}</span>
                        @endforeach
                    </div>
                    <hr/>

                    <img src="{{ asset('images/' . $post->image) }}" height="200" width="400"/>
                    <p class="spacing-top">{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
                    <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary btn-sm">Прочетете повече</a>
                </div>
                @endforeach
            </div>

            {{--<div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>--}}
        </div>
    </div>
@endsection