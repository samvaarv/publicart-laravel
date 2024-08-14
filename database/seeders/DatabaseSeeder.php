<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Artist;
use App\Models\Location;
use App\Models\Artwork;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Artwork::factory()->create(
        //     [
        //         'title' => 'Alexander',
        //         'imageURL' => 'https://www.toronto.ca/ext/pln/publicart/alexanderthegreat.jpg',
        //         'yearInstalled' => '1990',
        //         'description' => 'Lorem ipsum dor set emit.',
        //         'artist_id' => '1',
        //     ]
        // );
        Artist::factory(5)->create();
        Location::factory(5)->create();
        Artwork::factory(5)->create();
    }
}
