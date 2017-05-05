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
            <div class="login-input-wrapper">
                {!! Form::email('email', null, ['placeholder' => 'admin@example', 'class' => 'login-input', 'data-error' => 'Podaj poprawny adres e-mail']) !!}
                <svg class="login-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16.403px" height="19.625px" viewBox="3.848 4.375 16.403 19.625" enable-background="new 3.848 4.375 16.403 19.625" xml:space="preserve">
                     <g>
                                         <path d="M12.051,24c-1.721,0-3.442,0.002-5.164-0.002c-0.964-0.001-1.804-0.303-2.432-1.07C4.033,22.412,3.861,21.8,3.85,21.145
                                             c-0.023-1.406,0.113-2.797,0.591-4.134c0.246-0.693,0.595-1.331,1.134-1.843c0.633-0.601,1.401-0.866,2.266-0.857
                                             c0.109,0.001,0.224,0.056,0.32,0.114c0.326,0.196,0.641,0.41,0.965,0.611c0.998,0.615,2.074,0.944,3.252,0.87
                                             c0.898-0.057,1.728-0.343,2.499-0.801c0.258-0.153,0.524-0.298,0.752-0.488c0.425-0.351,0.887-0.347,1.386-0.24
                                             c1.052,0.227,1.771,0.873,2.277,1.793c0.505,0.914,0.75,1.909,0.859,2.934c0.076,0.756,0.122,1.523,0.085,2.278
                                             c-0.071,1.37-1.054,2.378-2.412,2.57c-0.221,0.032-0.448,0.046-0.672,0.046C15.453,24,13.754,24,12.051,24z"/>
                                         <path d="M11.864,4.375c2.434,0.007,4.354,1.938,4.347,4.371c-0.006,2.429-1.941,4.354-4.372,4.347
                                             c-2.42-0.005-4.345-1.95-4.337-4.382C7.51,6.292,9.445,4.368,11.864,4.375z"/>
                                     </g>
                 </svg>
            </div>
            <div class="login-label-container">
                {!! Form::label('password', 'Hasło:', ['class' => 'login-label']) !!}
            </div>
            <div class="login-input-wrapper">
                {!! Form::password('password', ['placeholder' => '******', 'class' => 'login-input', 'data-error' => 'Zbyt krótkie hasło']) !!}
                <svg class="login-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="17.504px" viewBox="0 0 15 17.504" enable-background="new 0 0 15 17.504" xml:space="preserve">
                    <g><g>
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#800000018000000180000001" d="M1.72,7.505c0-0.507-0.024-0.983,0.004-1.457
                            c0.104-1.737,0.622-3.316,1.931-4.528c2.967-2.745,7.686-1.619,9.113,2.135c0.331,0.871,0.523,1.767,0.513,2.702
                            c-0.004,0.376,0,0.752,0,1.148c0.289,0,0.56-0.001,0.831,0c0.52,0.003,0.887,0.367,0.887,0.883c0.001,2.74,0.001,5.481,0,8.221
                            c0,0.526-0.37,0.895-0.897,0.895c-4.401,0-8.801,0-13.201,0c-0.531,0-0.899-0.365-0.9-0.891C0,13.873,0,11.133,0,8.392
                            c0-0.517,0.367-0.882,0.883-0.886C1.156,7.504,1.427,7.505,1.72,7.505z M3.798,7.489c2.478,0,4.939,0,7.406,0
                            c0-0.458,0.012-0.901-0.003-1.343c-0.022-0.627-0.15-1.236-0.383-1.821C10.245,2.88,8.954,1.957,7.445,2.008
                            C5.921,2.059,4.84,2.827,4.219,4.227C3.758,5.269,3.757,6.372,3.798,7.489z"/>
                    </g></g>
                </svg>
            </div>
            <ul class="login-list-error">
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <li class="login-input-error">{{ $error }}</li>
                @endforeach
            @endif    
            </ul>
            {!! Form::submit('Zaloguj się', ['class' =>  'login-button']) !!}
        {!! Form::close() !!}
    </article>
</main>
@endsection


@section('scripts')
<script>       
(function(){
    let form = document.getElementById("login-form"),
        fields = form.querySelectorAll('[data-error]'),
        loginBtn = document.querySelector('.login-button');
//        icons = form.querySelectorAll('i.icon');

    function isAtLeast(field, min) {
        return field.value.length >= min;
    }

    function isEmail(field) {
        return field.value.match(/[^\s@]+@[^\s@]+\.[^\s@]+/);
    }

    function displayErrors(errors) {
        let ul = document.querySelector('ul.login-list-error');

        if(!ul) {
            ul = document.createElement("ul");
            ul.classList.add("login-list-error");
        }

        ul.innerHTML = "";

        errors.forEach(function(error) {
            let li = document.createElement("li");
            li.textContent = error;
            ul.appendChild(li);
        });
        form.insertBefore(ul, loginBtn);
    }

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        let errors = [];
        for (let i = 0; i < fields.length; i++) {
            let field = fields[i],
//                icon = icons[i],
                isValid = false;

            if (field.type === "email") {
                isValid = isEmail(field);
            } else if (field.type === "password") {
                isValid = isAtLeast(field, 6);
            }

            if (!isValid) {
                field.classList.add("login-input-error");
//                icon.classList.add("icon-error");
                errors.push(field.dataset.error);
            } else {
                field.classList.remove("login-input-error");
//                icon.classList.remove("icon-error");
            }
        } //endfor

        if (errors.length) {
            displayErrors(errors);
        } else {
            form.submit();
        }

      }, false);
})();
</script>  
@endsection