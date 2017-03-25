@extends('main')

@section('title', '| Read Post')

@section('body')
<main class="blog-panel blog-panel-show">
    <img id="blogImage" src="/img/page/blog-page-low.jpg" alt="Blog photo">
    <article class="blog-wrapper">
        <h2 class="blog-title">{{ $post->title }}</h2>
        <article class="blog-segment">
            <p class="blog-paragraph">{{ $post->content }}</p>
            <a href="{{route('pages.post.index')}}" class='blog-button'>Powrót</a>
        </article>
    </article>
</main>
@endsection

@section("scripts")
<script>
    (function(){
        var imgBlog = new Image();
        imgBlog.src = '/img/page/blog-page.jpg';               

        imgBlog.onload = function() {
            $('#blogImage').attr({src: imgBlog.src});
        };
    })();
</script>
@endsection