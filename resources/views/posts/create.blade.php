@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}

@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Нов обект</h1>
            <hr/>
            {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate'=>'')) !!}
                {{ Form::label('title',  'Име на обекта:') }}
                {{ Form::text('title', null, array('class' => 'form-control', 'required' =>'', 'maxlength' => '255')) }}

                {{ Form::label('body',  'Описание на обекта:') }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'required' =>'')) }}

                {{ Form::submit('Създай обект', array('class' => 'btn btn-success btn-md btn-block', 'style'=> 'margin-top: 20px;')) }}
            {!! Form::close() !!}
        </div>
    </div>


@endsection

@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}

@endsection