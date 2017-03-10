@extends('main')

@section('title', '| Portfolio')

@section('css')
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Playfair+Display:400,700" rel="stylesheet">
    <link  href="css/welcome.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
@endsection

@section('body')
<div id="welcome-panel">
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
        <div class="newspaper-subhead">Strona inter&shy;netowa &ndash; 5 rzeczy, które liczą się dla Ciebie i&nbsp;Twoich klientów.
        </div>
        <div class="newspaper-main">
            <p>Żyjemy w czasach, gdzie pote&shy;ncj&shy;alni klien&shy;ci prze&shy;szu&shy;kują in&shy;ter&shy;net, by zdo&shy;być nie&shy;zbęd&shy;ne info&shy;rma&shy;cje o&nbsp;da&shy;nym pro&shy;duk&shy;cie czy usłu&shy;dze.
            Dla&shy;tego też po&shy;sia&shy;da&shy;jąc stro&shy;nę inter&shy;net&shy;ową, zdo&shy;bywasz prze&shy;wagę nad ko&shy;nku&shy;ren&shy;cją. Nad tą, która tej stro&shy;ny jesz&shy;cze nie ma i&nbsp;nad tą która już ma, bo możesz się lepiej zapre&shy;zentować.
            Dzięki niej zwię&shy;kszysz swój za&shy;sięg i&nbsp;do&shy;tar&shy;cie do szer&shy;szej gru&shy;py do&shy;ce&shy;lo&shy;wej, a&nbsp;co naj&shy;waż&shy;nie&shy;jsze prze&shy;łoży się to rów&shy;nież na wzrost przy&shy;chodu w&nbsp;Twojej firmie.</p>
        </div>
        <div class="collumns">
            <div class="collumn">
                <div class="head">
                    <span class="headline column1">Profe&shy;sjo&shy;nalna prezen&shy;tacja Twojej oferty</span>
                    <p><span class="headline subcolumn1">Stro&shy;na WWW ma zna&shy;cze&shy;nie dla wize&shy;runku fir&shy;my</span></p>
                    <p>To, w&nbsp;jaki spo&shy;sób przed&shy;sta&shy;wisz wi&shy;zu&shy;al&shy;nie swoją ofer&shy;tę, wy&shy;róż&shy;ni Cię spo&shy;śród prze&shy;cięt&shy;nych firm, na&shy;da&shy;jąc cha&shy;rak&shy;ter pro&shy;fe&shy;sjo&shy;na&shy;li&shy;zmu Two&shy;jej.
                    Gra&shy;fi&shy;ka, którą uży&shy;jesz, zro&shy;zu&shy;mia&shy;łe tre&shy;ści, które za&shy;chę&shy;ca&shy;ją do kupna, in&shy;tu&shy;icyjna na&shy;wi&shy;ga&shy;cja nie tylko wzbu&shy;dzi za&shy;ufa&shy;nie klien&shy;tów, ale rów&shy;nież spra&shy;wi, że klient ze&shy;chce wró&shy;cić.</p>
                    <?xml version="1.0" encoding="utf-8"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                    <svg class="newspaper-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
            </div>
            <div class="collumn">
                    <div class="head"><span class="headline column2">Przede wszystkim funkcjo&shy;nalność strony</span><p><span class="headline subcolumn2">Fukcjo&shy;nalność dla użytkow&shy;nika</span></p></div>
                    <p>Bardzo łatwo stra&shy;cić klienta, jeśli strona nie uła&shy;twia mu np. za&shy;kup da&shy;ne&shy;go pro&shy;duktu.
                    Co gor&shy;sza, znie&shy;chę&shy;cony klient rzad&shy;ko wra&shy;ca już na taką stro&shy;nę.
                    Dlatego zwra&shy;cam ogrom&shy;ną uwagę na to by każdy pro&shy;jekt, który wyko&shy;nuję, był pod tym wzglę&shy;dem do&shy;kład&shy;nie prze&shy;anali&shy;zowany.
                    Wszystko po to by klient czuł się, jakby kupo&shy;wał w znanym i&nbsp;spraw&shy;dzonym przez siebie sklepie.</p>
            </div>
            <div class="collumn">
                    <div class="head"><span class="headline column3">Czas</span>
                         <?xml version="1.0" encoding="utf-8"?>
                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                        <svg class="newspaper-svg" id="time-svg" version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="444.622px" height="445.191px" viewBox="0 0 444.622 445.191" enable-background="new 0 0 444.622 445.191"
                             xml:space="preserve">
                        <g>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M-97.377,575.88c0-235.333,0-470.667,0-706
                                c213.333,0,426.667,0,640,0c0,235.333,0,470.667,0,706C329.29,575.88,115.957,575.88-97.377,575.88z M220.393,392.335
                                c-82.19-2.155-144.925-58.777-161.46-131.868c-14.835-65.575,11.029-138.648,71.456-178.604
                                c58.019-38.365,131.243-35.733,186.27,0.07c-12.188,12.109-24.25,24.094-36.728,36.492c39.371,0,77.891,0,116.257,0
                                c0-38.75,0-77.103,0-116.064c-13.854,13.919-27.218,27.346-40.677,40.87C308.747,10.551,257.512-4.376,201.158,1.114
                                C144.509,6.634,96.75,31.14,58.361,72.941c-63.505,69.152-79.169,176.165-27.112,263.751
                                c48.161,81.031,133.572,110.818,189.144,108.359C220.393,427.597,220.393,410.138,220.393,392.335z M208.071,101.12
                                c0,47.121,0,93.79,0,140.408c44.945,0,89.502,0,134.062,0c0-8.66,0-17.021,0-25.77c-35.668,0-70.906,0-106.716,0
                                c0-38.419,0-76.442,0-114.639C226.058,101.12,217.272,101.12,208.071,101.12z M379.116,153.692
                                c4.316,14.526,8.492,28.58,12.827,43.17c17.031-1.31,34.691-2.668,52.679-4.051c-4.089-20.971-8.056-41.398-17.274-60.767
                                C410.604,139.56,394.303,146.875,379.116,153.692z M430.535,305.045c7.252-19.777,12.913-39.213,14.798-59.902
                                c-17.849-1.013-35.509-2.015-52.566-2.982c-3.724,14.632-7.289,28.643-10.944,43.006C397.44,291.54,413.68,298.167,430.535,305.045
                                z M258.908,443.229c19.109-2.465,36.354-8.883,53.714-15.665c-7.226-16.811-14.213-33.066-21.024-48.916
                                c-13.572,4.222-26.504,8.245-39.747,12.366C254.127,407.856,256.455,425.081,258.908,443.229z M332.295,354.152
                                c10.275,13.481,20.983,27.53,32.36,42.457c13.472-13.769,26.448-27.031,39.726-40.601c-15.372-11.432-29.701-22.088-43.401-32.276
                                C351.22,334.083,341.896,343.971,332.295,354.152z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M220.393,392.335c0,17.803,0,35.262,0,52.717
                                c-55.572,2.459-140.983-27.328-189.144-108.359C-20.809,249.106-5.144,142.093,58.361,72.941
                                C96.75,31.14,144.509,6.634,201.158,1.114c56.354-5.491,107.589,9.437,154.352,42.115c13.459-13.523,26.823-26.95,40.677-40.87
                                c0,38.961,0,77.314,0,116.064c-38.366,0-76.886,0-116.257,0c12.478-12.397,24.54-24.383,36.728-36.492
                                c-55.026-35.803-128.25-38.435-186.27-0.07c-60.426,39.956-86.291,113.029-71.456,178.604
                                C75.468,333.558,138.203,390.18,220.393,392.335z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M208.071,101.12c9.201,0,17.986,0,27.346,0c0,38.196,0,76.22,0,114.639
                                c35.81,0,71.048,0,106.716,0c0,8.748,0,17.109,0,25.77c-44.56,0-89.116,0-134.062,0C208.071,194.91,208.071,148.241,208.071,101.12
                                z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M379.116,153.692c15.187-6.816,31.487-14.132,48.231-21.647
                                c9.219,19.369,13.186,39.796,17.274,60.767c-17.987,1.383-35.647,2.741-52.679,4.051
                                C387.608,182.271,383.433,168.218,379.116,153.692z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M430.535,305.045c-16.855-6.878-33.095-13.505-48.713-19.879
                                c3.655-14.363,7.221-28.374,10.944-43.006c17.058,0.968,34.718,1.97,52.566,2.982C443.448,265.832,437.787,285.268,430.535,305.045
                                z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M258.908,443.229c-2.453-18.147-4.781-35.372-7.058-52.215
                                c13.243-4.121,26.175-8.145,39.747-12.366c6.812,15.85,13.799,32.105,21.024,48.916
                                C295.263,434.346,278.018,440.764,258.908,443.229z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M332.295,354.152c9.601-10.182,18.925-20.069,28.685-30.42
                                c13.7,10.188,28.029,20.845,43.401,32.276c-13.277,13.569-26.254,26.832-39.726,40.601
                                C353.278,381.683,342.57,367.634,332.295,354.152z"/>
                        </g>
                        </svg>


                    </div>
                    <p>To naj&shy;cen&shy;niej&shy;sze co w&nbsp;ży&shy;ciu się mamy więc warto do do&shy;brze wy&shy;ko&shy;rzy&shy;sty&shy;wać. Stro&shy;na spra&shy;wia, że nie tra&shy;cisz cza&shy;su na spo&shy;tka&shy;nia i&nbsp;te&shy;le&shy;fo&shy;ny do klien&shy;tów.
                    Wy&shy;star&shy;czy, że w&nbsp;jasny spo&shy;sób za&shy;ko&shy;mu&shy;ni&shy;ku&shy;jesz swoją ofer&shy;tę na stro&shy;nie, a&nbsp;klient sam zde&shy;cy&shy;du&shy;je czy chce sko&shy;rzy&shy;stać z&nbsp;Two&shy;ich usług.</p>
            </div>
            <div class="collumn">
                    <div class="head"><span class="headline column4">Małe koszty</span><p><span class="headline subcolumn4">Płacisz raz a strona działa latami</span></p></div>
                    <p>Jed&shy;no&shy;ra&shy;zo&shy;wa opła&shy;ta w&nbsp;za&shy;mian za wy&shy;ko&shy;na&shy;nie stro&shy;ny i&nbsp;jej funk&shy;cjo&shy;no&shy;wa&shy;nie przez dłu&shy;gie lata.
                    To drob&shy;na in&shy;we&shy;sty&shy;cja fi&shy;nan&shy;so&shy;wa. Nie tyl&shy;ko szyb&shy;ko Ci się zwró&shy;ci, ale przy&shy;nie&shy;sie rów&shy;nież ogrom&shy;ne i&nbsp;dłu&shy;go&shy;trwa&shy;le ko&shy;rzy&shy;ści fi&shy;nan&shy;so&shy;we Tobie i&nbsp;Twojej firmie.</p>
                    <?xml version="1.0" encoding="utf-8"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                    <svg class="newspaper-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
                    <div class="head">
                        <span class="headline column5">Pozytywny wizerunek firmy</span>
                        <p>
                            <span class="headline subcolumn5">Prosty sposób komunikacji z&nbsp;klientem</span>
                        </p>
                    </div>
                    <p>Ocze&shy;ki&shy;wa&shy;nia klien&shy;tów nie&shy;ustan&shy;nie ro&shy;sną. Ocze&shy;ku&shy;ją oni atrak&shy;cyj&shy;nych cen i&nbsp;pro&shy;mo&shy;cji przy wy&shy;so&shy;kiej ja&shy;ko&shy;ści usługi.
                    To za co są w&nbsp;stanie za&shy;pła&shy;cić wię&shy;cej to za mar&shy;kę, po&shy;zy&shy;tyw&shy;ne emo&shy;cje i&nbsp;pew&shy;ność, że ku&shy;pu&shy;jąc coś, zy&shy;sku&shy;ją np. lep&shy;sze życie.</p>
                    <p>Budo&shy;wanie do&shy;brej atmos&shy;fery wokół włas&shy;nej mar&shy;ki i&nbsp;sta&shy;ran&shy;ne przy&shy;go&shy;to&shy;wy&shy;wa&shy;nie swo&shy;jej ofer&shy;ty wzmac&shy;nia po&shy;zy&shy;cję Two&shy;jej fir&shy;my, świa&shy;do&shy;mość Two&shy;ich klien&shy;tów, a&nbsp;także umac&shy;nia ich w&nbsp;wie&shy;rze, że warto za&shy;pła&shy;cić Ci więcej.</p>
            </div>
            <i id="newspaperButton" class="chevron circle down icon"></i>
        </div>
    </section>
<!--
    <section id="sectionCharts" class="welcome-charts">
        <h2 class="charts-huge-heading">TESTOWANIE</h2>
    </section>  
-->
</div>
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