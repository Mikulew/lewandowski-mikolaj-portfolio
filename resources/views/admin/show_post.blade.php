@extends('admin')

@section('title', '| Show Post')

@section('body')

<h1 class="ui header">Wpis posta na blogu</h1>

<div class="ui grid">
        <div class="column three column row">
            <div class="left floated column">
                <a href="{{route('admin.posts.edit', $post->id)}}" class="ui blue button">Edytuj</a>
                <a href="{{route('admin.posts.destroy', $post->id)}}" class="ui red button">Usuń</a>
                <a href="{{route('admin.posts')}}" class='ui grey button'>Powrót</a>
            </div>
            <div class="right floated column">
                <div class="row">
                    <div class="column">
                        <label class="ui blue label">URL Slug:&nbsp; <a href="{{route('pages.post.show', $post->slug)}}" target="_blank">{{url($post->slug)}}</a></label>                 
                    </div>
                    <div class="column">
                        <label class="ui red label">Created At:&nbsp; {{ date('M j, Y H:i', strtotime($post->created_at)) }}</label>
                        
                    </div>
                    <div class="column">
                        <label class="ui green label">Last Updated:&nbsp; {{ date('M j, Y H:i', strtotime($post->updated_at)) }}</label>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="ui container">
    <h3 class="ui block top attached header">{{ $post->title }}</h3>
    <div class="ui attached segment">
        <p>{{ $post->content }}</p>
    <div>
</div>
@endsection