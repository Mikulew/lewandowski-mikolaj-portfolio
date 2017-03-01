@extends('admin')

@section('title', '| Admin Contact')

@section('body')

<h1 class="ui header">Wiadomości od klientów</h1>

<table class="ui celled striped table">
  <thead>
    <tr><th colspan="7">
      Wiadomości
    </th>
  </tr></thead>
  <tbody>
    <tr class="ui black celled table">
        <td class="collapsing active">
            <i class="hashtag icon"></i>
        </td>
        <td class="active">
            <i class="user icon"></i> Imię
        </td>

        <td class="active">
            <i class="mail icon"></i> Email
        </td>
        <td class="left aligned active">
            <i class="call icon"></i> Telefon
        </td>
        <td class="active">
            <i class="comment icon"></i> Wiadomość
        </td>
        <td class="collapsing active">
            <i class="file open outline icon"></i> Podgląd
        </td>
        <td class="collapsing active">
            <i class="erase icon"></i> Usuwanie
        </td>
    </tr>
    @foreach($contacts as $contact)
    <tr>
        <td class="collapsing">
            <i class="hashtag icon"></i> {{ $contact->id }}
        </td>
        <td class="collapsing"> 
            <i class="user icon"></i> {{ $contact->name }}
        </td>
        <td class="left aligned collapsing">
            <i class="mail icon"></i> {{ $contact->email }}
        </td>
        <td class="left aligned collapsing">
            <i class="call icon"></i> {{ $contact->phone }}
        </td>
        <td class="collapsing">
            <i class="comment icon"></i> {{ substr($contact->description, 0, 50) }} {{ strlen($contact->description)>50?"...":"" }}
        </td>
        <td>
          <a href="{{route('admin.contact.show', $contact->id)}}" class="ui yellow button">Pokaż</a>
        </td>
        <td class="right aligned collapsing">
            <a href="{{route('admin.contact.destroy', $contact->id)}}" class="ui red button">Usuń</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $contacts->links('vendor.pagination.paginator') }}


@endsection
