@extends('admin')

@section('title', '| Admin Canvas')

@section('body')

<h1 class="ui header">Moje animacje i gry</h1>

<a href="{{route('admin.canvas.create')}}" class="ui green button">Dodaj nową animację</a>

<table class="ui celled striped table">
  <thead>
    <tr><th colspan="7">
      Moje gry i animacje
    </th>
  </tr></thead>
  <tbody>
    <tr>
        <td class="collapsing active">
            <i class="game icon"></i> Kategoria
        </td>
        <td class="active">
            <i class="book icon"></i> Tytuł
        </td>
        <td class="active">
            <i class="code icon"></i> Technologie
        </td>
        <td class="active">
            <i class="file image outline icon"></i> Obrazek
        </td>
        <td class="collapsing active">
             <i class="attach icon"></i> Link
        </td>
        <td class="left aligned collapsing active">
            <i class="edit icon"></i> Edycja
        </td>
        <td class="left aligned collapsing active">
            <i class="erase icon"></i> Usuwanie
        </td>
    </tr>
    @foreach($canvases as $canvas)
    <tr>
        <td class="collapsing">
            <i class="game icon"></i> {{ ($canvas->category_id == 0)?"Gra":"Animacja" }}
        </td>
        <td>
            <i class="book icon"></i> {{ $canvas->title }}
        </td>
        <td>
            <i class="code icon"></i> 
            @foreach($canvas->technology as $technology)
                {{ $technology->name }} |
            @endforeach
        </td>
        <td>
            <img src="/img/canvas/{{ $canvas->thumbnail }}" width="150">
        </td>
        <td>
            <i class="attach icon"></i> <a href="{{ $canvas->link }}" target="_blank">Link</a>
        </td>
        <td class="left aligned collapsing">
            <a href="{{route('admin.canvas.edit', $canvas)}}" class="ui blue button">Edytuj</a>
        </td>
        <td class="left aligned collapsing">
            <a href="{{route('admin.canvas.destroy', $canvas)}}" class="ui red button">Usuń</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $canvases->links('vendor.pagination.paginator') }}


@endsection
