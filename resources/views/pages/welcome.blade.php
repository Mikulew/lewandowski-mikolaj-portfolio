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
    <div class="welcome-header-container">
        <p class="welcome-header-paragraph animated fadeInLeft"><span class="welcome-bold welcome-blue">Dla programisty:</span><br> Dokument HTML udostępniony<br>w internecie przez serwer WWW</p>
        <p class="welcome-header-paragraph animated fadeInLeft"><span class="welcome-bold welcome-blue">Dla właściciela firmy:</span><br> jest ona przede wszystkim<br>wizytówką jego działalności</p>
    </div>
    <i id="headerButton" class="chevron circle down icon animated fadeInUp"></i>
</header>
<section id="sectionNewspaper" class="welcome-newspaper">
    <div class="newspaper-huge-heading">Strona WWW</div>
<!--    <h2 class="welcome-header-heading animated fadeIn">Strona internetowa to nieodłączna część prężnie rozwijających się firm.</h2>-->
    <div class="newspaper-subhead">Strona internetowa &ndash; 5 rzeczy, które liczą się dla Ciebie i Twoich klientów.
    </div>
    <div class="newspaper-main">
        <p>Żyjemy w czasach, gdzie potencjalni klienci przeszukują internet, by zdobyć niezbędne informacje o danym produkcie czy usłudze.
        Dlatego też posiadając stronę internetową, zdobywasz przewagę nad konkurencją. Nad tą, która tej strony jeszcze nie ma i nad tą która już ma, bo możesz się lepiej zaprezentować.
        Dzięki niej zwiększysz swój zasięg i dotarcie do szerszej grupy docelowej, a co najważniejsze przełoży się to również na wzrost przychodu w Twojej firmie</p>
    </div>
    <div class="collumns">
        <div class="collumn">
            <div class="head">
                <span class="headline column1"> Profesjonalna prezentacja Twojej oferty</span>
                <p><span class="headline subcolumn1">Strona WWW ma znaczenie dla wizerunku firmy</span></p>
                <p>To, w jaki sposób przedstawisz wizualnie swoją ofertę, wyróżni Cię spośród przeciętnych firm, nadając charakter profesjonalizmu Twojej.
                Grafika, którą użyjesz, zrozumiałe treści, które zachęcają do kupna, intuicyjna nawigacja nie tylko wzbudzi zaufanie klientów, ale również sprawi, że klient zechce wrócić.</p> 
                            </div>
        </div>
        <div class="collumn">
                <div class="head"><span class="headline column2">Przede wszystkim funkcjonalność strony</span><p><span class="headline subcolumn2">Fukcjonalność dla użytkownika</span></p></div>
                <p>Bardzo łatwo stracić klienta, jeśli strona nie ułatwia mu np. zakup danego produktu.
                Co gorsza, zniechęcony klient rzadko wraca już na taką stronę.
                Dlatego zwracam ogromną uwagę na to by każdy projekt, który wykonuję, był pod tym względem dokładnie przeanalizowany.
                Wszystko po to by klient czuł się, jakby kupował w znanym i sprawdzonym przez siebie sklepie.</p>
                <?xml version="1.0" encoding="utf-8"?>
                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                <path d="M37.688,255.5c-1.938,0.344-3.844,0.5-5.719,0.5C16.781,256,3.313,245.125,0.5,229.688
                    c-3.125-17.406,8.438-34.063,25.844-37.188c78.344-14.125,162.5-54.063,250.344-118.219L239.75,29.469L416,0l-62.594,167.375
                    l-35.969-43.625C219.625,195.813,127.875,239.25,37.688,255.5z M96,352H64c-17.656,0-32,14.313-32,32v96c0,17.688,14.344,32,32,32
                    h32c17.688,0,32-14.313,32-32v-96C128,366.313,113.688,352,96,352z M352,224h-32c-17.688,0-32,14.313-32,32v224
                    c0,17.688,14.313,32,32,32h32c17.688,0,32-14.313,32-32V256C384,238.313,369.688,224,352,224z M480,160h-32
                    c-17.688,0-32,14.313-32,32v288c0,17.688,14.313,32,32,32h32c17.688,0,32-14.313,32-32V192C512,174.313,497.688,160,480,160z
                     M224,288h-32c-17.656,0-32,14.313-32,32v160c0,17.688,14.344,32,32,32h32c17.688,0,32-14.313,32-32V320
                    C256,302.313,241.688,288,224,288z"/>
                </svg>
        </div>
        <div class="collumn">
                <div class="head"><span class="headline column3">Czas</span><p><span class="headline subcolumn3">Czas przemija, wypowiedziane słowo pozostaje</span></p></div>
                <p>To najcenniejsze co w życiu się mamy więc warto do dobrze wykorzystywać. Strona sprawia, że nie tracisz czasu na spotkania i telefony do klientów.
                Wystarczy, że w jasny sposób zakomunikujesz swoją ofertę na stronie, a klient sam zdecyduje czy chce skorzystać z Twoich usług.</p>
        </div>
        <div class="collumn">
                <div class="head"><span class="headline column4">Małe koszty</span><p><span class="headline subcolumn4">Płacisz raz a strona działa latami</span></p></div>
                <p>Jednorazowa opłata w zamian za wykonanie strony i jej funkcjonowanie przez długie lata.
                To drobna inwestycja finansowa. Nie tylko szybko Ci się zwróci, ale przyniesie również ogromne i długotrwale korzyści finansowe Tobie i Twojej firmie..</p>
                <?xml version="1.0" encoding="utf-8"?>
                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="600px" height="600px" viewBox="0 0 600 600" enable-background="new 0 0 600 600" xml:space="preserve">
                <g>
                    <g>
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M2.941,2.941c200,0,400,0,600,0c0,200,0,400,0,600
                            c-200,0-400,0-600,0C2.941,402.941,2.941,202.941,2.941,2.941z M69.965,510.541c14.3-8.95,26.807-16.464,38.985-24.48
                            c13.771-9.062,27.591-8.384,41.661-1.203c37.851,19.313,75.837,38.364,113.457,58.117c33.591,17.639,65.655,18.244,98.168-3.424
                            c56.142-37.411,113.098-73.599,169.437-110.717c18.742-12.348,37.09-25.393,54.771-39.206
                            c10.368-8.097,17.532-18.901,11.035-33.274c-5.645-12.472-19.911-19.997-35.677-16.895c-12.25,2.407-24.015,7.278-35.854,11.012
                            c-4.188-32.617-41.792-29.667-72.363-8.777c-11.19-12.891-25.311-21.243-42.297-13.114
                            c-25.207,12.058-49.538,25.956-74.242,39.071c0.479,1.915,0.96,3.828,1.437,5.741c12.034,0,24.161-0.937,36.081,0.235
                            c14.936,1.465,30.805,2.017,44.313,7.657c27.867,11.636,30.36,51.836,4.94,68.331c-8.783,5.698-19.41,11.429-29.42,11.851
                            c-41.024,1.724-82.221,3.159-123.185,1.195c-25.095-1.207-45.183-16.9-62.636-34.64c14.084,2.643,27.507,8.904,41.193,9.548
                            c46.322,2.168,92.735,2.628,139.122,2.958c6.37,0.046,14.154-2.814,18.784-7.055c5.072-4.641,10.062-12.563,9.803-18.836
                            c-0.216-5.21-7.184-12.221-12.796-14.625c-7.752-3.32-17.015-3.949-25.672-4.183c-37.787-1.022-75.718-2.021-109.086-22.71
                            c-22.836-14.158-44.4-30.357-66.687-45.419c-25.197-17.027-52.506-24.319-81.972-13.598c-23.337,8.49-46.08,18.646-68.921,28.447
                            c-15.915,6.83-31.552,14.31-48.208,21.909C26.291,413.62,47.708,461.15,69.965,510.541z M315.148,321.323
                            c43.043-0.224,76.471-33.822,76.074-76.467c-0.396-42.285-34.832-76.728-76.684-76.695c-42.999,0.036-76.92,34.639-76.498,78.036
                            C238.462,289.412,271.448,321.551,315.148,321.323z M407.394,76.349c-30.48-0.363-55.513,24.749-53.643,54.979
                            c0.316,5.077,4.699,10.953,8.861,14.539c11.732,10.106,25.348,18.187,36.222,29.066c7.462,7.463,13.984,8.856,23.236,6.096
                            c26.327-7.854,40.844-31.089,37.043-59.915C455.768,95.745,433.72,76.663,407.394,76.349z"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M69.965,510.541C47.708,461.15,26.291,413.62,4.136,364.459
                            c16.656-7.6,32.292-15.079,48.208-21.909c22.841-9.801,45.584-19.957,68.921-28.447c29.466-10.722,56.775-3.43,81.972,13.598
                            c22.286,15.062,43.851,31.261,66.687,45.419c33.369,20.688,71.299,21.688,109.086,22.71c8.657,0.233,17.92,0.862,25.672,4.183
                            c5.612,2.404,12.58,9.415,12.796,14.625c0.259,6.273-4.73,14.195-9.803,18.836c-4.63,4.24-12.414,7.101-18.784,7.055
                            c-46.387-0.33-92.8-0.79-139.122-2.958c-13.686-0.644-27.109-6.905-41.193-9.548c17.453,17.739,37.542,33.433,62.636,34.64
                            c40.964,1.964,82.161,0.528,123.185-1.195c10.01-0.422,20.637-6.152,29.42-11.851c25.42-16.495,22.927-56.695-4.94-68.331
                            c-13.508-5.641-29.377-6.192-44.313-7.657c-11.92-1.172-24.047-0.235-36.081-0.235c-0.477-1.913-0.957-3.826-1.437-5.741
                            c24.704-13.115,49.035-27.014,74.242-39.071c16.986-8.129,31.106,0.224,42.297,13.114c30.571-20.89,68.175-23.84,72.363,8.777
                            c11.839-3.733,23.604-8.604,35.854-11.012c15.766-3.103,30.032,4.423,35.677,16.895c6.497,14.373-0.667,25.178-11.035,33.274
                            c-17.682,13.813-36.029,26.858-54.771,39.206c-56.339,37.118-113.295,73.306-169.437,110.717
                            c-32.514,21.668-64.578,21.063-98.168,3.424c-37.619-19.753-75.606-38.804-113.457-58.117c-14.07-7.181-27.89-7.858-41.661,1.203
                            C96.771,494.077,84.265,501.591,69.965,510.541z"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M315.148,321.323c-43.7,0.228-76.686-31.912-77.107-75.126
                            c-0.422-43.397,33.499-78,76.498-78.036c41.852-0.033,76.287,34.41,76.684,76.695C391.619,287.501,358.191,321.1,315.148,321.323z
                             M324.776,278.744c0-22.424,0-44.177,0-65.832c-13.454-1.653-35.23,10.306-34.045,18.879c3.783,0.519,7.756,1.063,12.534,1.717
                            c0,15.473,0,30.017,0,45.235C310.806,278.744,317.374,278.744,324.776,278.744z"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M407.394,76.349c26.326,0.314,48.374,19.396,51.72,44.765
                            c3.801,28.826-10.716,52.061-37.043,59.915c-9.252,2.76-15.774,1.367-23.236-6.096c-10.874-10.879-24.489-18.96-36.222-29.066
                            c-4.162-3.586-8.545-9.462-8.861-14.539C351.881,101.097,376.913,75.985,407.394,76.349z M390.516,116.527
                            c1.474,0.455,2.947,0.909,4.424,1.363c1.832,11.351,3.662,22.704,5.658,35.084c4.325-0.284,8.795-0.577,12.854-0.844
                            c0-16.087,0-30.822,0-50.07C403.93,108.067,397.22,112.297,390.516,116.527z"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M324.776,278.744c-7.402,0-13.971,0-21.511,0
                            c0-15.219,0-29.762,0-45.235c-4.778-0.655-8.751-1.199-12.534-1.717c-1.185-8.574,20.591-20.532,34.045-18.879
                            C324.776,234.567,324.776,256.32,324.776,278.744z"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M390.516,116.527c6.704-4.229,13.414-8.46,22.936-14.467
                            c0,19.248,0,33.983,0,50.07c-4.059,0.267-8.528,0.56-12.854,0.844c-1.996-12.381-3.826-23.733-5.658-35.084
                            C393.463,117.436,391.989,116.982,390.516,116.527z"/>
                    </g>
                </g>
                </svg>

        </div>
        <div class="collumn">
                <div class="head"><span class="headline column5">Pozytywny wizerunek firmy.</span><p><span class="headline subcolumn5">Prosty sposób komunikacji z&nbsp;klientem</span></p></div>
                <p>Oczekiwania klientów nieustannie rosną. Oczekują oni atrakcyjnych cen i promocji przy wysokiej jakości produktów/usługi.
                To za co są w stanie zapłacić więcej to za markę, pozytywne emocje i pewność, że kupując coś, zyskują np. lepsze życie.</p>
                <p>Budowanie dobrej atmosfery wokół własnej marki i staranne przygotowywanie swojej oferty wzmacnia pozycję Twojej firmy, świadomość Twoich klientów, a także umacnia ich w wierze, że warto zapłacić Ci więcej.</p>
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