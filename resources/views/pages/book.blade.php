@extends('main')

@section('title', '| Library')

@section('css')
    <link href="/css/animate.css" rel="stylesheet" type="text/css">
@endsection

@section('body')
<main id="book-panel">
   <img id="bookImage" src="/img/page/book-page-low.jpg" alt="Books photo">
   <article class="book-wrapper">
        <h1 class="book-heading">Moja biblioteczka</h1>
        <h2 class="book-subheading">Czytam książki branżowe, żeby bardziej wgłębić się w programowanie</h2>
        <section class="book-all-wrapper">
        @foreach($books as $book)
            <article class="book-one-wrapper animated fadeInLeft">
                <div class="book-image">
                    <img class="animated fadeInLeft" src="/img/book/{{$book->thumbnail}}">
                </div>
                <a href="{{route('pages.book.show', $book->id)}}" class="book-title animated fadeInLeft">{{$book->title}}</a>
            </article>
        @endforeach
        </section>
    </article>
    {{ $books->links('vendor.pagination.client-paginator') }}
</main>
@endsection