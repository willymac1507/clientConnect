<?php

namespace Database\Seeders;

use App\Models\Calendar;
use App\Models\Organisation;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Will McCloy',
            'email' => 'will@email.com',
            'password' => 'password',
            'organisation_id' => 99
        ]);

        Organisation::factory(10)->has(User::factory(5)->has(Calendar::factory()))->create();

        Organisation::factory()->create([
            'id' => 99,
            'name' => 'camelCase Ltd',
            'address1' => '4 Sunny Hill',
            'address2' => null,
            'town' => 'Norwich',
            'postcode' => 'NR1 2ES',
            'country' => 'United Kingdom',
            'email' => 'info@camelcase.uk',
            'telephone' => '07808 550651',
            'contact' => 'Will McCloy',
        ]);

        User::factory(30)->has(Calendar::factory())->create([
            'organisation_id' => null
        ]);
    }
}
