<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Index;
use App\Models\Posts;

class PostSeeder extends Seeder
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

    public static function description()
    {
        $content = self::generate(
            $options = array(1, 'short')
        );

        return $content;
    }

    public static function content()
    {
        $content = self::generate(
            $options = array(
                7, 'headers', 'link', 'bq', 'decorate'
            )
        );

        return $content;
    }

    public function run()
    {   
        $index = new Index;
        $index = $index::get()->first();
       
        // Repeat for ten times
        for ($i=0; $i < 10; $i++) { 

            $post = new Posts;

            $post->title = self::title();
            $post->description = self::description();
            $post->content = self::content();

            $index->posts()->save($post);
        }
        
    }
}
