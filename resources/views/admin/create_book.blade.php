@extends('admin')

@section('title', '| Add Book')

@section('body')

<h1 class='us header'>Dodaj książkę do swojej biblioteczki</h1>
{!! Form::open(['route' => 'admin.book.store', 'enctype' => 'multipart/form-data']) !!}
    <div class="ui invertedform">
        <div class="field">
            {!! Form::label('author', 'Autor:', ['class' => 'item']) !!}
                <div class="ui left icon input">
                    {!! Form::text('author', null, ['class' => 'ui pointing label', 'placeholder' => 'Jan Brzechwa', 'style' => 'margin: 0 20px;']) !!}
                    <i class="user icon" style="margin-left: 20px;"></i>
                </div>
            {!! Form::label('pages', 'Strony:', ['class' => 'item']) !!}
                <div class="ui left icon input">
                    {!! Form::text('pages', null, ['class' => 'ui pointing label', 'placeholder' => '124', 'style' => 'margin: 0 20px;']) !!}
                    <i class="file icon" style="margin-left: 20px;"></i>
                </div>
            {!! Form::label('thumbnail', 'Obrazek:', ['class' => 'item']) !!}
                <div class="ui left icon input">
                    <i class="file image icon" style="margin-left: 20px;"></i>
                    {!! Form::file('thumbnail', ['class' => 'ui pointing label']) !!}
            </div>
            <div class="field">
                {!! Form::label('title', 'Tytuł:', ['class' => 'item']) !!}
                <div class="ui form">
                    {!! Form::text('title', null, ['class' => 'ui pointing label', 'placeholder' => 'Akademia Pana Kleksa', 'style' => 'margin: 5px 20px 20px 20px;']) !!}
                </div>
            </div>
            <div class="field">
                {!! Form::label('link', 'Link:', ['class' => 'item']) !!}
                <div class="ui form">
                    {!! Form::text('link', null, ['class' => 'ui pointing label', 'placeholder' => 'http://helion.pl/ksiazki/', 'style' => 'margin: 5px 20px 20px 20px;']) !!}
                </div>
            </div>
            <div class="field">
                {!! Form::label('description', 'Opis:', ['class' => 'item']) !!}
                <div class="ui form">
                    {!! Form::textarea('description', null, ['class' => 'ui pointing label', 'placeholder' => 'Ta książka opowiada jak', 'style' => 'margin: 5px 20px 20px 20px;']) !!}
                </div>
            </div>
            <div class="field">
                {!! Form::submit('Zapisz', ['class'=>'ui green button']) !!}
                {!! link_to(URL::previous(), 'Powrót', ['class' => 'ui grey button']) !!}
            </div>
        </div>
    </div>
{!! Form::close() !!}

@endsection