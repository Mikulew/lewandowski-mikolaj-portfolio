@extends('main')

@section('title', '| Read Post')

@section('body')

    <h1 class="ui header">Blog front-endowca</h1>
    <div class="ui container">
       <h3 class="ui block top attached header">{{ $post->title }}</h3>
        <div class="ui attached segment">
            <p>{{ $post->content }}</p>
            <a href="{{route('pages.post.index')}}" class='ui grey button'>Powrót</a>
        </div>
    </div>
@endsection