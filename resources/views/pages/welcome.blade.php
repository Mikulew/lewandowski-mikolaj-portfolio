@extends('main')

@section('title', '| Portfolio')

@section('css')
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Droid+Serif|Playfair+Display:400,700" rel="stylesheet">
    <link  href="css/welcome.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
@endsection

@section('body')
<header>
    <img id="headerImage" src="/img/page/welcome-page-low.jpg" alt="welcome page">
    <h1 class="welcome-header-heading animated fadeInLeft"><span class="welcome-bold">Strona internetowa</span></h1>
    <p class="welcome-header-paragraph animated fadeInLeft"><span class="welcome-bold welcome-blue">Dla programisty:</span><br> Dokument HTML udostępniony<br>w internecie przez serwer WWW</p>
    <p class="welcome-header-paragraph animated fadeInLeft"><span class="welcome-bold welcome-blue">Dla właściciela firmy:</span><br> jest ona przede wszystkim<br>wizytówką jego działalności</p>
    <i id="headerButton" class="chevron circle down icon animated fadeInUp"></i>
</header>
<section id="sectionNewspaper" class="welcome-newspaper">
    <div class="newspaper-huge-heading">Strona WWW</div>
<!--    <h2 class="welcome-header-heading animated fadeIn">Strona internetowa to nieodłączna część prężnie rozwijających się firm.</h2>-->
    <div class="newspaper-subhead">Strona internetowa to nieodłączna część prężnie rozwijających się firm</div>
    <div class="collumns">
        <div class="collumn">
            <div class="head">
                <span class="headline column1">Prowadzenie działalności gospodarczej</span>
                <p><span class="headline subcolumn1">Strona WWW ma znaczenie dla wizerunku firmy</span></p>
                <p>Strony internetowe wykorzystywane w&nbsp;celu prowadzenia działalności gospodarczej mają duże znaczenie dla wizerunku firmy, co może mieć wpływ na wynik ekonomiczny działalności rynkowej, a&nbsp;ewentualne błędy na stronie internetowej mogą negatywnie oddziaływać na potencjalnych klientów</p>
                <p>Profesjonalna prezentacja oferty firmy nieograniczonej liczbie klientów i&nbsp;kontrahentów. To właśnie sposób prezentacji oferty wyróżnia profesjonalne firmy.</p> 
            </div>
        </div>
        <div class="collumn">
                <div class="head"><span class="headline column2">Potencjalni klienci</span><p><span class="headline subcolumn2">Rośnie sprzedaż przez Internet</span></p></div>
                <p>Obecnie, gdy coraz większa ilość potencjalnych klientów oraz kontrahentów poszukuje informacji na temat produktów i&nbsp;usług  w&nbsp;internecie, posiadanie strony firmowej jest KONIECZNOŚCIĄ. </p>
                <img src="/img/page/bar-chart.svg" alt="Bar char logo">
        </div>
        <div class="collumn">
                <div class="head"><span class="headline column3">Strona musi być funkcjonalna</span><p><span class="headline subcolumn3">Fukcjonalność dla użytkownika</span></p></div>
                <p>Każdy projekt strony analizowany jest pod kątem  jego funkcjonalności dla użytkownika. Dobra strona internetowa to taka na której Twój klient poczuje się jak we własnym domu.</p>
                <p>Sposób przedstawienia oferty grafika, zrozumiały język oraz przejrzysta i&nbsp;intuicyjna nawigacja odróżni Twoją firmę od innych oraz wzbudzi zaufanie klientów.</p>
        </div>
        <div class="collumn">
                <div class="head"><span class="headline column4">Oszczędność pieniędzy </span><p><span class="headline subcolumn4">Płacisz raz a strona działa latami</span></p></div>
                <p>Inwestycja w&nbsp;stronę internetową zwraca się bardzo szybko, raz zaprojektowana strona może działać sprawnie latami. Natomiast straty z nieposiadania strony internetowej mogą być niewymierne.</p>
                <img src="/img/page/money.svg" alt="save money logo">
        </div>
        <div class="collumn">
                <div class="head"><span class="headline column5">Pozytywny wizerunek</span><p><span class="headline subcolumn5">Prosty sposób komunikacji z&nbsp;klientem</span></p></div>
                <p>Profesjonalna strona internetowa świadczy o&nbsp; firmie. Dobra atmosfera wokół marki, starannie przygotowana oferta przyciąga klientów i&nbsp; wzmacnia pozycje firmy na rynku.</p>
                <p>Dzięki stronie internetowej nie tracisz czasu na spotkania czy telefony do klientów. Strona www daje możliwość umieszczenia istotnych dla klientów informacji w&nbsp;przejrzysty i&nbsp;zrozumiały sposób. </p>
        </div>
        <i id="newspaperButton" class="chevron circle down icon animated fadeInUp"></i>
    </div>
</section>
<section id="sectionCharts" class="welcome-charts">
    <h2 class="charts-huge-heading">TESTOWANIE</h2>
</section>
@endsection


@section('scripts')
<script src="/js/jquery.scrollTo.min.js"></script>
<script>       
    (function(){
        var imgHeader = new Image();
        imgHeader.src = '/img/page/welcome-page.jpg';

        imgHeader.onload = function() {
            $('#headerImage').attr({src: imgHeader.src});
        };
        $.scrollTo(0);
        $('#headerButton').click(function(){
            $.scrollTo($('#sectionNewspaper'), 1000);
        });
        $('#newspaperButton').click(function(){
            $.scrollTo($('#sectionCharts'), 1000);
        });
    })();
</script>
@endsection