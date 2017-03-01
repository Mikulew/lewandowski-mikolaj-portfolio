@extends('main')

@section('title', '| JavaScript')

@section('body')

    <h1 class="ui header">Gry i animacje</h1>
    <p>W wolnej chwili lubię bawić się JavaSriptem robiąc przeróżne animacje, nieskomplikowane gry czy małe aplikacje</p>
    <div class="ui items">
    @foreach($canvases as $canvas)
    <div class="item">
        <div class="ui medium image">
            <img src="/img/canvas/{{$canvas->thumbnail}}">
        </div>
        <div class="content">
        <div class="ui huge message">{{$canvas->title}}</div>
            <div class="description">
              <p>{{$canvas->description}}</p>
            </div>
            <div class="meta">
                <div class="ui mini horizontal divided list">
            @foreach($canvas->technology as $technology)
                    <div class="item">
                        <div class="ui label">{{ $technology->name }}</div>
                        <img class='ui tiny image' src="/img/technology/{{$technology->thumbnail}}" alt="{{$technology->name}}">
                    </div>           
            @endforeach
                </div>
            </div>
            <div class="meta">
                <span class="stay"><i class="github icon"></i><a href="{{$canvas->link}}" target="_blank">Link</a></span>
            </div>
        </div>
    </div>
    @endforeach
    </div>

@endsection