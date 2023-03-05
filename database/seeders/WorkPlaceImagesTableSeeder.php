<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WorkPlaceImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('work_place_images')->delete();
        
        \DB::table('work_place_images')->insert(array (
            0 => 
            array (
                'id' => 7,
                'work_place_id' => 1,
                'images' => '1375816203.webp',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 8,
                'work_place_id' => 1,
                'images' => '122654969.webp',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 9,
                'work_place_id' => 1,
                'images' => '568020190.webp',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 10,
                'work_place_id' => 1,
                'images' => '1524799447.webp',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}