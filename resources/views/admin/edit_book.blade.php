@extends('admin')

@section('title', '| Edit Book')

@section('body')

<h1 class='us header'>Edytuj książkę</h1>
{!! Form::model($book, ['route' => ['admin.book.update', $book]]) !!}
    @if ($errors->any())
       <div class="ui error message">
       <i class="close icon"></i>
            <div class="header">
                 There were some errors with your submission
            </div>
            <ul class="list">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
             </ul>
        </div>
    @endif
    <div class="ui invertedform">
        <div class="field">
            {!! Form::label('author', 'Autor:', ['class' => 'item']) !!}
                <div class="ui left icon input">
                    {!! Form::text('author', $book->author, ['class' => 'ui pointing label', 'style' => 'margin: 0 20px;']) !!}
                    <i class="user icon" style="margin-left: 20px;"></i>
                </div>
            {!! Form::label('pages', 'Strony:', ['class' => 'item']) !!}
                <div class="ui left icon input">
                    {!! Form::text('pages', $book->pages, ['class' => 'ui pointing label', 'style' => 'margin: 0 20px;']) !!}
                    <i class="file icon" style="margin-left: 20px;"></i>
                </div>
            {!! Form::label('thumbnail', 'Obrazek:', ['class' => 'item']) !!}
                <div class="ui left icon input">
                    <i class="file image icon" style="margin-left: 20px;"></i>
                    {!! Form::file('thumbnail', ['class' => 'ui pointing label']) !!}
                    {!! Form::hidden('old_thumbnail', $book->thumbnail) !!}
            </div>
            <div class="field">
                {!! Form::label('title', 'Tytuł:', ['class' => 'item']) !!}
                <div class="ui form">
                    {!! Form::text('title', $book->title, ['class' => 'ui pointing label', 'style' => 'margin: 5px 20px 20px 20px;']) !!}
                </div>
            </div>
            <div class='field'>
                {!! Form::label('link', 'Link:', ['class' => 'item']) !!}
                <div class="ui form">
                    {!! Form::text('link', $book->link, ['class' => 'ui pointing label', 'style' => 'margin: 5px 20px 20px 20px; resize: none;']) !!}
                </div>
            </div>
            <div class="field">
                {!! Form::label('description', 'Opis:', ['class' => 'input']) !!}
                <div class='ui form'>
                    {!! Form::textarea('description', $book->description, ['class' => 'ui pointing label', 'style' => 'margin: 5px 20px 20px 20px; resize: none']) !!}
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