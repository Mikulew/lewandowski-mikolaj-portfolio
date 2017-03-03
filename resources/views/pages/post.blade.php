@extends('main')

@section('title', '| Blog')

@section('css')
    <link href="/css/blog.css" rel="stylesheet">
@endsection

@section('body')

    <h1 class="blog-heading">Blog front-endowca</h1>
    <div class="ui container">
        @foreach($posts as $post)
        <h3 class="blog-title">{{ $post->title }}</h3>
        <div class="blog-segment">
            <p>{{ substr($post->content, 0, 2500) }}{{ strlen($post->content)>2500?"...":"" }}</p>
            <a href="{{url('blog', $post->slug)}}" class="blog-button">Czytaj więcej</a>
        </div>
        @endforeach
    </div>
    
    {{ $posts->links('vendor.pagination.paginator') }}

@endsection