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
        $project->title = "CommsBlack &ndash; zostań beneficjentem kontraktów dla rządu USA";
        $project->description = "Konfiguracja skórki na WordPressie. Tworzenie RWD do layoutu www.commsblack.leanle.com. Skalowalność sekcji na różne rozdzielczości. Większość sekcji posiada zdjęcie i zakończona są skosami. Napisanie slidera w JavaScripcie i interaktywność na stronie.";
        $project-> link = "https://commsblack.leanle.com/";
        $project->thumbnail = "commsblack.png";
        $project->save();
        $project->technology()->attach(1);
        $project->technology()->attach(2);
        $project->technology()->attach(3);
        $project->technology()->attach(6);
        $project->technology()->attach(7);
        $project->technology()->attach(13);
        $project->technology()->attach(18);
        $project->technology()->attach(44);

        $project = new Project();
        $project->title = "Motocentro &ndash; Znajdź najlepszego mechanika";
        $project->description = "Tworzenie layoutu do start-upu Motocentro.eu. Responsywność na komórki,  konfiguracja Gulpa, napisanie dynamicznej nawigacji tzw. „mega drop-down menu”, łączenie kodu HTML z szablonem blade w Laravelu, implementacja pluginów Select2 i jquery-autocomoplete do projektu, rozwiązywanie problemów z działanievm kodu w JavaScripcie w zależności od urządzenia.";
        $project-> link = "https://motocentro.eu/";
        $project->thumbnail = "motocentro.png";
        $project->save();
        $project->technology()->attach(1);
        $project->technology()->attach(2);
        $project->technology()->attach(3);
        $project->technology()->attach(6);
        $project->technology()->attach(7);
        $project->technology()->attach(13);
        $project->technology()->attach(18);
        $project->technology()->attach(37);
        $project->technology()->attach(38);
        $project->technology()->attach(40);

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
