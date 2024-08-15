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

        
        Artist::factory()->create(
            [
                'artistImage' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'artist' => 'Zachariou, Dion',
            ]
        );
        Artist::factory()->create(
            [
                'artistImage' => 'https://images.unsplash.com/photo-1489424731084-a5d8b219a5bb?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'artist' => 'McGugan, Laurie',
            ]
        );
        Artist::factory()->create(
            [
                'artistImage' => 'https://plus.unsplash.com/premium_photo-1661573482405-b091e1d9a128?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'artist' => 'HArding, Noel',
            ]
        );
        Artist::factory()->create(
            [
                'artistImage' => 'https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'artist' => 'Doyle, Maura',
            ]
        );
        Artist::factory()->create(
            [
                'artistImage' => 'https://images.unsplash.com/photo-1632765854612-9b02b6ec2b15?q=80&w=1886&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'artist' => 'Dora de Pedery-Hunt',
            ]
        );

        Artwork::factory()->create(
            [
                'title' => 'Alexander The Great',
                'imageURL' => 'https://www.toronto.ca/ext/pln/publicart/alexanderthegreat.jpg',
                'yearInstalled' => '1990',
                'description' => 'A bronze bust of Alexander the Great considered one of the best-known military commanders of all time, is displayed amid four Doric columns, overlooking a square with benches and a fountain. Residents gather to chat and take in the bustling street life in this parkette.
The statue was created by renowned artist Dion Zachariou and donated to the city by the Pan-Macedonian Association of Ontario and Toronto’s Greek community in 1990.',
                'artist_id' => '1',
            ]
        );
        Artwork::factory()->create(
            [
                'title' => 'Circle of Trees',
                'imageURL' => 'https://www.toronto.ca/ext/pln/publicart/circleoftrees2.jpg',
                'yearInstalled' => '1990',
                'description' => 'A public art piece was installed in Woodbine Park, Toronto.  It consists of seven mature maple trees planted in a circle.  One of the trees has been cast into bronze.  It is frozen in time while the others, chosen for their longevity, live their lives. The circle diameter is 60’, and all trees are 35’.  A bronze plaque illustrating what the artwork looked like at its installation is mounted on a boulder in front of the circle, as a reference point in the future.  The piece will be documented every few years.
The Circle of Trees was conceived as a timepiece and was installed in Toronto in 2000, as a Millennium project with assistance from the Canada Council of the Arts, the Province of Ontario Millennium Fund, and the City of Toronto.',
                'artist_id' => '2',
            ]
        );
        Artwork::factory()->create(
            [
                'title' => 'Elevated Wetlands',
                'imageURL' => 'https://www.toronto.ca/ext/pln/publicart/elevated.jpg',
                'yearInstalled' => '1990',
                'description' => 'Elevated Wetlands is a solar-powered, functional sculpture by Toronto artist Noel Harding, which  uses wetland plants and plastic waste to absorb volatile chemicals and filter metal contaminants from the Don River.',
                'artist_id' => '3',
            ]
        );
        Artwork::factory()->create(
            [
                'title' => 'Erratic Boulder',
                'imageURL' => 'https://www.toronto.ca/ext/pln/publicart/erraticboulder.jpg',
                'yearInstalled' => '1990',
                'description' => "It spent about 12,000 years up near the Kawartha Lakes region, near Bobcaygeon. It traveled from there to the Toronto Sculpture Garden by flat bed truck, where it stayed for 6 months. And then from there it traveled by dump truck to Christie Pits Park. And we don't know how long it'll stay here, but hopefully for a while. It weighs 10 tons and it's a billion years old. Erratic boulders are formed by glacier, slow moving ice that picks up big chunks of rock and the rock gets moved around and rounded and scraped. So there's a lot of marks you can see on the rock.",
                'artist_id' => '4',
            ]
        );
        Artwork::factory()->create(
            [
                'title' => 'George Fauldy Place',
                'imageURL' => 'https://www.toronto.ca/ext/pln/publicart/georgefaludy.jpg',
                'yearInstalled' => '1990',
                'description' => "George Faludy Place is located across the street from 25 St. Mary's St. where Mr. Faludy, one of Hungary's greatest poets, lived for much of his 22 years of self-imposed exile from Hungary.  George Faludy Place is an initiative of the Toronto Legacy Project, which  honors notable artists, scientists and thinkers who have enriched the life of Toronto, by embedding their names in the fabric of the city.",
                'artist_id' => '5',
            ]
        );


    }
}
