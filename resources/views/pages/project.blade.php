@extends('main')

@section('title', '| Projects')

@section('css')
    <link href="/css/animate.css" rel="stylesheet" type="text/css">
@endsection

@section('body')
<main id="project-panel">
    <img id="projectImage" src="/img/page/project-page-low.jpg" alt="pavement photo">
    <article class="project-wrapper">
        <h1 class="project-heading">Moje projekty</h1>
        <h2 class="project-subheading">Zrealizowane projekty dla klientów</h2>
        @foreach($projects as $project)
            <h3 class="project-title animated fadeInDown">{{ $project->title }}</h3>
            <section class="project-container-example">
                <article class="project-paragraph animated fadeInLeft">{!! $project->description !!}</article>
                <div class="project-container-image animated fadeInRight">
                    <img class="project-image" src="img/project/{{$project->thumbnail}}" alt="{{$project->title}}">
                </div>
            </section>
            <a class="project-button animated fadeIn" href="{{$project->link}}" target="_blank">Link&nbsp;do&nbsp;projektu</a>
            <h4 class="project-title animated fadeIn">Użyte technologie</h4>
            <section class="project-wrapper-technology">
            @foreach($project->technology as $technology)
               <div class="project-container-technology animated fadeInUp">
                    <img class="project-image-technology" src="/img/technology/{{$technology->thumbnail}}" alt="{{$technology->name}}">
                    <p class="project-name-technology">{{ $technology->name }}</p>
                </div>
            @endforeach
            </section>
        @endforeach
    </article>
    {{ $projects->links('vendor.pagination.client-paginator') }}
</main>
@endsection