@extends('main')

@section('title', '| Show Book')

@section('css')
    <link href="/css/animate.css" rel="stylesheet" type="text/css">
@endsection

@section('body')
<div id="book-panel">
    <img id="bookImage" src="/img/page/book-page-low.jpg" alt="Books photo">
    <div class="book-wrapper"> 
        <h1 class="book-heading animated fadeInDown">{{$book->title}}</h1>
        <div class="book-show-wrapper">
            <img class="book-show-img animated fadeInLeft" src="/img/book/{{$book->thumbnail}}">     
            <div class="book-details animated fadeIn">
                <p class="book-title"><span class="book-color">Autor:</span> {{$book->author}}</p> 
                <p class="book-title">{{$book->pages}} <span class="book-color">stron</span></p>
                <a class="book-title" href="{{$book->link}}" target="_blank">Link do książki</a> 
            </div>
            <div class="book-description animated fadeInRight">
                <p>{{$book->description}}</p>
            </div>
        </div>
        <a href="{{route('pages.book.index')}}" class="book-button">Powrót</a>
    </div>
</div>
@endsection

@section("scripts")
<script>
    (function(){
       var imgBook = new Image();
        imgBook.src = '/img/page/book-page.jpg';

        imgBook.onload = function() {
            $('#bookImage').attr({src: imgBook.src});
        };
    })();
</script>
@endsection