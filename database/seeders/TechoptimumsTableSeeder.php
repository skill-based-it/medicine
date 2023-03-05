<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TechoptimumsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('techoptimums')->delete();
        
        \DB::table('techoptimums')->insert(array (
            0 => 
            array (
                'id' => 1,
                'details' => '....',
                'image' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}