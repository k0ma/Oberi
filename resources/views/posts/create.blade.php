@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: "link code",
            menubar: false
        });
    </script>


@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Нов обект</h1>
            <hr/>

            {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate'=>'', 'files' => true)) !!}
                {{ Form::label('title',  'Име на обекта:') }}
                {{ Form::text('title', null, array('class' => 'form-control', 'required' =>'', 'maxlength' => '255')) }}

                {{ Form::label('slug', 'Slug:',["class"=>'form-spacing-top']) }}
                {{ Form::text('slug', null, array("class"=> 'form-control','required'=>'', 'minlength' =>'5', 'maxlength'=>'255')) }}

                {{ Form::label('category_id', 'Категория:',["class"=>'form-spacing-top']) }}
                <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                {{ Form::label('tags', 'Тагове:',["class"=>'form-spacing-top']) }}
                <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>

                {{ Form::label('featured_image',  'Добавяне на изображение:',["class"=>'form-spacing-top']) }}
                {{ Form::file('featured_image') }}

                {{ Form::label('body',  'Описание на обекта:',["class"=>'form-spacing-top']) }}
                {{ Form::textarea('body', null, array('class' => 'form-control')) }}

                {{ Form::submit('Създай обект', array('class' => 'btn btn-success btn-md btn-block', 'style'=> 'margin-top: 20px;')) }}
            {!! Form::close() !!}
        </div>
    </div>


@endsection

@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}
    <script type="text/javascript">
        $(".select2-multi").select2();
    </script>

@endsection