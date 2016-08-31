@extends('main')

@section('title', '| Edit')

@section('stylesheets')

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
       <!-- start form -->
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method'=>'PUT']) !!}
        <div class="col-md-8">
            {{ Form::label('title', 'Име на обекта: ') }}
            {{ Form::text('title', null,["class"=>'form-control input-lg']) }}

            {{ Form::label('slug', 'Slug: ',["class"=>'form-spacing-top']) }}
            {{ Form::text('slug', null,["class"=>'form-control']) }}

            {{ Form::label('category_id', 'Категория:',["class"=>'form-spacing-top']) }}
            {{ Form::select('category_id', $categories, null, ['class'=> 'form-control']) }}

            {{ Form::label('tags', 'Тагове:', ['class'=> 'form-spacing top']) }}
            {{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}

            {{ Form::label('body', 'Описание на обекта: ', ["class"=>'form-spacing-top']) }}
            {{ Form::textarea('body',null, ["class"=>'form-control']) }}
        </div>
        <div class="col-md-4">
            <div class="well">
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
                        {!! Html::linkRoute('posts.show', 'Откажи', array($post->id), array('class'=>'btn btn-danger btn-block btn-sm')) !!}
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Запази', ["class"=>'btn btn-success btn-block btn-sm']) }}
                    </div>
                </div>
            </div>
        </div>
        <!-- end form -->
        {!! Form::close() !!}

    </div>


@stop

@section('scripts')

    {!! Html::script('js/select2.min.js') !!}
    <script type="text/javascript">
        $(".select2-multi").select2();
        $('.select2-multi').select2().val({!! json_encode($post->tags()->getRelatedIds()) !!}).trigger('change');
    </script>

@endsection