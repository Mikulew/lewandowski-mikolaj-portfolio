<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book();
        $book->author = "Lea Verou";
        $book->title = "47 sekretów kreatywnego projektanta";
        $book->description = "Jeśli w miarę płynnie posługujesz się CSS i chcesz udoskonalić swój warsztat programisty, a przy tym lubisz nietuzinkowe, inspirujące rozwiązania, wykorzystaj ciekawe propozycje autorki — masz ich do dyspozycji 47. Dzięki nim poradzisz sobie z często spotykanymi trudnościami związanymi z projektowaniem stron WWW. Co więcej, dzięki tej książce nauczysz się tworzyć kod zwięzły, łatwy w utrzymaniu, elastyczny, lekki i zgodny z obowiązującymi standardami.";
        $book->pages = 350;
        $book->link = "http://helion.pl/ksiazki/css-bez-tajemnic-47-sekretow-kreatywnego-projektanta-lea-verou,scss47.htm";
        $book->thumbnail = "lea-verou-47-sekretow.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Adam Freeman";
        $book->title = "HTML5 - Przedownik encyklopedyczny";
        $book->description = "Dzięki tej książce szybko opanujesz zasady HTML5. Już wkrótce bez najmniejszego problemu będziesz korzystał z nowych znaczników canvas, audio i video. Ponadto nauczysz się stosować mechanizmy do przechowywania danych w lokalnych zasobach przeglądarki oraz sprawdzisz, gdzie w danej chwili znajduje się użytkownik. Autor książki kładzie nacisk na poprawność semantyczną tworzonego kodu. Jest to niezwykle istotne w obecnych czasach, gdy Twoje dzieło będzie oglądane na przeróżnych urządzeniach – zarówno stacjonarnych, jak i mobilnych.";
        $book->pages = 856;
        $book->link = "http://helion.pl/ksiazki/html5-przewodnik-encyklopedyczny-adam-freeman,htm5pe.htm";
        $book->thumbnail = "adam-freeman-htm5-przewodnik-encyklpedyczny.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Luke Stevens, RJ Owen";
        $book->title = "HTML5. Wszystko, co powinniście wiedzieć o programowaniu. Przewodnik profesjonalisty";
        $book->description = "Na początek poznasz krótką historię języka HTML i zobaczysz, z jakimi problemami jeszcze niedawno borykali się projektanci stron WWW. Następnie poznasz strukturę nowoczesnej strony WWW oraz elementy strukturalne HTML5. Niezwykle istotnym komponentem składni, pozwalającym na jeszcze lepsze indeksowanie witryn, są mikroformaty dostarczające cennych informacji wyszukiwarkom — rozdział piąty przedstawi Ci dogłębnie to zagadnienie. W dalszej części nauczysz się tworzyć atrakcyjne formularze oraz korzystać z potencjału nowego znacznika \< canvas \>. Na koniec poznasz format SVG oraz możliwości zastosowania HTML5 w rozwiązaniach mobilnych. Książka ta jest obowiązkową lekturą każdego projektanta stron WWW, który chce być na bieżąco z nowościami w sieci!";
        $book->pages = 200;
        $book->link = "http://helion.pl/ksiazki/html5-wszystko-co-powinniscie-wiedziec-o-programowaniu-przewodnik-profesjonalisty-luke-stevens-rj-owen,html5w.htm";
        $book->thumbnail = "luke-stevens-html5-przewodnik-profesjonalisty.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Jennifer Niederst Robbins";
        $book->title = "Projektowanie stron internetowych. Przewodnik dla początkujących webmasterów po HTML5, CSS3 i grafice";
        $book->description = "Kolejne wydanie tej cenionej książki zostało gruntownie przeredagowane i uzupełnione o nowe informacje tak, aby prezentowało obecnie wykorzystywane narzędzia i panujące trendy w projektowaniu stron internetowych. W trakcie lektury poznasz składnię języka HTML, wykorzystywane znaczniki oraz nowości zawarte w HTML5. Ponadto zaznajomisz się z kaskadowymi arkuszami stylów (CSS) oraz przekonasz się, jaki potencjał kryje język JavaScript. Nauczysz się także przygotowywać odpowiednią grafikę na potrzeby strony WWW. Książka ta jest doskonałym przewodnikiem wprowadzającym w świat projektowania!";
        $book->pages = 600;
        $book->link = "http://helion.pl/ksiazki/projektowanie-stron-internetowych-przewodnik-dla-poczatkujacych-webmasterow-po-html5-css3-i-grafic-jennifer-niederst-robbins,prsti2.htm";
        $book->thumbnail = "jennifer-niederst-robbins-projektowanie-stron-internetowych.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Ben Frain";
        $book->title = "Sass i Compass. Praktyczny przewodnik dla projektantów";
        $book->description = "Kaskadowe arkusze stylów są dziś wykorzystywane przez wszystkich projektantów stron internetowych na całym świecie. Jest to bardzo wygodne i elastyczne narzędzie, jednak prawdziwie spektakularne efekty można osiągnąć dzięki zastosowaniu CSS w połączeniu z preprocesorem Sass oraz technologią Compass. Możliwe, że nie bardzo wiesz, co znaczą te nazwy, i nie masz pojęcia, do czego mogłyby Ci się przydać te dodatki. Jeśli jednak jesteś projektantem, powinieneś czym prędzej zapoznać się z tymi narzędziami, ponieważ niebywale ułatwią Ci pracę. I nie musisz być geniuszem ani informatykiem, żeby skorzystać z ich mocy. Wystarczy, że znasz HTML i CSS.";
        $book->pages = 240;
        $book->link = "http://helion.pl/ksiazki/sass-i-compass-praktyczny-przewodnik-dla-projektantow-ben-frain,saasco.htm";
        $book->thumbnail = "ben-frain-sass-i-compass.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Peter Lubbers, Brian Albers, Frank Salim";
        $book->title = "HTML5. Zaawansowane programowanie";
        $book->description = "Dzięki tej książce poznasz najbardziej zaawansowane możliwości HTML5. Nauczysz się wykorzystywać mechanizm geolokalizacji i będziesz w stanie dostarczać użytkownikom spersonalizowane treści w zależności od ich miejsca pobytu. Ponadto przekonasz się, jaki potencjał kryje element canvas. Za jego pomocą stworzysz niezwykle atrakcyjny interfejs bez konieczności stosowania dodatków do przeglądarki. W dalszych rozdziałach sprawdzisz, jak prosta może być komunikacja przeglądarki z serwerem za pośrednictwem WebSockets oraz jak zachować funkcjonalność Twojej aplikacji w przypadku braku połączenia z siecią. Dzięki tej książce zdążysz na czas opanować nowości z HTML5 i wykorzystać je w Twoim kolejnym projekcie!";
        $book->pages = 296;
        $book-> link = "http://helion.pl/ksiazki/html5-zaawansowane-programowanie-peter-lubbers-brian-albers-frank-salim,htm5zp.htm";
        $book->thumbnail = "peter-lubbers-html5-zaawansowane-programowanie.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Jon Duckett";
        $book->title = "HTML i CSS. Zaprojektuj i zbuduj witrynę WWW";
        $book->description = "Ta pozycja jest doskonałym przewodnikiem, który wprowadzi Cię w świat projektowania i budowania stron WWW. W trakcie lektury dowiesz się też, jak uzyskać dostęp do serwera i opublikować swoją witrynę. Cała książka została podzielona na trzy części. Pierwsza poświęcona jest językowi HTML. Z nią poznasz niezbędne znaczniki oraz techniki tworzenia układu strony. Druga została poświęcona kaskadowym arkuszom stylów (CSS). Dzięki nim Twoja witryna nabierze kształtów i kolorów. Zobacz, co potrafi CSS3 - jeszcze niedawno takie cuda nie śniły się webmasterom. Ostatnia część to praktyczne porady oraz wskazówki, które pozwolą Ci uniknąć najczęstszych problemów. Ta książka to Twój klucz do świata webmasterów!";
        $book->pages = 506;
        $book->link = "http://helion.pl/ksiazki/html-i-css-zaprojektuj-i-zbuduj-witryne-www-jon-duckett,htcsww.htm";
        $book->thumbnail = "jon-duckett-html-css.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Jon Duckett";
        $book->title = "JavaScript i jQuery. Interaktywne strony WWW dla każdego";
        $book->description = "Jeżeli chcesz poznać potencjał tego duetu i zacząć tworzyć atrakcyjne aplikacje internetowe, nie możesz obejść się bez tej książki. Pomoże Ci ona szybko stworzyć pierwszy skrypt. W trakcie lektury poznasz niuanse składni JavaScriptu, sposoby obsługi zdarzeń oraz obiektowy model strony. Dzięki dalszym rozdziałom zdobędziesz wiedzę na temat jQuery oraz możliwości tej biblioteki. Z pomocą duetu JavaScript i jQuery błyskawicznie rozwiążesz każdy problem — asynchroniczne pobieranie danych z serwera, atrakcyjny interfejs użytkownika, zaawansowana obsługa formularzy to tylko niektóre z poruszanych tu tematów. Książka ta jest doskonałym źródłem informacji dla czytelników chcących opanować JavaScript oraz związane z nim narzędzia!";
        $book->pages = 648;
        $book->link = "http://helion.pl/ksiazki/javascript-i-jquery-interaktywne-strony-www-dla-kazdego-jon-duckett,jsqwdk.htm";
        $book->thumbnail = "jon-duckett-javascript-jquery.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Marijn Haverbeke";
        $book->title = "Zrozumieć JavaScript. Wprowadzenie do programowania";
        $book->description = "Otwórz ją i przekonaj się, jak wygląda składnia JavaScriptu oraz typowe konstrukcje w tym języku. W trakcie lektury kolejnych rozdziałów nauczysz się budować przejrzystą strukturę programu, korzystać z obiektów i tablic oraz wyrażeń regularnych. Ponadto poznasz tajniki programowania obiektowego i najlepsze techniki obsługi błędów. Gdy opanujesz już podstawy związane z językiem, przyjdzie czas na drugą część książki, poświęconą możliwościom JavaScriptu w środowisku przeglądarki. Na kolejnych stronach znajdziesz informacje o modelu DOM, korzystaniu z elementu canvas oraz obsłudze formularzy. Na koniec poznasz jeszcze tajniki optymalizacji kodu, żeby móc wycisnąć z JavaScriptu siódme poty. Książka ta jest doskonałą lekturą dla czytelników, którzy chcą bezproblemowo wkroczyć w świat tego języka!";
        $book->pages = 480;
        $book->link = "http://helion.pl/ksiazki/zrozumiec-javascript-wprowadzenie-do-programowania-marijn-haverbeke,zrojsc.htm";
        $book->thumbnail = "marjin-haverbeke-zrozumiec-javascript.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Julian Shapiro";
        $book->title = "Tworzenie animacji z użyciem języka JavaScript";
        $book->description = "Jeżeli chcesz się nauczyć tworzyć animacje, czerpiąc z możliwości JavaScript, trafiłeś na właściwy podręcznik. W trakcie lektury kolejnych rozdziałów zdobędziesz bezcenną wiedzę na temat biblioteki Velocity.js oraz zasad projektowania ruchu. Potem przejdziesz do praktycznych aspektów pracy z animacjami — dowiesz się, jak rozdzielić style i logikę, jak zorganizować różne sekwencje animacji oraz jak dodawać efekty. Następnie nauczysz się animować teksty, korzystać z grafiki wektorowej w formacie SVG oraz zadbasz o wydajność animacji. Ta książka stanowi doskonałą lekturę, po której zaskoczysz użytkowników Twoich stron WWW atrakcyjnymi animacjami.";
        $book->pages = 160;
        $book->link = "http://helion.pl/ksiazki/tworzenie-animacji-z-uzyciem-jezyka-javascript-julian-shapiro,twanjs.htm";
        $book->thumbnail = "julian-shapiro-tworzenie-animacji.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Matt Zandstra";
        $book->title = "PHP. Obiekty, wzorce, narzędzia. Wydanie IV";
        $book->description = "Sięgnij po nią i przekonaj się na własnej skórze, że PHP to dojrzały język, który nie ustępuje konkurentom. W trakcie lektury poznasz podstawowe zagadnienia związane z programowaniem obiektowym, a następnie przejdziesz do nauki zaawansowanej obsługi obiektów w języku PHP. Kolejne rozdziały zostały poświęcone między innymi wzorcom projektowym, dobrym i złym praktykom, zastosowaniu PEAR i Pyrus oraz sposobom automatycznego generowania dokumentacji i tworzenia kodu wysokiej jakości dzięki testom automatycznym. Książka ta jest doskonałą lekturą dla każdego programisty PHP chcącego podnieść swoje kwalifikacje.";
        $book->pages = 488;
        $book->link = "http://helion.pl/ksiazki/php-obiekty-wzorce-narzedzia-wydanie-iv-matt-zandstra,phpob4.htm";
        $book->thumbnail = "matt-zandstra-php-obiekty-wzorce-narzedzia.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Raphaël Saunier";
        $book->title = "Laravel 4. Podstawy tworzenia aplikacji w PHP";
        $book->description = "Jeżeli chcesz poznać w pełni jego potencjał i wykorzystać go w trakcie tworzenia kolejnej strony WWW lub aplikacji internetowej, to trafiłeś na doskonałą książkę. Sięgnij po nią i już wkrótce bez problemu przygotujesz swoje środowisko pracy, zainstalujesz najnowszą wersję za pomocą narzędzia Composer, a następnie rozpoczniesz prace nad swoim projektem. Przekonaj się, jak tworzyć ścieżki, konfigurować bazę danych oraz zabezpieczać dostęp do wybranych stron. W kolejnych rozdziałach nauczysz się tworzyć testy automatyczne oraz korzystać z narzędzia Artisan, które ułatwi Ci codzienne zadania! Ponadto dowiesz się, w jaki sposób tworzyć serwisy typu REST oraz generować formularze. Książka ta jest doskonałą pozycją dla wszystkich programistów PHP szukających frameworka, który spełni ich oczekiwania!";
        $book->pages = 120;
        $book->link = "http://helion.pl/ksiazki/laravel-4-podstawy-tworzenia-aplikacji-w-php-rapha-l-saunier,larave.htm";
        $book->thumbnail = "raphael-saunier-laravel4-podstawy-tworzenia-app.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Terry Matula";
        $book->title = "Laravel. Tworzenie aplikacji. Receptury";
        $book->description = "Książka, którą trzymasz w rękach, zawiera omówienie ponad 90 zagadnień dotyczących pracy z Laravelem. Sięgnij po nią i przekonaj się, jak błyskawicznie rozpocząć pracę, uwierzytelnić użytkowników, przetestować aplikację, a następnie wdrożyć ją w środowisku produkcyjnym. W kolejnych rozdziałach znajdziesz kompletny kod służący do pobierania danych wejściowych, przeszukiwania baz danych, tworzenia REST-owego API; jest tu także system szablonów Blade. Ponadto dowiesz się, jak sprytnie używać Composera, stworzyć Autoloader oraz zapewnić sprawny routing. Książka ta jest genialną lekturą dla wszystkich programistów korzystających ze szkieletu Laravel w codziennej pracy!";
        $book->pages = 264;
        $book->link = "http://helion.pl/ksiazki/laravel-tworzenie-aplikacji-receptury-terry-matula,larare.htm";
        $book->thumbnail = "terry-matula-laravel-tworzenie-aplikacji-receptury.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Stoyan Stefanov";
        $book->title = "JavaScript dla programistów PHP";
        $book->description = "Książka przeznaczona jest dla programistów PHP chcących szybko nauczyć się programowania w języku JavaScript. W trakcie lektury poznasz różnice i podobieństwa między tymi dwoma językami. W kolejnych rozdziałach rozgryziesz składnię JavaScriptu i błyskawicznie zaczniesz używać funkcji wbudowanych w ten język. Ponadto opanujesz programowanie obiektowe z jego wykorzystaniem. Na sam koniec nauczysz się testować kod napisany w JavaScripcie. To najlepszy podręcznik do nauki tego języka dla osób znających podstawy PHP.";
        $book->pages = 168;
        $book->link = "http://helion.pl/ksiazki/javascript-dla-programistow-php-stoyan-stefanov,javphp.htm";
        $book->thumbnail = "stoyan-stefanov-javascript-dla-programistów-php.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Peter Bell, Brent Beer";
        $book->title = "GitHub. Przyjazny przewodnik";
        $book->description = "Ta książka została w całości poświęcona właśnie GitHubowi. Sięgnij po nią i przekonaj się, jakie usługi oferuje ten serwis oraz jak wykorzystać jego potencjał w Twoim projekcie. W trakcie lektury dowiesz się, jak przeglądać udostępniony kod, współpracować przy projektach oraz dostarczać poprawki. Ponadto nauczysz się zarządzać zgłoszonymi przez użytkowników problemami w Twoim kodzie oraz opanujesz najlepsze praktyki konfigurowania Twojego repozytorium. Na sam koniec poznasz narzędzia przeznaczone dla systemów MacOS i Windows, a służące do współpracy z serwisem GitHub. Książka ta jest obowiązkową lekturą dla wszystkich czytelników chcących w pełni wykorzystać potencjał drzemiący w tym serwisie.";
        $book->pages = 136;
        $book->link = "http://helion.pl/ksiazki/github-przyjazny-przewodnik-peter-bell-brent-beer,github.htm";
        $book->thumbnail = "peter-bell-github.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Christopher Hadnagy, Michele Fincher, Robin Dreeke";
        $book->title = "Mroczne odmęty phishingu. Nie daj się złowić!";
        $book->description = "Trzymasz w ręku świetny przewodnik po mrocznym świecie phishingu. Opisano tu formy tego rodzaju ataków, przedstawiono sposoby rozpoznawania fałszywych wiadomości e-mail czy sklonowanych stron internetowych. Omówiono również socjotechniczne aspekty phishingu, dzięki czemu lepiej zrozumiesz psychologiczne mechanizmy rządzące postępowaniem ofiary. Po lekturze tej książki będziesz również wiedział, jak udoskonalić firmowy system bezpieczeństwa, aby skutecznie odpierać ataki e-mailowe — nawet te bardzo wyrafinowane!";
        $book->pages = 224;
        $book->link = "http://helion.pl/ksiazki/mroczne-odmety-phishingu-nie-daj-sie-zlowic-christopher-hadnagy-michele-fincher-robin-dreeke,mrodph.htm";
        $book->thumbnail = "christopher-hadnagy-mroczne-odmety-phishingu.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Thodoris Greasidis";
        $book->title = "Biblioteka jQuery. Sprawdzone wzorce projektowe";
        $book->description = "jQuery jest lekką, wszechstronną i rozszerzalną biblioteką języka JavaScript o ogromnych możliwościach. Zapewnia prosty w użyciu API, który jest bezproblemowo obsługiwany przez różne przeglądarki i znacząco ułatwia wykonywanie modyfikacji i operacji przechodzenia w obrębie modelu DOM dokumentów HTML, obsługę zdarzeń, uruchamianie animacji i korzystanie z technologii Ajax. Pozwala to na coraz bardziej złożone interakcje z użytkownikiem oraz na obsługę dużych implementacji aplikacji. Niniejsza książka jest przeznaczona dla projektantów, którzy pracując z biblioteką jQuery, chcą wykorzystywać różne standardowe wzorce branżowe. Docenią ją zespoły programistów, którym ułatwi pisanie dobrze zorganizowanych i rozszerzalnych implementacji. Zaprezentowano tu różne wzorce projektowe, takie jak Fasada, Obserwator czy wzorce optymalizacji. Omówiono również techniki i biblioteki związane z tworzeniem szablonów klienckich, a także przedstawiono kilka wzorców projektowania dodatków. Nie zabrakło opisu sprawdzonych procedur i wskazówek dotyczących wydajności, dzięki którym maksymalnie wykorzystasz możliwości biblioteki jQuery!";
        $book->pages = 216;
        $book->link = "http://helion.pl/ksiazki/biblioteka-jquery-sprawdzone-wzorce-projektowe-thodoris-greasidis,bjqswp.htm";
        $book->thumbnail = "thodoris-greaidis-biblioteka-jquery.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Beata Błaszczyk";
        $book->title = "English 4 IT. Praktyczny kurs języka angielskiego dla specjalistów IT i nie tylko";
        $book->description = "Obecnie język angielski jest nieodłącznym elementem świata IT. Większość producentów oprogramowania oraz twórców metodyk i standardów w branży IT udostępnia materiały wyłącznie w tym języku. Ponadto wiele projektów informatycznych jest realizowanych we współpracy z ekspertami pochodzącymi z różnych krajów. Komunikacja odbywa się wówczas przeważnie także w języku angielskim. Jeśli więc jesteś specjalistą z branży IT, funkcjonującym na co dzień w środowisku anglojęzycznym, możesz z kolei nie czuć się w pełni swobodnie wypowiadając się w tym języku w każdym obszarze tak szerokiej dziedziny wiedzy.";
        $book->pages = 288;
        $book->link = "http://helion.pl/ksiazki/english-4-it-praktyczny-kurs-jezyka-angielskiego-dla-specjalistow-it-i-nie-tylko-beata-blaszczyk,anginf.htm";
        $book->thumbnail = "beata-blaszczyk-english-4-it.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Dawid Mazur";
        $book->title = "HTML5 i CSS3. Definicja nowoczesności";
        $book->description = "Dzięki tej książce dowiesz się, jak zaprojektować w pełni funkcjonalną witrynę. Krok po kroku zbudujesz szkielet strony, a następnie stworzysz szatę graficzną i wypełnisz serwis treścią. Zobaczysz, że Responsive Web Design jest w rzeczywistości bardzo prostym rozwiązaniem, opartym na HTML5 i CSS3, dzięki któremu stronę tworzysz raz. Nie ma potrzeby budowania różnych witryn dla różnych urządzeń. Responsive Web Design to Twój klucz do sukcesu i skutecznego zaistnienia w Internecie.";
        $book->pages = 200;
        $book->link = "http://helion.pl/ksiazki/html5-i-css3-definicja-nowoczesnosci-mazur-dawid,a_0314.htm";
        $book->thumbnail = "dawid-mazur-html5-css3-definicja-nowoczesnosci.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Michał Kortas";
        $book->title = "Bootstrap. Praktyczne projekty";
        $book->description = "Bootstrap to jeden z najwygodniejszych, najlepiej dopracowanych frameworków do tworzenia stron i aplikacji internetowych na świecie. Łatwość obsługi idzie tu w parze z możliwością dołączania różnych przydatnych elementów, choćby takich jak biblioteka jQuery, a także ze wspaniałą responsywnością. Jeśli chcesz zacząć tworzyć własne strony z użyciem Bootstrapa, ale nie masz zbyt wiele czasu do stracenia, pora zapoznać się z tą znakomitą książką. Dzięki niej w mig opanujesz najważniejsze zagadnienia i zobaczysz, jak wykorzystać framework w praktyce.";
        $book->pages = 144;
        $book->link = "http://helion.pl/ksiazki/bootstrap-praktyczne-projekty-michal-kortas,bootpp.htm";
        $book->thumbnail = "michal-kortas-bootstrap-praktyczne-projekty.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Tomasz \"Comandeer\" Jakut";
        $book->title = "JavaScript. Programowanie zaawansowane";
        $book->description = "Zostań specjalistą! Z ta książką poznasz JavaScript od podszewki i zmierzysz się z ciekawymi wyzwaniami. Na podstawie praktycznych przykładów dowiesz się, jak zorganizować swoje środowisko pracy, podzielić projekt na odpowiednie moduły, napisać testy tworzonego kodu zgodnie z metodyką TDD, zbudować silnik selektorów, zadbać o szybkość działania swojego rozwiązania, właściwie obsłużyć zdarzenia DOM, opracować wydajne animacje, napisać dokumentację projektu i udostępnić go światu. Sporo? Pewnie, że tak – a w dodatku bez zadęcia, naturalnym językiem i przede wszystkim na temat!";
        $book->pages = 256;
        $book->link = "http://helion.pl/ksiazki/javascript-programowanie-zaawansowane-tomasz-comandeer-jakut,jascpz.htm";
        $book->thumbnail = "tomasz-jakut-javascript-programowanie-zaawansowane.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Jason Rodriguez";
        $book->title = "Nowoczesny e-mail marketing. Uniwersalny, responsywny i skuteczny mailing w HTML-u";
        $book->description = "W tej książce znajdziesz informacje na temat tworzenia nowoczesnych i atrakcyjnych wiadomości e-mail. Na samym początku dowiesz się, jak zaplanować układ wiadomości i dostosować go do różnych typów urządzeń. Zobaczysz też, jak przykroić swój projekt do odpowiedniego formatu dla programów obsługujących pocztę elektroniczną. Osobny rozdział został poświęcony optymalizacji skuteczności kampanii — testom A/B, śledzeniu wiadomości i generowaniu statystyk. Książka ta jest obowiązkową lekturą dla każdego, kto chce mądrze wykorzystać marketing e-mailowy.";
        $book->pages = 128;
        $book->link = "http://helion.pl/ksiazki/nowoczesny-e-mail-marketing-uniwersalny-responsywny-i-skuteczny-mailing-w-html-u-jason-rodriguez,noemma.htm";
        $book->thumbnail = "jason-rodriguez-nowoczesny-e-mail-marketing.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Sebastian Kończak";
        $book->title = "Photoshop dla e-commerce i social media";
        $book->description = "Jeśli jesteś pracownikiem działu marketingu, właścicielem sklepu internetowego, blogerem czy osobą prowadzącą fanpage na portalach społecznościowych, dobrze wiesz, że aby zainteresować sobą potencjalnego konsumenta, trzeba koniecznie użyć dobrej, przyciągającej oko fotografii lub grafiki. Jeśli brakuje Ci wiedzy i narzędzi, a wizualizacje, infografiki i zdjęcia, które umieszczasz w sieci, nie przynoszą pożądanych efektów, zajrzyj do tej książki! Oto pierwszy na polskim rynku podręcznik o wykorzystaniu najpopularniejszego programu graficznego na świecie — Photoshopa — w działalności e-commerce i social media. Ponieważ e-handel i media społecznościowe wykorzystują zlepek technologii, umiejętności i doświadczeń z różnych branż, w tej książce Photoshop i zadania w nim wykonywane przeplatają się z poradami dotyczącymi właściwej i skutecznej promocji online.";
        $book->pages = 240;
        $book->link = "http://helion.pl/ksiazki/photoshop-dla-e-commerce-i-social-media-sebastian-konczak,phoeco.htm";
        $book->thumbnail = "sebastian-konczak-photoshop-dla-e-commarce-social-media.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Robert Chwałowski";
        $book->title = "Typografia typowej książki";
        $book->description = "W tomie \"Typografia typowej książki\" po raz pierwszy zasady te zebrano w całość. Autor dokonał starannej selekcji: oparł swoje recepty zarówno na polskich tradycjach zecerskich i wydawniczych, jak i na najlepszych wzorcach typografii światowej. Uwaga autora skupia się na mikrotypografii, czyli na składaniu tekstu, poprawności językowo-technicznej składu, interpunkcji. Sporo miejsca przeznaczone jest też na tzw. makrotypografię, a więc np. kwestie łamania tekstów czy układu logicznego książki. Książka obfituje w przykłady i dokładnie objaśnia trudne zagadnienia, takie jak tabele, bibliografia czy przypisy.";
        $book->pages = 112;
        $book->link = "http://helion.pl/ksiazki/typografia-typowej-ksiazki-robert-chwalowski,typoks.htm";
        $book->thumbnail = "robert-chwalowski-typografia-typowej-ksiazki.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "David Kadavy";
        $book->title = "Design dla hakerów. Sekrety genialnych projektów";
        $book->description = "Znajdziesz tu mnóstwo informacji na temat typografii, grafiki tworzonej na potrzeby stron internetowych oraz teorii kolorów. W trakcie lektury nauczysz się dobierać odpowiednie proporcje projektu oraz wykorzystywać kolory do ożywienia swojego dzieła. Ponadto zdobędziesz ogromną wiedzę na temat odpowiedniego zagospodarowania przestrzeni i tworzenia przejrzystych układów. Jeżeli chcesz tworzyć eleganckie, intrygujące i przyciągające wzrok prace, ta książka wprost idealnie spełni Twoje oczekiwania. Dodatkowo zawiera ona wiele informacji o niuansach i sprawach historycznych, lecz wciąż mających wpływ na dzisiejsze sposoby projektowania. Uważaj, ta lektura naprawdę wciąga!";
        $book->pages = 344;
        $book->link = "http://helion.pl/ksiazki/design-dla-hakerow-sekrety-genialnych-projektow-david-kadavy,deshak.htm";
        $book->thumbnail = "david-kadavy-design-dla-hakerow.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Von Glitschka";
        $book->title = "Grafika wektorowa. Szkolenie podstawowe";
        $book->description = "Dzięki niniejszej książce uczynisz to szybko i przyjemnie. Nie skupia się ona na kolejnych funkcjach narzędzia Adobe Illustrator, lecz omawia, jak radzić sobie w typowych sytuacjach i rozwiązywać codzienne problemy. W trakcie lektury poznasz trochę podstaw matematycznych związanych z grafiką wektorową oraz naczelne zasady projektowania i tworzenia koncepcji. Ponadto nauczysz się wybierać dobre miejsca dla podstawowych punktów oraz budować złożone kształty. Dowiesz się, jak wykorzystać warstwy, rozpoznawać objawy wizualnego napięcia i pozbyć się złych nawyków w codziennej pracy. Książka jest idealną pozycją dla każdego grafika oraz osób chcących rozpocząć przygodę z wektorami.";
        $book->pages = 248;
        $book->link = "http://helion.pl/ksiazki/grafika-wektorowa-szkolenie-podstawowe-von-glitschka,grawek.htm";
        $book->thumbnail = "von-glitschka-grafika-wektorowa.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "David Dabner, Sandra Stewart, Eric Zempol";
        $book->title = "Szkoła projektowania graficznego. Zasady i praktyka, nowe programy i technologie";
        $book->description = "Szkoła projektowania graficznego jest podstawowym kursem dla projektantów tworzących na potrzeby wydawnictw drukowanych, animacji i mediów cyfrowych. Praktyczne rady dotyczące wszystkich aspektów projektowania graficznego od zrozumienia podstaw do opracowania oryginalnej koncepcji i tworzenia udanych projektów. Przykłady z różnych mediów periodyków, książek, gazet, telewizji, stron internetowych i tożsamości korporacyjnej. Ćwiczenia i wskazówki dla studentów oraz przykłady rzeczywistych zamówień.";
        $book->pages = 208;
        $book->link = "http://helion.pl/ksiazki/szkola-projektowania-graficznego-zasady-i-praktyka-nowe-programy-i-technologie-dabner-david-stewart-sandra-zempol-eric,a_031e.htm";
        $book->thumbnail = "david-dabner-szkola-projektowania-graficznego.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "David Herman";
        $book->title = "Efektywny JavaScript. 68 sposobów wykorzystania potęgi języka";
        $book->description = "Te tajemnicze zasady zostały zebrane w niniejszej książce. Jeśli będziesz o nich pamiętać, wykorzystasz w pełni potencjał JavaScriptu. W trakcie lektury dowiesz się, jak najlepiej deklarować zmienne, używać funkcji oraz radzić sobie z obiektami i prototypami. W kolejnych rozdziałach nauczysz się budować przyjazne API oraz korzystać ze słowników i tablic. Na sam koniec zdobędziesz informacje, które mają kluczowe znaczenie w przypadku programowania współbieżnego. Jeżeli jesteś programistą języka JavaScript, jeżeli chcesz poprawić swoje umiejętności programowania w tym języku, jest to dla Ciebie lektura obowiązkowa. Przekonaj się, jak przyjemne i wydajne może być programowanie w JavaScripcie!";
        $book->pages = 216;
        $book->link = "http://helion.pl/ksiazki/efektywny-javascript-68-sposobow-wykorzystania-potegi-jezyka-david-herman,efprjs.htm";
        $book->thumbnail = "david-herman-efektywny-javascript.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "John Resig, Russ Ferguson, John Paxton";
        $book->title = "Zaawansowane techniki języka JavaScript. Wydanie II";
        $book->description = "Niniejsza książka stanowi kompendium wiedzy o nowoczesnym języku JavaScript. Zawiera zwięzłe, praktyczne informacje, których każdy doskonały programista będzie potrzebował do pisania aplikacji internetowych. Autorzy skoncentrowali się na zasadniczych tematach i przedstawili wszystkie istotne kwestie dotyczące zaawansowanych technik programowania w tym języku. Opisali również praktyczne sposoby wykorzystania tych technik, wskazując przy tym sposoby uniknięcia potencjalnych problemów.";
        $book->pages = 200;
        $book->link = "http://helion.pl/ksiazki/zaawansowane-techniki-jezyka-javascript-wydanie-ii-john-resig-russ-ferguson-john-paxton,ztejs2.htm";
        $book->thumbnail = "john-resig-zaawansowane-techniki-jezyka-javascript.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Michał Bartyzel";
        $book->title = "Getting Things Programmed. Droga do efektywności";
        $book->description = "Na pracę programisty składa się bardzo wiele zadań. Nawet jeżeli 90% czasu spędzamy na „klepaniu w klawiaturę”, to w trakcie tych działań wykonujemy całą gamę najróżniejszych czynności.Sprawne sterowanie swoją uwagą, planowanie zadań czy umiejętność ich oszacowania to wiedza, której brakuje większości programistów. Często nie zdajemy sobie nawet sprawy z istnienia problemów spowalniających naszą pracę. W niniejszej książce Autor przedstawia bogaty wachlarz wyzwań stojących przed świadomym programistą. Nie poprzestaje na tym: wysuwa propozycje samodoskonalenia. Opisuje sprawdzone recepty pomagające zrozumieć codzienne problemy, rozbija je na czynniki pierwsze i przygotowuje do walki o lepszą organizację czasu.";
        $book->pages = 184;
        $book->link = "http://helion.pl/ksiazki/getting-things-programmed-droga-do-efektywnosci-michal-bartyzel,droppp.htm";
        $book->thumbnail = "michal-bartyzel-getting-things-programmed.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Douglas Crockford";
        $book->title = "JavaScript - mocne strony";
        $book->description = "Książka \"JavaScript -- mocne strony\" to wyjątkowy podręcznik do nauki tego popularnego, dynamicznego języka programowania. Dowiesz się z niej, jak efektywnie wykorzystać wszystkie jego mocne strony (m.in. funkcje, dynamiczne obiekty, literały obiektowe) oraz jak unikać pułapek. Poznasz elementy składowe języka oraz sposoby ich łączenia, zrozumiesz, na czym polega dziedziczenie prototypowe, w jaki sposób brak kontroli typów ma pozytywny wpływ na pisanie aplikacji oraz dlaczego stosowanie zmiennych globalnych jako podstawowego modelu programowania nie jest dobrym pomysłem. Znając wszelkie ograniczenia języka JavaScript, będziesz mógł profesjonalnie wykorzystać jego najlepsze części.";
        $book->pages = 160;
        $book->link = "http://helion.pl/ksiazki/javascript-mocne-strony-douglas-crockford,jscmoc.htm";
        $book->thumbnail = "douglas-crockford-javascript-mocne-strony.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Elijah Meeks";
        $book->title = "D3.js w akcji";
        $book->description = "Niniejsza książka pozwoli Ci na płynne rozpoczęcie pracy z tą biblioteką, dającą fantastyczne możliwości. Nauczysz się, jak tworzyć interaktywną grafikę i aplikacje sterowane danymi. Zaczniesz od zestawu praktycznych przykładów, dostosowanych do różnego rodzaju wykresów, sieci i map. Wykorzystasz przy tym gotowe układy z biblioteki D3. Zapoznasz się z praktycznymi technikami projektowania zawartości stron, tworzenia animacji i prezentowania zmieniających się danych. Zobaczysz między innymi, jak tworzyć interaktywną grafikę i wykorzystywać dane przesyłane strumieniowo.";
        $book->pages = 400;
        $book->link = "http://helion.pl/ksiazki/d3-js-w-akcji-elijah-meeks,d3jsak.htm";
        $book->thumbnail = "elijah-meeks-d3js-w-akcji.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Tony Parisi";
        $book->title = "Aplikacje 3D. Przewodnik po HTML5, WebGL i CSS3";
        $book->description = "Ta wyjątkowa książka została w całoci powięcona włanie zagadnieniom związanym z grafiką 3D w przeglądarce internetowej. Sięgnij po nią i przekonaj się, jak wykorzystać API WebGL do renderowania trójwymiarowej grafiki w czasie rzeczywistym. W kolejnych rozdziałach poznasz bibliotekę języka JavaScript Three.js, która w znaczący sposób ułatwia życie programisty. Informacje zawarte w dalszych rozdziałach pozwolą Ci skorzystać z zaawansowanych efektów w CSS3 i tworzyć animacje trójwymiarowe. Zaznajomisz się też z detalami tworzenia aplikacji dla urządzeń mobilnych. Twoją uwagę z pewnocią przykuje przegląd narzędzi do tworzenia trójwymiarowych modeli i animacji zarówno tych klasycznych, jak i tych online. Książka ta jest doskonałą lekturą dla wszystkich deweloperów chcących wzbogacić swój warsztat o elementy grafiki 3D.";
        $book->pages = 344;
        $book->link = "http://helion.pl/ksiazki/aplikacje-3d-przewodnik-po-html5-webgl-i-css3-tony-parisi,apli3d.htm";
        $book->thumbnail = "tony-parisi-aplikacje-3d.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Michael Mikowski, Josh Powell";
        $book->title = "Single Page Web Applications. Programowanie aplikacji internetowych z JavaScript";
        $book->description = "Jeżeli masz pomysł na taką aplikację, a nie wiesz, od czego zacząć, sięgnij po tę książkę. Dzięki niej zbudujesz swoją pierwszą jednostronicową aplikację internetową oraz poznasz możliwości współczesnego języka JavaScript. W kolejnych rozdziałach będziesz budować aplikację, jednocześnie zdobywając wiedzę na temat wzorca MVC, modelu danych, modułów oraz interfejsu. Kiedy już opanujesz tworzenie klienta, przyjdzie czas na implementację serwera. Jest on odpowiedzialny za przetwarzanie danych otrzymywanych z przeglądarki. W trakcie lektury poznasz możliwości Node.js oraz skonfigurujesz bazę danych. Na sam koniec przygotujesz Twoją aplikację do pracy w środowisku produkcyjnym.";
        $book->pages = 456;
        $book->link = "http://helion.pl/ksiazki/single-page-web-applications-programowanie-aplikacji-internetowych-z-javascript-michael-mikowski-josh-powell,sipawe.htm";
        $book->thumbnail = "michael-mikowski-single-page-web-applications.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Adrian Frutiger";
        $book->title = "Człowiek i jego znaki";
        $book->description = "Kompendium wiedzy na temat formy i znaczenia znaku graficznego, symbolu oraz pisma w kontekście historycznym, kulturowym oraz psychologicznym. Historia podstawowych form graficznych, które tworzyli ludzie różnych kultur - od epoki kamienia do współczesności. Uporządkowana i usystematyzowana wiedza o twórczym powstawaniu piktogramów, znaków-symboli, znaków-sygnałów oraz pisma. Omówienie znaków literowych, refleksja nad czytelnością i siłą oddziaływania znaków, nad komunikacją wizualną oraz zagadnienia tworzenia odmian krojów pisma. A wszystko to w połączeniu z tłem historycznym, studium kulturowym oraz psychologicznym oddziaływaniem znaków na człowieka i ich mocą wizualną daje nową jakość spojrzenia na omawiane zagadnienia. Teoria jest doskonale ilustrowana rysunkami, książka napisana zwięźle i oszczędnie, z przejrzystym układem treści. To pierwsza tego typu pozycja w Polsce przedstawiająca powyższy krąg tematyczny. W Europie doczekała się wydań w języku niemieckim, francuskim, angielskim oraz hiszpańskim.";
        $book->pages = 296;
        $book->link = "http://lubimyczytac.pl/ksiazka/58133/czlowiek-i-jego-znaki";
        $book->thumbnail = "adrian-frutiger-czlowiek-i-jego-znaki.jpg";
        $book->save();
        
        $book = new Book();
        $book->author = "Keith Houston";
        $book->title = "Ciemne typki. Sekretne życie znaków typograficznych";
        $book->description = "Keith Houston w książce zainspirowanej jego popularnym blogiem shadycharacters.co.uk opowiada o pochodzeniu znaków typograficznych, zarówno tych używanych powszechnie (i bezrefleksyjnie), jak i tych nieco mniej znanych. To zbiór fascynujących historii zabierających czytelnika w podróż przez stulecia istnienia pisma – Houston wspomina tu o praktykach średniowiecznych skrybów, wynalezieniu ruchomej czcionki przez Gutenberga i znaczeniu ery cyfrowej. Omawianym zagadnieniom towarzyszą liczne przykłady. Ciemne typki są jednak bardziej dziełem entuzjasty typografii niż naukową rozprawą przeznaczoną tylko dla wąskiego grona znawców. To wciągająca lektura napisana z dużą doza humoru, uzmysławiająca, że nawet cudzysłów może skrywać tajemnicę.";
        $book->pages = 300;
        $book->link = "http://lubimyczytac.pl/ksiazka/275298/ciemne-typki";
        $book->thumbnail = "keith-houston-ciemne-typki.jpg";
        $book->save();
    }
}
