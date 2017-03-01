@extends('admin')

@section('title', '| Add Tag')

@section('body')

<h1 class='us header'>Dodaj tag</h1>
{!! Form::open(['route' => 'admin.technology.store', 'enctype' => 'multipart/form-data']) !!}
    <div class="ui invertedform">
        <div class="field">
            {!! Form::label('name', 'Tytuł:', ['class' => 'item']) !!}
                <div class="ui left icon input">
                    {!! Form::text('name', null, ['class' => 'ui pointing label', 'placeholder' => 'HTML5', 'style' => 'margin: 5px 20px 20px 20px;']) !!}
                    <i class="code icon" style="margin: -7px 0 0 17px;"></i>
                </div>
                <div class="ui left icon input">
                    <i class="file image icon" style="margin-left: 20px;"></i>
                    {!! Form::file('thumbnail', ['class' => 'ui pointing label']) !!}
                </div>
        </div>
        <div class="field">
            {!! Form::submit('Zapisz', ['class'=>'ui green button']) !!}
            {!! link_to(URL::previous(), 'Powrót', ['class' => 'ui grey button']) !!}
        </div>
{!! Form::close() !!}

@endsection