@extends('admin')

@section('title', '| Edit Post')

@section('body')

<h1 class='us header'>Edytuj post</h1>
<div class="ui container">
{!! Form::model($post, ['route' => ['admin.posts.update', $post], 'enctype' => 'multipart/form-data']) !!}
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
    <div class="ui form">
        <div class="ui field">
            {!! Form::label('title', 'Tytuł:', ['class' => 'item']) !!}
                <div class="ui left icon input">
                    {!! Form::text('title', $post->title, ['class' => 'ui pointing label', 'style' => 'margin: 5px 20px 20px 20px;']) !!}
                    <i class="book icon" style="margin-left: 20px;"></i>
                </div>
        </div>
        <div class="ui field">
            {!! Form::label('content', 'Treść:', ['class' => 'item']) !!}
                <div class="ui left icon input">
                    {!! Form::textarea('content', $post->content, ['class' => 'ui pointing label', 'style' => 'margin: 5px 20px 20px 20px;']) !!}
                </div>
        </div>
    </div>
                {!! Form::submit('Zapisz zmiany', ['class'=>'ui green button']) !!}
                {!! link_to(URL::previous(), 'Powrót', ['class' => 'ui grey button']) !!}
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection