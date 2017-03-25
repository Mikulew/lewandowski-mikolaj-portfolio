@extends('main')

@section('title', '| Blog')

@section('body')
<main class="blog-panel">
    <img id="blogImage" src="/img/page/blog-page-low.jpg" alt="Blog photo">
    <h1 class="blog-heading">Blog front-endowca</h1>
    <article class="blog-wrapper">
        @foreach($posts as $post)
        <h2 class="blog-title">{{ $post->title }}</h2>
        <article class="blog-segment">
            <p class="blog-paragraph">{{ substr($post->content, 0, 1000) }}{{ strlen($post->content)>1000?"...":"" }}</p>
            <a href="{{url('blog', $post->slug)}}" class="blog-button">Czytaj więcej</a>
        </article>
        @endforeach
    </article>
    <div>
        {{ $posts->links('vendor.pagination.client-paginator') }}
    </div>
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