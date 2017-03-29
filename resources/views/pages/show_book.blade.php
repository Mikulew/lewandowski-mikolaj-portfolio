@extends('main')

@section('title', '| Show Book')

@section('css')
    <link href="/css/animate.css" rel="stylesheet" type="text/css">
@endsection

@section('body')
<main id="book-panel">
    <img id="bookImage" src="/img/page/book-page-low.jpg" alt="Books photo">
    <article class="book-wrapper">
        <h1 class="book-heading animated fadeInDown">{{$book->title}}</h1>
        <section class="book-show-wrapper">
            <img class="book-show-img animated fadeInLeft" src="/img/book/{{$book->thumbnail}}">     
            <div class="book-details animated fadeIn">
                <p class="book-title"><span class="book-color">Autor:</span> {{$book->author}}</p> 
                <p class="book-title">{{$book->pages}} <span class="book-color">stron</span></p>
                <a class="book-title" href="{{$book->link}}" target="_blank">Link do książki</a> 
            </div>
            <article class="book-description animated fadeInRight">
                <p>{{$book->description}}</p>
            </article>
        </section>
        <a href="{{route('pages.book.index')}}" class="book-button">Powrót</a>
    </article>
</main>
@endsection