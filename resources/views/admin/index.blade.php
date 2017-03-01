@extends('admin')

@section('title', '| Admin Panel')

@section('body')

<h1 class="ui header">Witaj w panelu administracyjnym</h1>
<p><u><b>CRUD</b></u> – od ang. <i>create, read, update and delete</i> (pol. <i>utwórz, odczytaj, aktualizuj i usuń</i>) - <b>cztery podstawowe funkcje w aplikacjach korzystających z pamięci trwałej, które umożliwiają zarządzanie nią.</b> Niekiedy <b>litera R</b> jest rozwijana jako <i>retrieve</i> (<i>pobierz</i>) zamiast <i>read</i> (<i>odczytaj</i>). Czasem również <b>litera D</b> jest rozwijana jako <i>destroy</i> (<i>zniszcz</i>) zamiast <i>delete</i> (<i>usuń</i>). Skrót ten jest czasem również używany do opisania działań dotyczących oglądania, szukania i zmieniania informacji, często w stosunku do dokumentów elektronicznych.</p>

<p><b>Skrótowiec CRUD</b> może być stosowany w odniesieniu do interfejsu użytkownika większości aplikacji, które zazwyczaj pozwalają użytkownikowi na:</p>

<ul>
    <li>utworzenie lub dodanie nowych informacji (<i>create</i>)</li>
    <li>odczytanie lub wyświetlenie istniejących informacji (<i>read</i>)</li>
    <li>modyfikowanie lub edycję istniejących informacji (<i>update</i>)</li>
    <li>usuwanie istniejących informacji (<i>delete</i>)</li>
</ul>

<p><b>Bez tych czterech działań oprogramowanie zazwyczaj nie może być uznane za kompletne.</b> Ponieważ te operacje są działaniami podstawowymi, są one często opisywane pod wspólnym tytułem takim jak "zarządzanie informacją" lub "zarządzanie dokumentami".</p>

<p><b><u>ACL</u></b> (ang. <em>Access Control List</em>) – lista kontroli dostępu. W systemach uniksowych poprzez rozszerzenie możliwości systemu plików, umożliwia bardziej rozbudowaną i dokładną kontrolę dostępu do plików, w porównaniu do standardowych uprawnień w systemie.</p>

<p>Standardowe uprawnienia w systemie plików systemu Unix obejmują tylko: zapis, odczyt oraz wykonanie. Każde z uprawnień możemy definiować dla: właściciela pliku (ang. <i>owner</i>), grupy, do której ten plik należy (ang. <i>group</i>) oraz pozostałych użytkowników (ang. <i>others</i>).</p>

@endsection
