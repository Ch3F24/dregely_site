<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Contact;
use App\Models\Lexicon;
use App\Repositories\ContactRepository;
use Database\Factories\AdminFactory;
use Database\Factories\LexiconFactory;
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

        app(ContactRepository::class)->create([
            'title' => [
                'en' => 'Contact',
                'hu' => 'Kapcsolat'
            ],
            'contact_information' => [
                'en' => '',
                'hu' => ''
            ],
            'published' => false,
        ]);

        // \App\Models\User::factory(10)->create();
//            Lexicon::factory(10)->create();
            LexiconFactory::new()->count(10)->create();
            WorkFactory::new()->count(15)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
