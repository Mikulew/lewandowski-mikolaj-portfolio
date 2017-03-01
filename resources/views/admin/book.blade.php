@extends('admin')

@section('title', '| Admin Library')

@section('body')

<h1 class="ui header">Moje przeczytane książki</h1>

<a href="{{route('admin.book.create')}}" class="ui green button">Dodaj nową książkę</a>

<table class="ui celled striped table">
  <thead>
    <tr><th colspan="7">
      Biblioteczka
    </th>
  </tr></thead>
  <tbody>
    <tr>
        <td class="collapsing active">
            <i class="user icon"></i> Autor
        </td>
        <td class="collapsing active">
            <i class="book icon"></i> Tytuł
        </td>
        <td class="collapsing active">
           <i class="file icon"></i> Strony
        </td>
        <td class="collapsing active">
            <i class="file image outline icon"></i> Obrazek
        </td>
        <td class="collapsing active">
            <i class="attach icon"></i> Link
        </td>
        <td class="collapsing active">
            <i class="edit icon"></i> Edycja
        </td>
        <td class="collapsing active">
            <i class="erase icon"></i> Usuwanie
        </td>
    </tr>
    @foreach($books as $book)
    <tr>
        <td>
            <i class="user icon"></i> {{ $book->author }}
        </td>
        <td>
            <i class="book icon"></i> {{ $book->title }}
        </td>
        <td>
            <i class="file icon"></i> {{ $book->pages }}
        </td>
        <td class="collapsing">
            <img src="/img/book/{{ $book->thumbnail }}" width="100">
        </td>
        <td>
            <i class="attach icon"></i> <a href="{{ $book->link }}" target="_blank">Link</a>
        </td>
        <td>
            <a href="{{route('admin.book.edit', $book)}}" class="ui blue button">Edytuj</a>
        </td>
        <td>
            <a href="{{route('admin.book.destroy', $book)}}" class="ui red button">Usuń</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $books->links('vendor.pagination.paginator') }}



@endsection
