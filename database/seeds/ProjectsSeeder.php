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
        $project->title = "Laravel Blog";
        $project->description = "Pierwsza aplikacja CMS napisana w Laravelu. W tym projekcie napisałem prostego bloga, który wyświetla posty. Ma swój własny panel administracyjny i system CRUD, czyli  cztery podstawowe funkcje w aplikacjach korzystających z pamięci trwałej, które umożliwiają zarządzanie nią. Skrótowiec CRUD zazwyczaj pozwala użytkownikowi na: <ol class=\"ui list\"> <li> utworzenie lub dodanie nowych informacji (create)</li> <li> odczytanie lub wyświetlenie istniejących informacji (read) </li> <li> modyfikowanie lub edycję istniejących informacji (update) </li> <li>usuwanie istniejących informacji (delete)</li></ol> Dodałem system przyjaznych linków (ang. <em>Friendly URLs</em>), które sprawiają, że zaczyna mieć coraz większe znaczenie dla pozycjonowania witryny w wyszukiwarkach. Przyjazne adresy to takie, które „podobają się” zarówno użytkownikom, jak i wyszukiwarkom. Człowiek może je łatwo zapisać, zapamiętać i przeczytać, a robot wyszukiwarki zidentyfikuje na ich podstawie strukturę serwisu i prawidłowo go zaindeksuje.";
        $project-> link = "www.onet.pl";
        $project->thumbnail = "laravel-blog.png";
        $project->save();
        $project->technology()->attach(1);
        $project->technology()->attach(2);
        $project->technology()->attach(7);
        $project->technology()->attach(15);
        $project->technology()->attach(35);
        $project->technology()->attach(36);
        $project->technology()->attach(38);
        
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
        $project->technology()->attach(35);
        $project->technology()->attach(36);
        $project->technology()->attach(38);
    }
}
