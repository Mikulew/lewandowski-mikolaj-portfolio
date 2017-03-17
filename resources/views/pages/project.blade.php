@extends('main')

@section('title', '| Projects')

@section('css')
    <link href="/css/animate.css" rel="stylesheet" type="text/css">
@endsection

@section('body')
<div id="project-panel">
    <img id="projectImage" src="/img/page/project-page-low.jpg" alt="pavement photo">
    <div class="project-wrapper">
        <h1 class="project-heading">Moje projekty</h1>
        @foreach($projects as $project)
            <h3 class="project-title animated fadeInDown">{{ $project->title }}</h3>
            <div class="project-cointainer-example">
                <div class="project-paragraph animated fadeInLeft">{!! $project->description !!}</div>
                <div class="project-container-image animated fadeInRight">
                    <img class="project-image" src="img/project/{{$project->thumbnail}}" alt="{{$project->title}}">
                </div>
            </div>
            <a class="project-button animated fadeIn" href="{{$project->link}}" target="_blank">Link&nbsp;do&nbsp;projektu</a>
            <h3 class="project-title animated fadeIn">Użyte technologie</h3>
            <div class="project-wrapper-technology">
            @foreach($project->technology as $technology)
               <div class="project-container-technology animated fadeInUp">
                    <img class="project-image-technology" src="/img/technology/{{$technology->thumbnail}}" alt="{{$technology->name}}">
                    <div class="project-name-technology">{{ $technology->name }}</div>
                </div>
            @endforeach
            </div>    
        @endforeach
    </div>
    {{ $projects->links('vendor.pagination.client-paginator') }}
</div>
@endsection


@section('scripts')
<script>        
(function(){
    var imgProject = new Image();
    imgProject.src = '/img/page/project-page.jpg';

    imgProject.onload = function() {
        $('#projectImage').attr({src: imgProject.src});
    };})();
</script>
@endsection