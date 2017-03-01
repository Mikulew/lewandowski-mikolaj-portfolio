@extends('admin')

@section('title', '| Edit Project')

@section('body')

<h1 class='us header'>Edytuj projekt</h1>
{!! Form::model($project, ['route' => ['admin.project.update', $project],'enctype' => 'multipart/form-data']) !!}
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
            {!! Form::label('title', 'Tytuł:', ['class' => 'item']) !!}
                <div class="ui left icon input">
                    {!! Form::text('title', $project->title, ['class' => 'ui pointing label', 'style' => 'margin: 0 20px;']) !!}
                    <i class="book icon" style="margin-left: 20px;"></i>
                </div>
            {!! Form::label('thumbnail', 'Obrazek:', ['class' => 'item']) !!}
                <div class="ui left icon input">
                    <i class="file image icon" style="margin-left: 20px;"></i>
                    {!! Form::file('thumbnail', ['class' => 'ui pointing label']) !!}
                    {!! Form::hidden('old_thumbnail', $project->thumbnail) !!}
                </div>
            <div class='field'>
                {!! Form::label('link', 'Link:', ['class' => 'item']) !!}
                <div class="ui form">
                    {!! Form::text('link', $project->link, ['class' => 'ui pointing label', 'style' => 'margin: 5px 20px 20px 20px;']) !!}
                </div>
            </div>
            <div class='field'>
                {!! Form::label('description', 'Opis:', ['class' => 'item']) !!}
                <div class="ui form">
                    {!! Form::textarea('description', $project->description, ['class' => 'ui pointing label', 'style' => 'margin: 5px 20px 20px 20px;']) !!}
                </div>
            </div>
                <div class="ui mini horizontal divided list">
                    @foreach($technologies as $technology)
                    <div class="item" style="padding-right: 0; font-size: 0;"></div>
                    <div class="item">
                        <div class="ui checkbox">

                            @php 
                                $isTech = false
                            @endphp
                            @foreach($project->technology as $currentTechnology)
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
    </div>
{!! Form::close() !!}

@endsection