@extends('main')

@section('title', '| JavaScript')

@section('css')
    <link href="/css/animate.css" rel="stylesheet" type="text/css">
@endsection

@section('body')
<main id="canvas-panel">
    <img id="canvasImage" src="/img/page/canvas-page-low.jpg" alt="Game photo">
    <article class="canvas-wrapper">
        <h1 class="canvas-heading">Gry i animacje</h1>
        <h2 class="canvas-subheading">W wolnej chwili lubię bawić się JavaSriptem robiąc przeróżne animacje, nieskomplikowane gry czy małe aplikacje</h2>
        <section class="canvas-all-wrapper">
            @foreach($canvases as $canvas)
                <article class="canvas-one-wrapper animated fadeInLeft">
                    <h3 class="canvas-title">{{$canvas->title}}</h3>
                    <div class="canvas-image">
                        <img src="/img/canvas/{{$canvas->thumbnail}}">
                    </div>
                    <article class="canvas-description">
                      <p>{{$canvas->description}}</p>
                    </article>
                    <section class="canvas-buttons">
                            <a class="canvas-link" href="{{$canvas->io}}" target="_blank">Zobacz</a>
                            <a class="canvas-link" href="{{$canvas->link}}" target="_blank">GitHub</a>
                    </section>
                    <h4 class="canvas-title">Użyte technologie</h4>
                    <section class="canvas-wrapper-technology">
                        @foreach($canvas->technology as $technology)
                            <div class="canvas-container-technology">
                                <img class="canvas-image-technology" src="/img/technology/{{$technology->thumbnail}}" alt="{{$technology->name}}">
                                <p class="canvas-name-technology">{{ $technology->name }}</p>
                            </div>           
                        @endforeach
                    </section>
                </article>
            @endforeach
        </section>
    </article>
    {{ $canvases->links('vendor.pagination.client-paginator') }}
</main>
@endsection