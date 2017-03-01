@extends('admin')

@section('title', '| Admin Project')

@section('body')

<h1 class="ui header">Moje projekty wykonane dla klientów</h1>

<a href="{{route('admin.project.create')}}" class="ui green button">Dodaj nowy projekt</a>

<table class="ui celled striped table">
  <thead>
    <tr><th colspan="7">
      Moje projekty
    </th>
  </tr></thead>
  <tbody>
    <tr>
      <td class="collapsing active">
         <i class="book icon"></i> Tytuł
      </td>
      <td class="collapsing active">
         <i class="attach icon"></i> Link
      </td>
      <td class="active">
          <i class="file image outline icon"></i> Obrazek
      </td>
      <td class="collapsing active">
          <i class="edit icon"></i>&nbsp;Edycja
      </td>
      <td class="collapsing active">
          <i class="erase icon"></i>&nbsp;Usuwanie
      </td>
    </tr>
    @foreach($projects as $project)
    <tr>
      <td class="collapsing">
         <i class="book icon"></i> {{ $project->title }}
      </td>
      <td>
          <i class="attach icon"></i> <a href="{{ $project->link }}" target="_blank">Link</a>
      </td>
      <td class="collapsing">
         <img src="/img/project/{{ $project->thumbnail }}" width="200">
      </td>
      <td class="left aligned">
          <a href="{{route('admin.project.edit', $project)}}" class="ui blue button">Edytuj</a>
      </td>
      <td class="left aligned">
          <a href="{{route('admin.project.destroy', $project)}}" class="ui red button">Usuń</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $projects->links('vendor.pagination.paginator') }}

@endsection
