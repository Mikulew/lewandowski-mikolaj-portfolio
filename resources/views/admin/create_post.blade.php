@extends('admin')

@section('title', '| Add Post')

@section('body')

<h1 class='ui header'>Dodaj post do swojego bloga</h1>
    {!! Form::open(array('route' => "admin.posts.store", 'data-parsley-validate' => '')) !!}
        <div class="ui invertedform">
            <div class="field">
                {!! Form::label('title', 'Tytuł:', ['class' => 'item']) !!}
                    <div class="ui form">
                        {!! Form::text('title', null, ['class' => 'ui pointing label', 'placeholder' => 'Przykładowy tytuł', 'style' => 'margin: 5px 20px 20px 20px;']) !!}
                    </div>
            </div>
            <div class="field">
                {!! Form::label('content', 'Treść:', ['class' => 'item']) !!}
                <div class="ui form">
                    {!! Form::textarea('content', null, ['class' => 'ui pointing label', 'placeholder' => 'Fantastyczna przykładowa treść posta', 'style' => 'margin: 5px 20px 20px 20px;']) !!}
                </div>
            </div>
            <div class="field">
                {!! Form::submit('Zapisz', ['class'=>'ui green button']) !!}
                <a href="{{route('admin.posts')}}" class='ui grey button'>Powrót</a>
            </div>
        </div>
@endsection