@extends('main')

@section('title', '| Library')

@section('css')
    <link href="/css/animate.css" rel="stylesheet" type="text/css">
@endsection

@section('body')
<div id="book-panel">
    <img id="bookImage" src="/img/page/book-page-low.jpg" alt="Books photo">
       <div class="book-wrapper">
            <h1 class="book-heading">Moja biblioteczka</h1>
            <h2 class="book-subheading">Czytam książki branżowe, żeby bardziej wgłębić się w programowanie</h2>
            <div class="book-all-wrapper">
            @foreach($books as $book)
                <div class="book-one-wrapper animated fadeInLeft">
                    <div class="book-image">
                        <img class="animated fadeInLeft" src="/img/book/{{$book->thumbnail}}">
                    </div>       
                    <a href="{{route('pages.book.show', $book->id)}}" class="book-title animated fadeInLeft">{{$book->title}}</a>      
                </div>
            @endforeach
            </div>
        </div>
    {{ $books->links('vendor.pagination.client-paginator') }}
</div>
@endsection

@section('scripts')
<script>        
(function(){
    var imgBook = new Image();
    imgBook.src = '/img/page/book-page.jpg';

    imgBook.onload = function() {
        $('#bookImage').attr({src: imgBook.src});
    };})();
</script>
@endsection