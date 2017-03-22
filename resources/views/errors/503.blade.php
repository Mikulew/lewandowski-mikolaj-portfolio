@extends('main')

@section('title', '| 503 Error')


@section('body')
<div id="error-panel">
   <div class="error-wrapper">
        <h1 class="error-heading">Błąd 503</h1>
        <div class="error-subheading">
            <p class="error-paragraph">Komunikat błędu 503 pojawia się w momencie, kiedy wyczerpany zostanie jeden (lub więcej) <span class="error-color">zasobów przydzielonych dla serwera wirtualnego</span>, takich jak np. pamięć lub ilość jednocześnie wykonywanych procesów. Jest to także ważny sygnał o konieczności dokonania zmian.</p>
            <p class="error-paragraph"><span class="error-color">Błąd 503</span> oznacza, że wybierana <span class="error-color">usługa jest w danej chwili niedostępna</span> – serwer nie jest w stanie w danej chwili zrealizować zapytania użytkownika ze względu na <span class="error-color">przeciążenie</span>. Jeśli jest to błąd, który znika wraz z <span class="error-color">wciśnięciem klawisza F5 (odśwież stronę)</span>, to zapewne dotyczył złego wykonania skryptu. Gdy jednak strona WWW jest zablokowana przez ten komunikat błędu przez dłuższy czas to najprawdopodobniej <span class="error-color">usługa jest niedostępna ze względu na zbyt duże przeciążenie serwera.</span></p>
        </div>
    </div>
</div>
@endsection