@extends('main')

@section('title', '| Blog')

@section('body')
    <img id="blogImage" src="/img/page/blog-page-low.jpg" alt="Blog photo">
    <h1 class="blog-heading">Blog front-endowca</h1>
    <div class="ui container">
        @foreach($posts as $post)
        <h3 class="blog-title">{{ $post->title }}</h3>
        <div class="blog-segment">
            <p class="blog-paragraph">{{ substr($post->content, 0, 2500) }}{{ strlen($post->content)>2500?"...":"" }}</p>
            <a href="{{url('blog', $post->slug)}}" class="blog-button">Czytaj więcej</a>
        </div>
        @endforeach
    </div>
    
    {{ $posts->links('vendor.pagination.client-paginator') }}

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