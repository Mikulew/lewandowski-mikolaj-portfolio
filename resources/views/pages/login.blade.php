@extends('main')

@section('title', '| Login')

@section('body')
<main id="login-panel">
    <img id="loginImage" src="/img/page/login-page-low.jpg">
    <article class="login-wrapper">
        <h1 class="login-title">Logowanie</h1>
        {!! Form::open(['route' => 'login', 'id' => 'login-form']) !!}
            <div class="login-label-container">
               {!! Form::label('email', 'Login:', ['class' => 'login-label']) !!}
            </div>
            <div class="ui left icon input login-input">
                {!! Form::email('email', null, ['placeholder' => 'admin@example', 'data-error' => 'Podaj poprawny adres e-mail']) !!}
                <i class="user icon"></i>
            </div>
            <div class="login-label-container">
                {!! Form::label('password', 'Hasło:', ['class' => 'login-label']) !!}
            </div>
            <div class="ui left icon input login-input">
                {!! Form::password('password', ['placeholder' => '******', 'data-error' => 'Zbyt krótkie hasło']) !!}
                <i class="lock icon"></i>
            </div>
            <div class="ui divider"></div>
            <ul class="login-list-error">
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <li class="login-input-error">{{ $error }}</li>
                @endforeach
            @endif    
            </ul>
            {!! Form::submit('Zaloguj się', ['class' =>  'login-button']) !!}
        {!! Form::close() !!}
<!--
        @if (count($errors) > 0)
        <div class="ui error message">
             <div class="header">
                  Pojawiło się kilka problemów przed wysyłaniem formularza:
             </div>
             <ul class="list">
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
              </ul>
        </div>
    @endif
-->
    </article>
</main>
@endsection


@section('scripts')
<script>

        
(function(){
    var imgLogin = new Image();
    imgLogin.src = '/img/page/login-page.jpg';

    imgLogin.onload = function() {
        $('#loginImage').attr({src: imgLogin.src});
    };

    var form = document.getElementById("login-form"),
        fields = form.querySelectorAll('[data-error]'),
        contactBtn = document.querySelector('.login-button'),
        icons = form.querySelectorAll('i.icon');

    function isAtLeast(field, min) {
        return field.value.length >= min;
    }

    function isEmail(field) {
        return field.value.match(/[^\s@]+@[^\s@]+\.[^\s@]+/);
    }

    function displayErrors(errors) {
        var ul = document.querySelector('ul.login-list-error');

        if(!ul) {
            ul = document.createElement("ul");
            ul.classList.add("login-list-error");
        }

        ul.innerHTML = "";

        errors.forEach(function(error) {
            var li = document.createElement("li");
            li.textContent = error;
            ul.appendChild(li);
        });
        form.insertBefore(ul, contactBtn);
    }

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        var errors = [];
        for (var i = 0; i < fields.length; i++) {
            var field = fields[i],
                icon = icons[i],
                isValid = false;

            if (field.type === "email") {
                isValid = isEmail(field);
            } else if (field.type === "password") {
                isValid = isAtLeast(field, 6);
            }

            if(!isValid) {
                field.classList.add("login-input-error");
                icon.classList.add("icon-error");
                errors.push(field.dataset.error);
            } else {
                field.classList.remove("login-input-error");
                icon.classList.remove("icon-error");
            }
        } //endfor

        if(errors.length) {
            displayErrors(errors);
        } else {
            form.submit();
        }

      }, false);
})();
</script>  
@endsection