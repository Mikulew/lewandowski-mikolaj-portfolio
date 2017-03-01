@extends('main')

@section('title', '| Blog')

@section('body')

    <h1 class="ui header">Blog front-endowca</h1>
    <div class="ui container">
        @foreach($posts as $post)
        <h3 class="ui top attached block header">{{ $post->title }}</h3>
        <div class="ui attached segment">
            <p>{{ substr($post->content, 0, 2500) }}{{ strlen($post->content)>2500?"...":"" }}</p>
            <a href="{{url('blog', $post->slug)}}" class="ui blue button">Czytaj więcej</a>
        </div>
        @endforeach
    </div>
    
    {{ $posts->links('vendor.pagination.paginator') }}

@endsection