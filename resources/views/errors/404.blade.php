@extends('main')

@section('title', '| 404 Error')


@section('body')
<div id="error-panel">
   <div class="error-wrapper">
        <h1 class="error-heading">Błąd 404</h1>
        <div class="error-subheading">
            <p class="error-paragraph"><span class="error-color">Błąd 404</span> pojawiający się na stronie, świadczy <span class="error-color">o&nbsp;odwołaniu do nieistniejącej lokalizacji</span>, bądź pliku. W&nbsp;tej sytuacji proponuję sprawdzić, czy <span class="error-color">przekierowanie domeny jest właściwie wykonane</span> (np. czy katalog, na który domena została przekierowana jest utworzony na serwerze).</p>
            <p class="error-paragraph">Podsumowując, kod błędu 404 wskazuje na to, że <span class="error-color">klient (np. przeglądarka internetowa)</span> jest w stanie komunikować się z&nbsp;serwerem, ale ten <span class="error-color">nie może znaleźć żądanego pliku,</span> lub jest on skonfigurowany w&nbsp;taki sposób, aby nie spełnić żądania i&nbsp;nie wyświetlać informacji dlaczego.</p>
        </div>
    </div>
</div>
@endsection