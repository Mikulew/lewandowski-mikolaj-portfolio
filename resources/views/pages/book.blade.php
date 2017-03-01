@extends('main')

@section('title', '| Library')

@section('body')

    <h1 class="ui header">Moja biblioteczka</h1>
    @foreach($books as $book)
    <div class="ui items">
        <div class="item">
            <div class="image">
                <img src="img/book/{{$book->thumbnail}}">
            </div>
            <div class="content">
                <a class="header">{{$book->title}}</a>
                <div class="meta">
                      <p class="ui red label">{{ $book->author }}</p> &nbsp;
                      <p class="ui yellow label">Stron: {{ $book->pages }}</p> <br>
                      <span>{{$book->description}}</span>
                </div>
                <div class="description">
                    <p></p>
                </div>
                <div class="extra">
                    
                    <a class="ui blue label" href='{{ $book->link }}' target="_blank">Link do książki</a>
<!--                    <a class="ui green label" href="#">Czytaj moją opinię</a>-->
                </div>
            </div>
        </div>           
    </div>
    @endforeach
    {{ $books->links('vendor.pagination.paginator') }}

@endsection