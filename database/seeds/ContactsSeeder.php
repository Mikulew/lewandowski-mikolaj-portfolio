<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new Contact();
        $contact->name = "Jan Kowalski";
        $contact->email = "kowalski@gmail.com";
        $contact->description = "Chciałbym zamówić u Pana stronę internetową dla piekarni w Łobzowie";
        $contact->phone = "678 564 456";
        $contact->save();
        
        $contact = new Contact();
        $contact->name = "Piotr Nowak";
        $contact->email = "nowak@op.pl";
        $contact->description = "Szukam programisty, który mi zrobi stronę do mojego portfolio ze zdjęciami";
        $contact->phone = "567 865 789";
        $contact->save();
        
        $contact = new Contact();
        $contact->name = "Justyna Ptaś";
        $contact->email = "j.ptas@buziaczek.com";
        $contact->description = "Heeeeja :P :* zjabiściutkie portfooolio, za całuska zrobisz mi stroneczkę o makijażu i o modzie?";
        $contact->phone = "456 567 987";
        $contact->save();
    }
}
