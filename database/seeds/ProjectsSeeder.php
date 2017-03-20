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
    }
}
