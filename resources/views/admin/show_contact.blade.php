@extends('admin')

@section('title', '| Show Contact')

@section('body')

<h1 class="ui header">Pokaż wiadomość</h1>

<div class="ui container">
    <h3 class="ui block top attached header">{{ $contact->name }}</h3>
    <div class="ui attached segment">
        <p>{{ $contact->description }}</p>
    </div>
    <h3 class="ui block bottom attached header">
        <div class="fluid">
            <i class="call icon"></i>
            <span>{{ $contact->phone }}</span>&ensp;&ensp;&ensp;&ensp;&ensp;
            <i class="mail icon"></i>
            <span>{{ $contact->email }}</span>
        </div>
    </h3>
        <div class="column three column row">
            <div class="left floated column">
                <a href="{{route('admin.contact.destroy', $contact->id)}}" class="ui red button">Usuń</a>
                <a href="{{route('admin.contact')}}" class='ui grey button'>Powrót</a>
            </div>
        </div>
</div>
@endsection