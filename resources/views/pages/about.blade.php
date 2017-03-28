@extends('main')

@section('title', '| About')

@section('css')
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
@endsection

@section('body')
<main id="about-panel">
    <img id="aboutImage" src="/img/page/about-page-low.jpg" alt="pavement photo">
    <section class="about-gallery">
        <figure class="photo">
            <img src="/img/technology/HTML5.svg" alt="HTML5 logo">
            <figcaption>
                HTML5
            </figcaption>
        </figure>
        <figure class="photo">
            <img src="/img/technology/CSS3.svg" alt="CSS3 logo">
            <figcaption>
                CSS3
            </figcaption>
        </figure>
        <figure class="photo">
            <img src="/img/technology/JavaScript.svg" alt="JavaScript logo">
            <figcaption>
                JavaScript
            </figcaption>
        </figure>
        <figure class="photo">
            <img src="/img/technology/RWD.svg" alt="RWD logo">
            <figcaption>
                RWD
            </figcaption>
        </figure>
        <figure class="photo">
            <img src="/img/technology/canvas.svg" alt="Canvas logo">
            <figcaption>
                Canvas
            </figcaption>
        </figure>
        <figure class="photo">
            <img src="/img/technology/jQuery.svg" alt="jQuery logo">
            <figcaption>
                jQuery
            </figcaption>
        </figure>
        <figure class="photo">
            <img src="/img/technology/SASS.svg" alt="SASS logo">
            <figcaption>
                SASS
            </figcaption>
        </figure>
        <figure class="photo">
            <img src="/img/technology/Bootstrap.svg" alt="Bootstrap logo">
            <figcaption>
                Bootstrap
            </figcaption>
        </figure>
        <figure class="photo">
            <img src="/img/technology/SemanticUI.svg" alt="Semantic UI logo">
            <figcaption>
                Semantic UI
            </figcaption>
        </figure>
        <figure class="photo">
            <img src="/img/technology/gulp.svg" alt="gulp.js logo">
            <figcaption>
                gulp.js
            </figcaption>
        </figure>
        <figure class="photo">
            <img src="/img/technology/PS.svg" alt="Photoshop logo">
            <figcaption>
                Photoshop
            </figcaption>
        </figure>
        <figure class="photo">
            <img src="/img/technology/AI.svg" alt="Illustrator logo">
            <figcaption>
                Illustrator
            </figcaption>
       </figure>
        <figure class="photo">
            <img src="/img/technology/php.svg" alt="PHP logo">
            <figcaption>
                PHP
            </figcaption>
        </figure>
        <figure class="photo">
            <img src="/img/technology/laravel.svg" alt="Laravel logo">
            <figcaption>
                Laravel
            </figcaption>
        </figure>
        <figure class="photo">
            <img src="/img/technology/MySQL.svg" alt="MySQL logo">
            <figcaption>
                MySQL
            </figcaption>
        </figure>
        <figure class="photo">
            <img src="/img/technology/git.svg" alt="GIT logo">
            <figcaption>
                GIT
            </figcaption>
        </figure>
    </section>
    <h2 class="about-heading">Co potrafię</h2>
    <section class="about-letter">
        <article class="letter">
            <p>Drogi użytkowniku,</p>

            <p>Od ponad roku zajmuje się front-endem. Droga do zdobycia wiedzy i&nbsp;umiejętności, które już posiadam, nie była prosta.
            Z&nbsp;gąszczu informacji musiałem wybrać to, co jest dla front-end developera najistotniejsze.
            Moje poszukiwania zaowocowały ukończeniem kursu full-stack &bdquo;Od zera do WebDeva&rdquo;.
            Wszystko to, by zgłębić tajniki serwerów dynamicznych stron i&nbsp;by jeszcze lepiej zrozumieć strukturę tych stron.</p>

            <p>Programowanie początkowo traktowałem jako lepszą perspektywę rozwoju mojej kariery, z&nbsp;czasem jednak przerodziło się w moją pasję.
            Pasję, która chcę się dzielić z&nbsp;innymi.
            Pasję, która wymaga nieustannej nauki.
            Jednak gdyby nie pasja już dawno bym rzucił to wymagające przedsięwzięcie.
            Wymagające, bo z&nbsp;myślą o&nbsp;zadowoleniu moich klientów podczas wykonania moich projektów łączę dotrzymanie ustalonych terminów i&nbsp;perfekcję wykończenia każdej strony.</p>

            <p>Dlatego postanowiłem założyć portfolio, które będzie przedstawiać więcej niż tylko moją ofertę i&nbsp;umiejętności.
            Chcąc się wyróżnić, zaprogramowałem własnego bloga (z&nbsp;własnym system CMS) i&nbsp;będę umieszczać na nim wpisy, które zaprezentują całą moją drogę od początkującego front-end developera do pasjonata.</p>

            <p>Na moim blogu przeczytasz o:</p>
            <ul>
                <li>&mdash; dobrze wyglądających stronach, które zachwycają oczy,</li>
                <li>&mdash; polskich front-developerach, na których polecam się wzorować?</li>
                <li>&mdash; recenzjach materiałów, z&nbsp;których korzystałem (tych, mających ogromną wiedzę i&nbsp;tych, których lepiej unikać)</li>
                <li>&mdash; błędach, jakie popełniłem i&nbsp;jak na nich się uczyłem</li>
                <li>&mdash; dlaczego propaguję spotkania branżowe.</li>
            </ul>

            <p>Jeśli chcesz, bym przyczynił się do rozwoju Twojej kariery, zleć mi zaprogramowanie Twojej strony.</p>

            <p>Z poważaniem,</p>

            <p>Mikołaj Lewandowski<br>Front-end developer</p>
            <div class="photo-portfolio">
                 <figure class="photo">
                    <img id="autorImage" src="/img/page/mikulew-hawk-low.jpg" alt="Mikołaj Lewandowski photo">
                    <figcaption>
                        Autor&nbsp;strony
                    </figcaption>
                </figure>
            </div>
        </article>
    </section>
</main>
@endsection


@section('scripts')
<script>       
    (function(){
        var imgAutor = new Image();
        imgAutor.src = '/img/page/mikulew-hawk.jpg';

        imgAutor.onload = function() {
            $('#autorImage').attr({src: imgAutor.src});
        };
        
        var imgAbout = new Image();
        imgAbout.src = '/img/page/about-page.jpg';
        
        imgAbout.onload = function() {
            $('#aboutImage').attr({src: imgAbout.src});
        };
    })();
</script>
@endsection