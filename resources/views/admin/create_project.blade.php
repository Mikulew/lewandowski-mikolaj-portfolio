@extends('admin')

@section('title', '| Add Project')

@section('body')

<h1 class='us header'>Dodaj projekt do swojego portfolio</h1>
{!! Form::open(['route' => 'admin.project.store', 'enctype' => 'multipart/form-data']) !!}
    <div class="ui invertedform">
        <div class="field">
            {!! Form::label('title', 'Tytuł:', ['class' => 'item']) !!}
                <div class="ui left icon input">
                    {!! Form::text('title', null, ['class' => 'ui pointing label', 'placeholder' => 'Firma XYZ', 'style' => 'margin: 0 20px;']) !!}
                    <i class="book icon" style="margin-left: 20px;"></i>
                </div>
            {!! Form::label('thumbnail', 'Obrazek:', ['class' => 'item']) !!}
                <div class="ui left icon input">
                    <i class="file image icon" style="margin-left: 20px;"></i>
                    {!! Form::file('thumbnail', ['class' => 'ui pointing label']) !!}
            </div>
            <div class='field'>
                {!! Form::label('link', 'Link:', ['class' => 'item']) !!}
                <div class="ui form">
                    {!! Form::text('link', null, ['class' => 'ui pointing label', 'placeholder' => 'www.firma-xyz.pl', 'style' => 'margin: 5px 20px 20px 20px;']) !!}
                </div>
            </div>
            <div class='field'>
                {!! Form::label('description', 'Opis:', ['class' => 'item']) !!}
                <div class="ui form">
                    {!! Form::textarea('description', null, ['class' => 'ui label', 'placeholder' => 'Strona pokazująca jak firma...', 'style' => 'margin: 5px 20px 20px 20px; resize: none;']) !!}
                </div>
            </div>
            <div class="ui mini horizontal divided list">
                <div class="item" style="padding-right: 0; font-size: 0;"></div>
                @foreach($technologies as $technology)
                <div class="item">
                    <div class="ui checkbox">
                        <input type="checkbox" name="technology[{{$technology->id}}]" value="{{$technology->id}}" id="{{$technology->name}}" style="cursor: pointer;">
                        {!! Form::label($technology->name, $technology->name, ['style' => 'cursor: pointer;']) !!}
                        <img class="ui image" src='/img/technology/{{$technology->thumbnail}}' height="35">
                        <br>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="field">
                {!! Form::submit('Zapisz', ['class'=>'ui green button']) !!}
                {!! link_to(URL::previous(), 'Powrót', ['class' => 'ui grey button']) !!}
            </div>
        </div>
    </div>
{!! Form::close() !!}

@endsection