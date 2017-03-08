@extends('main')

@section('title', '| Read Post')

@section('body')
<div class="blog-wrapper">
    <img id="blogImage" src="/img/page/blog-page-low.jpg" alt="Blog photo">
    <h3 class="blog-title" style="margin-top: 50px;">{{ $post->title }}</h3>
    <div class="blog-segment">
        <p class="blog-paragraph">{{ $post->content }}</p>
        <a href="{{route('pages.post.index')}}" class='blog-button'>Powrót</a>
    </div> 
</div>
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