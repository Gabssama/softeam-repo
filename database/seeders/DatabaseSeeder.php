<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Materiel;
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
        Materiel::factory(1000)->create();
        $ids = range(1, 1000);

        Client::factory(200)->create()->each(function ($client) use($ids) {
            shuffle($ids);
            $client->materiels()->attach(array_slice($ids, 0, rand(0,80)));
        });
    }
}
