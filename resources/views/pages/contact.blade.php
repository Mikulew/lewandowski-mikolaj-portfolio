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
            {{ Html::image('/img/page/contact-page-low.jpg', 'Contact Image Background', array('id' => 'contactImage')) }}
            <article class="contact-wrapper" id="wrapper">
                <h1 class="contact-title">Formularz kontaktowy</h1>
                 {!! Form::open(['route' => 'pages.contact.store', 'id' => 'contact-form']) !!}
                       <section class="contact-input-container">
                           <div class="contact-label-container">
                                {!! Form::label('name', 'Imię i nazwisko:', ['class' => 'contact-label']) !!}
                           </div>
                           <div class="contact-input-wrapper">
                                 {!! Form::text('name', null, ['placeholder' => 'Jan Kowalski', 'class' => 'contact-input', 'data-error' => 'Podaj imię i nazwisko. Minimum: 3 znaki, maximum: 255']) !!}
                                 <svg class="contact-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                      width="16.403px" height="19.625px" viewBox="3.848 4.375 16.403 19.625" enable-background="new 3.848 4.375 16.403 19.625"
                                      xml:space="preserve">
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
                           <div class="contact-label-container">
                                 {!! Form::label('email', 'Email:', ['class' => 'contact-label']) !!}
                           </div>
                           <div class="contact-input-wrapper">
                                 {!! Form::email('email', null, ['placeholder' => 'kowalski@op.pl', 'class' => 'contact-input', 'data-error' => 'Podaj poprawny adres e-mail. Musi posiadać znak @']) !!}
                               <svg class="contact-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="18px" viewBox="0 0 18 18" enable-background="new 0 0 18 18" xml:space="preserve">
                                    <g>
                                       <path d="M16.947,15.071c-0.96,1.017-2.101,1.76-3.423,2.226C12.202,17.767,10.808,18,9.341,18c-1.402,0-2.68-0.221-3.829-0.667
                                            c-1.149-0.442-2.134-1.061-2.945-1.852c-0.815-0.792-1.446-1.74-1.896-2.845C0.221,11.531,0,10.326,0,9.02
                                            c0-1.29,0.245-2.483,0.735-3.58c0.49-1.097,1.157-2.049,2.005-2.856s1.836-1.438,2.973-1.9C6.842,0.229,8.055,0,9.341,0
                                            c1.109,0,2.186,0.161,3.227,0.482c1.044,0.322,1.969,0.808,2.776,1.451c0.808,0.647,1.45,1.45,1.933,2.419
                                            C17.759,5.32,18,6.457,18,7.763c0,0.968-0.133,1.824-0.402,2.563c-0.269,0.744-0.626,1.362-1.077,1.864
                                            c-0.45,0.502-0.96,0.876-1.539,1.125c-0.578,0.25-1.185,0.374-1.82,0.374c-0.651,0-1.173-0.153-1.567-0.458
                                            c-0.39-0.306-0.587-0.695-0.587-1.161h-0.12c-0.245,0.386-0.619,0.755-1.125,1.101c-0.506,0.346-1.125,0.522-1.86,0.522
                                            c-1.109,0-1.965-0.362-2.567-1.089c-0.603-0.727-0.904-1.667-0.904-2.833c0-0.679,0.113-1.346,0.342-2.009
                                            C5.002,7.1,5.327,6.513,5.749,5.995c0.422-0.514,0.928-0.932,1.515-1.246c0.587-0.313,1.238-0.47,1.957-0.47
                                            c0.619,0,1.141,0.129,1.567,0.386c0.422,0.257,0.699,0.575,0.832,0.944h0.024l0.197-0.968h2.178l-0.96,4.576
                                            c-0.032,0.225-0.076,0.474-0.133,0.751c-0.056,0.273-0.084,0.53-0.084,0.775c0,0.273,0.052,0.502,0.161,0.691
                                            c0.104,0.185,0.313,0.277,0.623,0.277c0.635,0,1.161-0.337,1.579-1.017c0.414-0.679,0.623-1.587,0.623-2.732
                                            c0-0.968-0.165-1.828-0.49-2.576C15.01,4.637,14.556,4.01,13.978,3.5c-0.579-0.506-1.27-0.892-2.065-1.149
                                            c-0.8-0.257-1.671-0.386-2.616-0.386c-1.029,0-1.969,0.181-2.825,0.542C5.617,2.869,4.885,3.371,4.283,4.006
                                            C3.68,4.645,3.21,5.392,2.877,6.256C2.539,7.116,2.37,8.048,2.37,9.049c0,1.064,0.177,2.025,0.526,2.881
                                            c0.35,0.855,0.844,1.583,1.479,2.189c0.635,0.607,1.394,1.069,2.274,1.39c0.88,0.322,1.853,0.482,2.909,0.482
                                            c1.322,0,2.459-0.209,3.411-0.631c0.952-0.418,1.828-1,2.627-1.744L16.947,15.071z M9.293,6.268c-0.39,0-0.735,0.112-1.029,0.337
                                            c-0.293,0.225-0.542,0.51-0.747,0.86C7.312,7.811,7.159,8.197,7.051,8.615C6.947,9.032,6.89,9.438,6.89,9.824
                                            c0,0.193,0.02,0.397,0.06,0.619c0.041,0.217,0.121,0.418,0.245,0.607c0.121,0.185,0.281,0.337,0.479,0.458
                                            c0.197,0.12,0.458,0.181,0.783,0.181c0.442,0,0.816-0.108,1.125-0.326c0.31-0.217,0.563-0.49,0.759-0.823
                                            c0.197-0.33,0.338-0.691,0.43-1.077c0.088-0.386,0.132-0.743,0.132-1.064c0-0.257-0.024-0.51-0.072-0.764
                                            c-0.048-0.249-0.132-0.474-0.257-0.679c-0.121-0.201-0.29-0.366-0.502-0.494C9.864,6.332,9.602,6.268,9.293,6.268z"/>
                                    </g>
                               </svg>
                           </div>
                           <div class="contact-label-container">
                                 {!! Form::label('phone', 'Numer telefonu:', ['class' => 'contact-label']) !!}
                           </div>
                           <div class="contact-input-wrapper">
                                 {!! Form::tel('phone', null, ['placeholder' => '888 444 777', 'class' => 'contact-input', 'data-error' => 'Podaj poprawny numer telefonu. Same cyfry, minimum: 9']) !!}
                               <svg class="contact-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16.552px" height="18px" viewBox="0 0 16.552 18" enable-background="new 0 0 16.552 18" xml:space="preserve">
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M-0.789,18.002c0-6,0-12,0-18.004c5.997,0,11.995,0,18,0
                                            c0,5.999,0,12.001,0,18.004C11.216,18.002,5.214,18.002-0.789,18.002z M0,5.483c0.017,0.226,0.018,0.454,0.054,0.676
                                            c0.077,0.475,0.135,0.957,0.268,1.416c0.328,1.136,0.849,2.188,1.51,3.166c0.353,0.522,0.718,1.039,1.114,1.529
                                            c0.509,0.628,1.04,1.241,1.589,1.833c0.367,0.396,0.771,0.76,1.18,1.113c0.404,0.349,0.826,0.68,1.259,0.993
                                            c0.666,0.482,1.382,0.875,2.153,1.169c0.752,0.287,1.527,0.459,2.331,0.479c0.305,0.007,0.611-0.036,0.916-0.066
                                            c0.828-0.081,1.592-0.371,2.256-0.853c0.573-0.416,1.097-0.905,1.611-1.396c0.269-0.256,0.367-0.604,0.28-0.997
                                            c-0.103-0.465-0.403-0.797-0.711-1.118c-0.275-0.288-0.595-0.532-0.893-0.798c-0.46-0.412-0.939-0.8-1.512-1.044
                                            c-0.588-0.25-1.184-0.272-1.709,0.132c-0.439,0.338-0.835,0.733-1.25,1.103c-0.061,0.054-0.117,0.113-0.182,0.161
                                            c-0.536,0.398-1.097,0.301-1.626,0.021c-0.79-0.417-1.446-1.01-2.022-1.69c-0.417-0.492-0.847-0.977-1.237-1.49
                                            C4.906,9.201,4.491,8.547,4.36,7.748C4.28,7.256,4.422,6.854,4.772,6.533c0.339-0.31,0.709-0.587,1.073-0.869
                                            C6.643,5.05,6.789,4.28,6.437,3.414C6.276,3.018,6.071,2.637,5.851,2.271C5.472,1.64,5.1,1,4.542,0.5
                                            c-0.503-0.45-1.048-0.557-1.59-0.145c-0.53,0.403-1.014,0.869-1.506,1.32C1.072,2.019,0.807,2.451,0.589,2.899
                                            C0.196,3.71-0.011,4.573,0,5.483z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0,5.483c-0.011-0.91,0.195-1.773,0.589-2.584
                                            c0.217-0.448,0.483-0.881,0.856-1.224c0.492-0.451,0.976-0.917,1.506-1.32C3.494-0.057,4.039,0.05,4.542,0.5
                                            C5.1,1,5.472,1.64,5.851,2.271c0.22,0.367,0.425,0.748,0.586,1.143C6.789,4.28,6.643,5.05,5.845,5.665
                                            C5.481,5.946,5.111,6.223,4.772,6.533C4.422,6.854,4.28,7.256,4.36,7.748c0.13,0.8,0.546,1.454,1.018,2.076
                                            c0.39,0.514,0.819,0.998,1.237,1.49c0.577,0.68,1.233,1.272,2.022,1.69c0.529,0.279,1.09,0.376,1.626-0.021
                                            c0.065-0.048,0.122-0.107,0.182-0.161c0.415-0.37,0.81-0.765,1.25-1.103c0.526-0.404,1.122-0.383,1.709-0.132
                                            c0.573,0.244,1.052,0.632,1.512,1.044c0.298,0.266,0.617,0.51,0.893,0.798c0.308,0.321,0.608,0.653,0.711,1.118
                                            c0.087,0.393-0.011,0.74-0.28,0.997c-0.514,0.491-1.038,0.979-1.611,1.396c-0.664,0.482-1.428,0.772-2.256,0.853
                                            c-0.305,0.03-0.611,0.073-0.916,0.066c-0.804-0.02-1.579-0.192-2.331-0.479c-0.771-0.293-1.487-0.687-2.153-1.169
                                            c-0.433-0.313-0.854-0.645-1.259-0.993c-0.409-0.353-0.813-0.717-1.18-1.113c-0.55-0.593-1.081-1.205-1.589-1.833
                                            c-0.396-0.49-0.761-1.006-1.114-1.529c-0.661-0.979-1.182-2.03-1.51-3.166c-0.133-0.459-0.19-0.941-0.268-1.416
                                            C0.019,5.937,0.018,5.709,0,5.483z"/>
                                    </g>
                               </svg>
                             </div>
                       </section>
                       <section class="contact-textarea-container">
                             <div class="contact-label-container" id="textarea-label">
                                 {!! Form::label('description', 'Wiadomość:', ['class' => 'contact-label']) !!}
                             </div>
                             <div class="contact-input-wrapper" id="textarea-input">
                                 {!! Form::textarea('description', null, ['size' => '105x10', 'class' => 'contact-input', 'placeholder' => 'Dzień dobry, piszę w sprawie współpracy...', 'data-error' => 'Podaj treść wiadomości. Minimum: 20 znaków']) !!}
                                 {{--<i class="icon"></i>--}}
                             </div>
                       </section>
                       @if(Session::has('success'))
                             <div class="contact-success">
                                 {{Session::get('success')}}
                             </div>
                       @endif
                        <ul class="contact-list-error">

                        </ul>
            {!! Form::submit('Wyślij', ['class'=>'contact-button']) !!}           
        {!! Form::close() !!}
    </article>
