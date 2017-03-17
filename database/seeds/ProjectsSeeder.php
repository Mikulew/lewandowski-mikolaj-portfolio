<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = new Project();    
        $project->title = "Krzysztof Przybyło &ndash; Nauczyciel gitary";
        $project->description = "Strona wizytówka dla nauczyciela gitary, który prowadzi lekcje z tego instrumentu przez skype albo na żywo. Własna napisana animacja scrollowania w jQuery. Hamburger menu na telefony.";
        $project-> link = "http://przybylo.mikulew.civ.pl/";
        $project->thumbnail = "przybylo.png";
        $project->save();
        $project->technology()->attach(1);
        $project->technology()->attach(2);
        $project->technology()->attach(3);
        $project->technology()->attach(6);
        $project->technology()->attach(7);
        $project->technology()->attach(13);
        $project->technology()->attach(18);
        $project->technology()->attach(21);
        $project->technology()->attach(22);
        
        $project = new Project();    
        $project->title = "Blog Gitary";
        $project->description = "Strona wizytówka z prostym panelem adnimistracyjnym do dodawania wpisów na blogu oraz sprawdzania wiadomości od użytkowników, którzy chcą się nauczyć grania na gitarze";
        $project-> link = "www.wp.pl";
        $project->thumbnail = "gitara-publiczna.jpg";
        $project->save();
        $project->technology()->attach(1);
        $project->technology()->attach(2);
        $project->technology()->attach(7);
        $project->technology()->attach(15);
        $project->technology()->attach(37);
        $project->technology()->attach(38);
        $project->technology()->attach(40);
    }
}
