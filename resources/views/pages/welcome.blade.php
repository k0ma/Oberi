@extends('main')
@section('title', '| Homepage')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Добре дошли в Обери - гидовник за катерачи!</h1>
                <p>Благодаря за отделеното време</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Популярни обекти</a></p>
            </div>
        </div><!-- end of header .row -->
        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Maecenas bibendum, diam eu semper pharetra, nisl mauris tincidunt felis, sed vehicula lacus justo ut orci.
                        Praesent dictum ex tincidunt sem sollicitudin, nec pharetra sem lacinia.
                    </p>
                    <a href="#" class="btn btn-primary">Прочетете повече</a>
                </div>
                <hr/>
                <div class="post">
                <h3>Post Title</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Maecenas bibendum, diam eu semper pharetra, nisl mauris tincidunt felis, sed vehicula lacus justo ut orci.
                    Praesent dictum ex tincidunt sem sollicitudin, nec pharetra sem lacinia.
                </p>
                <a href="#" class="btn btn-primary">Прочетете повече</a>
                </div>
                <hr/>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Maecenas bibendum, diam eu semper pharetra, nisl mauris tincidunt felis, sed vehicula lacus justo ut orci.
                        Praesent dictum ex tincidunt sem sollicitudin, nec pharetra sem lacinia.
                    </p>
                    <a href="#" class="btn btn-primary">Прочетете повече</a>
                </div>
            </div>

            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>
    </div>
@endsection