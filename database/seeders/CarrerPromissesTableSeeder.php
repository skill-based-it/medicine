<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarrerPromissesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carrer_promisses')->delete();
        
        \DB::table('carrer_promisses')->insert(array (
            0 => 
            array (
                'id' => 2,
                'title' => 'Extraordinary Opportunities For Growth',
                'description' => '<p><span style="font-family: Mulish, sans-serif; font-size: 16px;">We offer positions that allow you to challenge the tried and true, and to collaborate across technologies and continents.</span><br></p>',
                'icon' => '1790088761.svg',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Extraordinary Opportunities For Growth',
                'description' => '<p><span style="font-family: Mulish, sans-serif; font-size: 16px;">We offer positions that allow you to challenge the tried and true, and to collaborate across technologies and continents.</span><br></p>',
                'icon' => '1407748466.svg',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Extraordinary Opportunities For Growth',
                'description' => '<p><span style="font-family: Mulish, sans-serif; font-size: 16px;">We offer positions that allow you to challenge the tried and true, and to collaborate across technologies and continents.</span><br></p>',
                'icon' => '497566937.svg',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'Extraordinary Opportunities For Growth',
                'description' => '<p><span style="font-family: Mulish, sans-serif; font-size: 16px;">We offer positions that allow you to challenge the tried and true, and to collaborate across technologies and continents.</span><br></p>',
                'icon' => '1562882469.svg',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}