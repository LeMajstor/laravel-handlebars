<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Index;
use App\Models\Citation;

class CitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */



    const GENERATE_URL = "https://loripsum.net/api/";

    public static function generate(array $options)
    {   
        // Get url for calling API
        $implode = implode("/", $options);
        $url = self::GENERATE_URL . $implode;
        
        // Get content
        $content = file_get_contents($url);
        
        return $content;
    }

    public static function title()
    {
        $content = self::generate(
            $options = array(1, 'short', 'plaintext')
        );

        return $content;
    }

    public function run()
    {
        // New index Model
        $citation = new Citation();
        
        $index = new Index;
        $index = $index->get()->first();

        for ($i=0; $i<10; $i++) { 
            $citation = new Citation;
            $citation->citation = self::title();
            
            // Save content
            $index->citations()->save($citation);
        }
        
    }
}
