@extends('main')

@section('title', '| Contact')

@section('body')
<main id="contact-panel">
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
   <img id="contactImage" src="/img/page/contact-page-low.jpg">
   <article class="contact-wrapper">
       <h1 class="contact-title">Formularz kontaktowy</h1>
        {!! Form::open(['route' => 'pages.contact.store', 'id' => 'contact-form']) !!}
              <section class="contact-input-container">
                  <div class="contact-label-container">
                       {!! Form::label('name', 'Imię i nazwisko:', ['class' => 'contact-label']) !!}
                   </div>
                    <div class="ui left icon input contact-input">
                        {!! Form::text('name', null, ['placeholder' => 'Jan Kowalski', 'data-error' => 'Podaj imię i nazwisko. Minimum: 3 znaki, maximum: 255.']) !!}
                        <i class="user icon"></i>
                   </div>
                   <div class="contact-label-container">
                        {!! Form::label('email', 'Email:', ['class' => 'contact-label']) !!}
                    </div>
                   <div class="ui left icon input contact-input">
                        {!! Form::email('email', null, ['placeholder' => 'kowalski@op.pl', 'data-error' => 'Podaj poprawny adres e-mail. Musi posiadać znak @']) !!}
                        <i class="at icon"></i>
                    </div>
                    <div class="contact-label-container">
                        {!! Form::label('phone', 'Numer telefonu:', ['class' => 'contact-label']) !!}
                    </div>
                    <div class="ui left icon input contact-input">
                        {!! Form::tel('phone', null, ['placeholder' => '888 444 777', 'data-error' => 'Podaj poprawny numer telefonu. Same cyfry, minumum: 9.']) !!}
                        <i class="call icon"></i>
                    </div>
                </section>
                <section class="contact-textarea-container">
                    <div class="contact-label-container" id="textarea-label">
                        {!! Form::label('description', 'Wiadomość:', ['class' => 'contact-label']) !!}
                    </div>
                    <div class="ui form contact-input" id="textarea-input">
                        {!! Form::textarea('description', null, ['size' => '105x10', 'placeholder' => 'Dzień dobry, piszę w sprawie współpracy...', 'data-error' => 'Podaj treść wiadomości. Minimum: 20 znaków.']) !!}  
                        <i class="icon"></i>
                    </div>
               </section>
                @if(Session::has('success'))
                    <div class="ui green message">
                        {{Session::get('success')}}
                    </div>
                @endif
            {!! Form::submit('Wyślij', ['class'=>'contact-button']) !!}           
        {!! Form::close() !!}
    </article>
</main>
@endsection

@section('scripts')
<script>
    (function(){
        var form = document.getElementById("contact-form"),
            fields = form.querySelectorAll('[data-error]'),
            contactBtn = document.querySelector('.contact-button'),
            icons = form.querySelectorAll('i.icon'),
            successMessage = document.querySelector('.ui.green.message');;

        function isAtLeast(field, min) {
            return field.value.length >= min;
        }

        function isEmail(field) {
            return field.value.match(/[^\s@]+@[^\s@]+\.[^\s@]+/);
        }

        function isNumber(field) {
            return field.value.match(/[0-9]{9}/);
        }

        function displayErrors(errors) {
            var ul = document.querySelector('ul.contact-list-error');

            if(successMessage) {
                successMessage.parentNode.removeChild(successMessage);
            }

            if(!ul) {
                ul = document.createElement("ul");
                ul.classList.add("contact-list-error");
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
                if (field.type === "text") {
                    isValid = isAtLeast(field, 5);
                } else if (field.type === "email") {
                    isValid = isEmail(field);
                } else if (field.type === "tel") {
                    isValid = isNumber(field);
                } else if (field.type === "textarea") {
                    isValid = isAtLeast(field, 20);
                }

                if(!isValid) {
                    errors.push(field.dataset.error);
                    field.classList.add("contact-input-error");
                    icon.classList.add("icon-error");
                } else {
                    field.classList.remove("contact-input-error");
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