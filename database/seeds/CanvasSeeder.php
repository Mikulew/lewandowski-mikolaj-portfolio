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
        $canvas->script = "";
        $canvas->link = "";
        $canvas->thumbnail = "paint.png";
        $canvas->save();
        $canvas->technology()->attach(1);
        $canvas->technology()->attach(2);
        $canvas->technology()->attach(7);
        $canvas->technology()->attach(8);
        
        $canvas = new Canvas();
        $canvas->category_id = 1;
        $canvas->title = "Circles animation";
        $canvas->description = "Prosta animacja kółek";
        $canvas->script = "";
        $canvas->link = "https://github.com/Mikulew/circles-animation";
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
        $canvas->script = "";
        $canvas->link = "https://github.com/Mikulew/CSS-Variables";
        $canvas->thumbnail = "css-variables.png";
        $canvas->save(); 
        $canvas->technology()->attach(1);
        $canvas->technology()->attach(2);
        $canvas->technology()->attach(7);
    }
}
