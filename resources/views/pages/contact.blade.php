@extends('main')
@section('title', '| Контакти')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2 ">
            <div class="post">
            <h1>Свържете се с нас</h1>
            <hr/>
            <form action="{{ url('contact') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label name="email">е-mail:</label>
                    <input id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label name="subject">Относно:</label>
                    <input id="subject" name="subject" class="form-control">
                </div>

                <div class="form-group">
                    <label name="message">Cъобщение:</label>
                    <textarea id="message" name="message" class="form-control">Оставете вашето съобщение тук...</textarea>
                </div>

                <input type="submit" value="Изпрати съобщението" class="btn btn-success">
            </form>
            </div>
        </div>
    </div>
@endsection