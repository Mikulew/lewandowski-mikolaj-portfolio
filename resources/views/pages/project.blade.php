@extends('main')

@section('title', '| Projects')

@section('body')

    <h1 class="ui header">Moje projekty</h1>
        <h4 class="ui horizontal divider header">
            <i class="tags icon"></i>
            Lista projektów
        </h4>
        {{ $projects->links('vendor.pagination.paginator') }}
    @foreach($projects as $project)
        <h4 class="ui horizontal divider header">
            <i class="tag icon"></i>
            {{ $project->title }}
        </h4>
        <p>{!! $project->description !!}</p>
        <h4 class="ui horizontal divider header">
        <i class="code icon"></i>
            Technologie
        </h4>
<!--        <p>HTML5, CSS3, SASS, gulp.js, Semantic UI, PHP, Laravel</p>-->
        @foreach($project->technology as $technology)
        <div class="ui mini image">
            <img src="/img/technology/{{$technology->thumbnail}}" alt="{{$technology->name}}">
        </div>
        <span class="ui label">{{ $technology->name }}</span>
        @endforeach
        <h4 class="ui horizontal divider header">
        <i class="attach retro icon"></i>
            Link do projektu
        </h4>
        <a class="ui button" href="{{$project->link}}" target="_blank">Kliknij tutaj</a>

        <h4 class="ui horizontal divider header">
        <i class="camera retro icon"></i>
            Podgląd do projektu
        </h4>
        <img class="ui fluid image" src="img/project/{{$project->thumbnail}}" alt="laravel-blog">

    @endforeach

@endsection