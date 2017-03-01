@extends('admin')

@section('title', '| Edit Canvas')

@section('body')

<h1 class='us header'>Edytuj animację</h1>
{!! Form::model($canvas, ['route' => ['admin.canvas.update', $canvas], 'enctype' => 'multipart/form-data']) !!}
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
            {!! Form::label('category_id', 'Kategiria [0 to gra, 1 to animacja]:', ['class' => 'item']) !!}
                <div class="ui left icon input">
                    {!! Form::text('author', $canvas->category_id, ['class' => 'ui pointing label', 'style' => 'margin: 0 20px;']) !!}
                    <i class="game icon" style="margin-left: 20px;"></i>
                </div>
            {!! Form::label('title', 'Tytuł:', ['class' => 'item']) !!}
                <div class="ui left icon input">
                    {!! Form::text('title', $canvas->title, ['class' => 'ui pointing label', 'style' => 'margin: 0 20px;']) !!}
                    <i class="book icon" style="margin-left: 20px;"></i>
                </div>
        </div>
        <div class="field">
            {!! Form::label('thumbnail', 'Obrazek:', ['class' => 'item']) !!}
                <div class="ui left icon input">
                    <i class="file image icon" style="margin-left: 20px;"></i>
                    {!! Form::file('thumbnail', ['class' => 'ui pointing label']) !!}
                    {!! Form::hidden('old_thumbnail', $canvas->thumbnail) !!}
                </div>
        </div>
            <div class="field">
                {!! Form::label('script', 'Skrypty:', ['class' => 'item']) !!}
                    <div class="ui form">
                        {!! Form::text('pages', $canvas->pages, ['class' => 'ui pointing label', 'style' => 'margin: 5px 20px 20px 20px;']) !!}
                    </div>
            </div>
            <div class='field'>
                <div class='ui form'>
                {!! Form::label('link', 'Link:', ['class' => 'item']) !!}
                    <div class="ui form">
                        {!! Form::text('link', $canvas->link, ['class' => 'ui pointing label', 'style' => 'margin: 5px 20px 20px 20px; resize: none;']) !!}
                    </div>
                </div>
            </div>
            <div class="field">
                    {!! Form::label('description', 'Opis:', ['class' => 'item']) !!}
                <div class="ui form">
                    {!! Form::textarea('description', $canvas->description, ['class' => 'ui pointing label', 'style' => 'margin: 5px 20px 20px 20px; resize: none']) !!}
                </div>
            </div>
            <div class="ui mini horizontal divided list">
                <div class="item" style="padding-right: 0; font-size: 0;"></div>
                @foreach($technologies as $technology)
                <div class="item">
                    <div class="ui checkbox">

                        @php 
                            $isTech = false
                        @endphp
                        @foreach($canvas->technology as $currentTechnology)
                            @if($technology->id == $currentTechnology->id)
                                @php 
                                    $isTech = true
                                @endphp
                            @endif
                        @endforeach

                        @if($isTech)
                            <input type="checkbox" name="technology[{{$technology->id}}]" value="{{$technology->id}}" id="{{$technology->name}}" style="cursor: pointer;" checked="checked">

                        @else
                            <input type="checkbox" name="technology[{{$technology->id}}]" value="{{$technology->id}}" id="{{$technology->name}}" style="cursor: pointer;">
                        @endif
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
{!! Form::close() !!}

@endsection