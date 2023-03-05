<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OpeningLocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('opening_locations')->delete();
        
        \DB::table('opening_locations')->insert(array (
            0 => 
            array (
                'id' => 2,
                'location_name' => 'Colombia',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}