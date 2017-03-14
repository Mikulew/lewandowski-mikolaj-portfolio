@extends('main')

@section('title', '| Library')

@section('css')
    <link href="css/animate.css" rel="stylesheet" type="text/css">
@endsection

@section('body')
<div class="book-container">
<img id="bookImage" src="/img/page/book-page-low.jpg" alt="Books photo">
   <div class="book-wrapper">
        <h1 class="book-heading">Moja biblioteczka</h1>
        <div class="book-all-wrapper">
        @foreach($books as $book)
            <div class="book-one-wrapper">
                <div class="book-image">
                    <a href="#">
                        <img class="animated fadeInLeft" src="img/book/{{$book->thumbnail}}">
                    </a>
                </div>       
                <p class="book-header animated fadeInLeft">{{$book->title}}</p>      
            </div>
        @endforeach
        </div>
    </div>
    {{ $books->links('vendor.pagination.client-paginator') }}
@endsection
</div>

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