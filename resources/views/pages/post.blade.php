@extends('main')

@section('title', '| Blog')

@section('body')
<div class="blog-panel">
    <img id="blogImage" src="/img/page/blog-page-low.jpg" alt="Blog photo">
    <h1 class="blog-heading">Blog front-endowca</h1>
    <div class="blog-wrapper">
        @foreach($posts as $post)
        <h3 class="blog-title">{{ $post->title }}</h3>
        <div class="blog-segment">
            <p class="blog-paragraph">{{ substr($post->content, 0, 1000) }}{{ strlen($post->content)>1000?"...":"" }}</p>
            <a href="{{url('blog', $post->slug)}}" class="blog-button">Czytaj więcej</a>
        </div>
        @endforeach
    </div>
    <div class="blog-pagination-wrapper">
        {{ $posts->links('vendor.pagination.client-paginator') }}
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