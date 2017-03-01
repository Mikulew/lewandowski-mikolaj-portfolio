@extends('admin')

@section('title', '| Admin Blog')

@section('body')

<h1 class="ui header">Moje napisane posty na blogu</h1>

<a href="{{route('admin.posts.create')}}" class="ui green button">Dodaj nowy post</a>

<table class="ui celled striped table">
  <thead>
    <tr><th colspan="6">
      Moje posty na blogu
    </th>
  </tr></thead>
  <tbody>
    <tr>
      <td class="collapsing active">
        <i class="hashtag icon"></i> ID
      </td>
      <td class="active">
         <i class="book icon"></i> Tytuł
      </td>
      <td class="active">
         <i class="file text icon"></i> Treść
      </td>
      <td class="active">
          <i class="file open outline icon"></i> Podgląd
      </td>
      <td class="active">
          <i class="edit icon"></i> Edycja
      </td>
      <td class="active">
          <i class="erase icon"></i> Usuwanie
      </td>
    </tr>
    @foreach($posts as $post)
    <tr>
      <td class="collapsing">
        <i class="hashtag icon"></i> {{ $post->id }}
      </td>
      <td class="collapsing">
         <i class="book icon"></i> {{ $post->title }}
      </td>
      <td>
          <i class="file text icon"></i> {{ substr($post->content, 0, 50) }} {{ strlen($post->content)>50?"...":"" }}
      </td>
      <td>
          <a href="{{route('admin.posts.show', $post->id)}}" class="ui yellow button">Pokaż</a>
      </td>
      <td>
          <a href="{{route('admin.posts.edit', $post->id)}}" class="ui blue button">Edytuj</a>
      </td>
      <td>
          <a href="{{route('admin.posts.destroy', $post->id)}}" class="ui red button">Usuń</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $posts->links('vendor.pagination.paginator') }}

@endsection

{{ substr($post->body, 0, 50) }}{{strlen($post->body)>50?"...":""}}