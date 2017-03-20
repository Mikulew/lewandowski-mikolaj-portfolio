<?php

use Illuminate\Database\Seeder;
use App\Canvas;

class CanvasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $canvas = new Canvas();
        $canvas->category_id = 0;
        $canvas->title = "Paint";
        $canvas->description = "Narysuj mi obrazek i zapisz sobie na komputerze!";
        $canvas->link = "https://github.com/Mikulew/paint";
        $canvas->io = "https://mikulew.github.io/paint/";
        $canvas->thumbnail = "paint.png";
        $canvas->save();
        $canvas->technology()->attach(1);
        $canvas->technology()->attach(2);
        $canvas->technology()->attach(6);
        $canvas->technology()->attach(7);
        $canvas->technology()->attach(8);
        
        $canvas = new Canvas();
        $canvas->category_id = 1;
        $canvas->title = "Circles animation";
        $canvas->description = "Prosta animacja kółek";
        $canvas->link = "https://github.com/Mikulew/circles-animation";
        $canvas->io = "https://mikulew.github.io/circles-animation/";
        $canvas->thumbnail = "circles-animation.png";
        $canvas->save();
        $canvas->technology()->attach(1);
        $canvas->technology()->attach(2);
        $canvas->technology()->attach(7);
        $canvas->technology()->attach(8);
        
        $canvas = new Canvas();
        $canvas->category_id = 1;
        $canvas->title = "CSS Variables";
        $canvas->description = "Pobaw się suwakami, żeby zmienić właściwości obrazka!";
        $canvas->io = "https://mikulew.github.io/CSS-Variables/";
        $canvas->link = "https://github.com/Mikulew/CSS-Variables";
        $canvas->thumbnail = "css-variables.png";
        $canvas->save(); 
        $canvas->technology()->attach(1);
        $canvas->technology()->attach(2);
        $canvas->technology()->attach(7);
        
        $canvas = new Canvas();
        $canvas->category_id = 1;
        $canvas->title = "JavaScript Drum Kit";
        $canvas->description = "Zagraj sobie na perkusji za pomocą klawiatury!";
        $canvas->link = "https://github.com/Mikulew/JavaScript-Drum-Kit";
        $canvas->io = "https://mikulew.github.io/JavaScript-Drum-Kit/";
        $canvas->thumbnail = "javascript-drum-kit.jpg";
        $canvas->save();
        $canvas->technology()->attach(1);
        $canvas->technology()->attach(2);
        $canvas->technology()->attach(7);
        
        $canvas = new Canvas();
        $canvas->category_id = 1;
        $canvas->title = "CSS Text Shadow Mouse Move Effect";
        $canvas->description = "Zmień tekst i zobacz, że cienie tekstu!";
        $canvas->link = "https://github.com/Mikulew/css-text-shadow-mouse-move-effect";
        $canvas->io = "https://mikulew.github.io/css-text-shadow-mouse-move-effect/";
        $canvas->thumbnail = "css-text-shadow-mouse-move-effect.jpg";
        $canvas->save();
        $canvas->technology()->attach(1);
        $canvas->technology()->attach(2);
        $canvas->technology()->attach(7);
        
        $canvas = new Canvas();
        $canvas->category_id = 1;
        $canvas->title = "CSS Variables 2";
        $canvas->description = "Zmiana tła za pomocą kursora.";
        $canvas->link = "https://github.com/Mikulew/CSS-Variables-2";
        $canvas->io = "https://mikulew.github.io/CSS-Variables-2/";
        $canvas->thumbnail = "css-variables2.jpg";
        $canvas->save();
        $canvas->technology()->attach(1);
        $canvas->technology()->attach(2);
        $canvas->technology()->attach(7);
        
        $canvas = new Canvas();
        $canvas->category_id = 1;
        $canvas->title = "Slide in on scroll";
        $canvas->description = "Scrolluj i zdjęcia się pojawiają";
        $canvas->link = "https://github.com/Mikulew/slide-in-on-scroll";
        $canvas->io = "https://mikulew.github.io/slide-in-on-scroll/";
        $canvas->thumbnail = "slide-in-on-scroll.jpg";
        $canvas->save();
        $canvas->technology()->attach(1);
        $canvas->technology()->attach(2);
        $canvas->technology()->attach(7);
        
        $canvas = new Canvas();
        $canvas->category_id = 1;
        $canvas->title = "Fun with HTML5 Canvas";
        $canvas->description = "Przyciśnij przycisk myszy i zobacz co się stanie!";
        $canvas->link = "https://github.com/Mikulew/Fun-with-HTML5-Canvas";
        $canvas->io = "https://mikulew.github.io/Fun-with-HTML5-Canvas/";
        $canvas->thumbnail = "fun-with-html5-canvas.jpg";
        $canvas->save();
        $canvas->technology()->attach(1);
        $canvas->technology()->attach(2);
        $canvas->technology()->attach(7);
        $canvas->technology()->attach(8);
        
        $canvas = new Canvas();
        $canvas->category_id = 1;
        $canvas->title = "Accordion";
        $canvas->description = "Internetowy sposób na pokazywanie treści, kiedy chcesz!";
        $canvas->link = "https://github.com/Mikulew/accordion";
        $canvas->io = "https://mikulew.github.io/accordion/";
        $canvas->thumbnail = "accordion.jpg";
        $canvas->save();
        $canvas->technology()->attach(1);
        $canvas->technology()->attach(2);
        $canvas->technology()->attach(7);
        $canvas->technology()->attach(13);
        
        $canvas = new Canvas();
        $canvas->category_id = 1;
        $canvas->title = "Aplikacja ToDoList";
        $canvas->description = "Internetowy sposób na pokazywanie treści, kiedy chcesz!";
        $canvas->link = "https://github.com/Mikulew/to-do-list-app";
        $canvas->io = "https://mikulew.github.io/to-do-list-app/";
        $canvas->thumbnail = "to-do-list-app.jpg";
        $canvas->save();
        $canvas->technology()->attach(1);
        $canvas->technology()->attach(2);
        $canvas->technology()->attach(7);
        
        $canvas = new Canvas();
        $canvas->category_id = 1;
        $canvas->title = "Sortowanie tabeli według kolumn";
        $canvas->description = "Co chcesz, to się posortuje!";
        $canvas->link = "https://github.com/Mikulew/table-sorting-by-columns";
        $canvas->io = "https://mikulew.github.io/table-sorting-by-columns/";
        $canvas->thumbnail = "table-sorting-by-columns.jpg";
        $canvas->save();
        $canvas->technology()->attach(1);
        $canvas->technology()->attach(2);
        $canvas->technology()->attach(7);
    }
}
