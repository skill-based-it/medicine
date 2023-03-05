<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutUsImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('about_us_images')->delete();
        
        \DB::table('about_us_images')->insert(array (
            0 => 
            array (
                'id' => 11,
                'about_us_id' => '1',
                'images' => '10892660.webp',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 12,
                'about_us_id' => '1',
                'images' => '1565180790.webp',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 13,
                'about_us_id' => '1',
                'images' => '1546133972.webp',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 14,
                'about_us_id' => '1',
                'images' => '223421582.webp',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}