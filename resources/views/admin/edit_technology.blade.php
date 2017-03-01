@extends('admin')

@section('title', '| Edit Tag')

@section('body')

<h1 class='us header'>Edytuj tag</h1>
{!! Form::model($technology, ['route' => ['admin.technology.update', $technology], 'enctype' => 'multipart/form-data']) !!}
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
            {!! Form::label('name', 'Nazwa technologii:', ['class' => 'item']) !!}
                <div class="ui left icon input">
                    {!! Form::text('name', $technology->name, ['class' => 'ui pointing label', 'style' => 'margin: 0 20px 20px 20px;']) !!}
                    <i class="code icon" style="margin: -10px 0 0 20px;"></i>
                </div>
                <div class="ui left icon input">
                    <i class="file image icon" style="margin-left: 20px;"></i>
                    {!! Form::file('thumbnail', ['class' => 'ui pointing label']) !!}
                    {!! Form::hidden('old_thumbnail', $technology->thumbnail) !!}
                </div>
        </div>
        <div class="field">
            {!! Form::submit('Zapisz', ['class'=>'ui green button']) !!}
            {!! link_to(URL::previous(), 'Powrót', ['class' => 'ui grey button']) !!}
        </div>
    </div>
{!! Form::close() !!}

@endsection