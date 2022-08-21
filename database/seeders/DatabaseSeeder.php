<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Contact;
use App\Repositories\ContactRepository;
use Database\Factories\AdminFactory;
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
                '' => 'Kapcsolat'
                // add other languages here
            ],
            'description' => [
                'en' => '',
                'hu' => ''
                // add other languages here
            ],
            'published' => false,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
