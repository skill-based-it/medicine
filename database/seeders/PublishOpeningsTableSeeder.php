<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PublishOpeningsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('publish_openings')->delete();
        
        \DB::table('publish_openings')->insert(array (
            0 => 
            array (
                'id' => 2,
                'location_id' => 2,
                'jobs_id' => 2,
                'opening_title' => 'Manager - International Sales',
            'opening_description' => '<p><a href="https://sbit.com.bd/medicine/careers#" style="box-sizing: border-box; color: rgb(15, 110, 205); text-decoration-line: underline; cursor: pointer; font-family: Mulish, sans-serif; font-size: 16px;"></a></p><div class="opening-sigle-description mt-3" style="box-sizing: border-box; padding: 0px; margin-top: 1rem !important; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;"><span style="box-sizing: border-box; padding: 0px; margin: 0px;">Presently at Head Office. In the later stage, he should be ready to relocate to any of the Spanish-speaking countries.</span></div>',
                'opening_amount' => '1',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}