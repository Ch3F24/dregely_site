<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Contact;
use App\Models\Lexicon;
use App\Repositories\ContactRepository;
use App\Repositories\PageRepository;
use App\Repositories\WorkRepository;
use Database\Factories\AdminFactory;
use Database\Factories\ArticleFactory;
use Database\Factories\LexiconFactory;
use Database\Factories\PublicationFactory;
use Database\Factories\WorkFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        AdminFactory::new()->count(1)->create();

        if (Contact::count() > 0) {
            return;
        }

        $works = array(
            array("11","70-es évek","70s"),
            array("12","Budapest éjszaka","Budapest night"),
            array("13","Kompozitok","Composites"),
            array("14","Notre Dame","Notre Dame"),
            array("15","Archívum","Archiv"),
            array("16","Transfer Ticket","Transfer Ticket"),
            array("17","Aktok","Nudes"),
            array("18","Egyebek","Miscellanous"),
            array("19","Csendéletek","Still lifes"),
            array("20","Közös munkák  (Bányay-Drégely)","Common Works (Bányay-Drégely),"),
            array("21","Objektek I.","Objects I."),
            array("22","Objektek II.","Objects II."),
            array("23","Objektek III.","Objects III."),
            array("24","Elektromos művek","Electric works"),
            array("25","Monoszkóp","Monoscope"),
            array("26","Részecskék","Particles"),
            array("27","DIID","DIID"),
            array("28","BudapestBlue","BudapestBlue"),
            array("29","SZENZOR","Sensor"),
            array("30","Luna'69","Luna'69"),
            array("31","Animals","Animals"),
            array("32","Panoptikum","Panopticon"),
            array("33","TŰZ","Fire"),
//            array("35","Video/animáció","Moving images")
        );

        app(ContactRepository::class)->create([
            'title' => [
                'en' => 'Contact',
                'hu' => 'Kapcsolat'
            ],
            'contact_information' => [
                'en' => '<p>+36 30 658 4743</p><p>drégely@email.com</p><p>9000 Budatétény, Utca utca 100.</p>',
                'hu' => '<p>+36 30 658 4743</p><p>drégely@email.com</p><p>9000 Budatétény, Utca utca 100.</p>'
            ],
            'published' => true,
        ]);

        foreach ($works as $work) {
            app(WorkRepository::class)->create([
                'title' => [
                    'hu' => $work[1],
                    'en' => $work[2],
                ],
                'reference_number' => $work[0],
                'published' => true,
            ]);
        }

        app(PageRepository::class)->create([
            'title' => [
                'hu' => 'Bio',
                'en' => 'Bio',
            ],
            'published' => true,
        ]);

        // \App\Models\User::factory(10)->create();
//            Lexicon::factory(10)->create();
            LexiconFactory::new()->count(10)->create();
            ArticleFactory::new()->count(10)->create();
            PublicationFactory::new()->count(10)->create();
//            WorkFactory::new()->count(15)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
