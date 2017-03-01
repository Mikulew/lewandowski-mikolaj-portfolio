@extends('admin')

@section('title', '| Admin Tags')

@section('body')

<h1 class="ui header">Technologie webowe</h1>
<a href="{{route('admin.technology.create')}}" class="ui green button">Dodaj tag</a>
<table class="ui celled striped table">
    <thead>
        <tr>
            <th colspan="7">Tagi do projektów i animacji</th>
        </tr>
    </thead>
  <tbody>
    <tr>
        <td class="collapsing active">
            <i class="hashtag icon"></i> ID
        </td>
        <td class="collapsing active">
            <i class="code icon"></i> Technologia
        </td>
        <td class="active">
            <i class="file image icon"></i> Obrazek
        </td>
        <td class="left aligned collapsing active">
            <i class="edit icon"></i> Edycja
        </td>
    </tr>
    @foreach($technologies as $technology)
    <tr>
        <td class="collapsing">
            <i class="hashtag icon"></i> {{ $technology->id }}
        </td>
        <td class="collapsing">
            <i class="code icon"></i> {{ $technology->name }}
        </td>
        <td class="collapsing">
            <img src="/img/technology/{{$technology->thumbnail}}" height="100">
        </td>
        <td class="left aligned collapsing">
            <a href="{{route('admin.technology.edit', $technology)}}" class="ui blue button">Edytuj</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>




@endsection
