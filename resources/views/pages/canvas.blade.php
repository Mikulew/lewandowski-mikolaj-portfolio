@extends('main')

@section('title', '| JavaScript')

@section('css')
    <link href="/css/animate.css" rel="stylesheet" type="text/css">
@endsection

@section('body')
<div id="canvas-panel">
    <img id="canvasImage" src="/img/page/canvas-page-low.jpg" alt="Game photo">
    <div class="canvas-wrapper">
        <h1 class="canvas-heading">Gry i animacje</h1>
        <h2 class="canvas-subheading">W wolnej chwili lubię bawić się JavaSriptem robiąc przeróżne animacje, nieskomplikowane gry czy małe aplikacje</h2>
        <div class="canvas-all-wrapper">
            @foreach($canvases as $canvas)
                <div class="canvas-one-wrapper animated fadeInLeft">
                    <p class="canvas-title">{{$canvas->title}}</p>
                    <div class="canvas-image">
                        <img src="/img/canvas/{{$canvas->thumbnail}}">
                    </div>
                    <div class="canvas-description">
                      <p>{{$canvas->description}}</p>
                    </div>
                    <div class="canvas-buttons">
                            <a class="canvas-link" href="{{$canvas->io}}" target="_blank">Zobacz</a>
                            <a class="canvas-link" href="{{$canvas->link}}" target="_blank">GitHub</a>
                    </div>
                    <h3 class="project-title">Użyte technologie</h3>
                    <div class="canvas-wrapper-technology">
                        @foreach($canvas->technology as $technology)
                            <div class="canvas-container-technology">
                                <img class="canvas-image-technology" src="/img/technology/{{$technology->thumbnail}}" alt="{{$technology->name}}">
                                <div class="canvas-name-technology">{{ $technology->name }}</div> 
                            </div>           
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{ $canvases->links('vendor.pagination.client-paginator') }}
</div>
@endsection


@section('scripts')
<script>        
(function(){
    var imgCanvas = new Image();
    imgCanvas.src = '/img/page/canvas-page.jpg';

    imgCanvas.onload = function() {
        $('#canvasImage').attr({src: imgCanvas.src});
    };})();
</script>
@endsection