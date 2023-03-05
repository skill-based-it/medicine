<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OpeningJobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('opening_jobs')->delete();
        
        \DB::table('opening_jobs')->insert(array (
            0 => 
            array (
                'id' => 2,
                'jobs_name' => 'Manager',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}