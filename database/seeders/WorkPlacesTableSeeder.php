<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WorkPlacesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('work_places')->delete();
        
        \DB::table('work_places')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Career@Optimum Right Place to Work.',
            'description' => '<p><span style="color: rgb(0, 0, 130); font-family: Mulish, sans-serif; font-size: 15px; text-align: justify;">Being an Agappean, is an enriching and exciting experience. Here, we consider people to be our greatest asset. We understand that business growth is a result of talent growth and hence we are committed towards building a team which is constantly learning and evolving. We seek professionals who aim beyond the limits, who are thriving to fly high, and who never settle for the usual.</span><br></p>',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}