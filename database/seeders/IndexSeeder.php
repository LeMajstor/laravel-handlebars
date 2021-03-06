<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Index;

class IndexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
       
        // New index Model
        $index = new Index();
        
        // Register content
        $index->name = env('USERNAME_DISPLAY', "John Doe");
        $index->address =  env('ADDRESS_DISPLAY', "Keas 69 Str.");
        $index->city = env('CITY_DISPLAY', "Denver");
        $index->state = env('STATE_DISPLAY', "Colorado");
        $index->link = env('LINK_DISPLAY', "My Link");
        $index->href = env('HREF_DISPLAY', "https://www.google.com");
        $index->bio = "<i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis tortor justo, id egestas neque sagittis eu. Praesent luctus ac elit quis dapibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed non quam eu erat auctor pretium tristique vel tellus. Praesent facilisis, enim in aliquet fermentum, quam risus faucibus sem, id rhoncus ligula nisi congue arcu. Curabitur id consectetur eros. Aliquam eget metus lorem. Etiam volutpat, diam eget bibendum luctus, odio odio faucibus lorem, quis aliquet mauris nisl nec quam. Curabitur at enim lobortis, lobortis mauris vel, maximus leo. Etiam nec magna id nulla feugiat sodales. Praesent lacinia fermentum rutrum. Mauris vel tortor ac leo sollicitudin cursus quis commodo purus. Donec et suscipit erat. Phasellus luctus pulvinar dui quis maximus.</i>";

        // Save content
        $index->save();

    }
}