</main>
@endsection

@section('scripts')
<script>

//    (function(){
        let form = document.getElementById("contact-form"),
            fields = form.querySelectorAll('[data-error]'),
            contactBtn = document.querySelector('.contact-button'),
//            icons = form.querySelectorAll('contact-icon'),
            successMessage = document.querySelector('.contact-success');

        function isAtLeast(field, min) {
            return field.value.length >= min;
        }

        function isEmail(field) {
            return field.value.match(/[^\s@]+@[^\s@]+\.[^\s@]+/);
        }

        function isNumber(field) {
            return field.value.match(/^(?:\(?\+?[0-9]{2})?(?:[-\.\(\)\s]*(\d)){9}\)?$/);
        }

        function displayErrors(errors) {
            let ul = document.querySelector("ul.contact-list-error");
            let heightOfErrors;
            heightOfErrors = 0;

            if(successMessage) {
                successMessage.parentNode.removeChild(successMessage);
            }

            if(!ul) {
                ul = document.createElement("ul");
                ul.classList.add("contact-list-error");
                form.insertBefore(ul, contactBtn);
            }

            ul.innerHTML = "";

            errors.forEach(function(error) {
                let li = document.createElement("li");
                li.textContent = error;
                li.style.padding = "1.5rem";
                ul.appendChild(li);
                heightOfErrors += li.offsetHeight;
            });
            ul.style.margin = "20px";
            ul.style.height = heightOfErrors + "px";

            setTimeout( function(){
                ul.classList.add( 'errors-animation' );
            }, 500 );
        }

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            let errors = [];
            for (let i = 0; i < fields.length; i++) {
                let field = fields[i],
//                    icon = icons[i],
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
//                    icon.classList.add("icon-error");
                } else {
                    field.classList.remove("contact-input-error");
//                    icon.classList.remove("icon-error");
                }
            } //endfor

            if(errors.length) {
                displayErrors(errors);
            } else {
                form.submit();
            }

          }, false);
//    })();
</script>
@endsection