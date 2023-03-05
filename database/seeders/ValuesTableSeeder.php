<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('values')->delete();
        
        \DB::table('values')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'OUR CORE VALUES AND PRINCIPLE',
                'description' => 'Agappe, from its inception, had a different perspective in its view on the work culture and we had made changes throughout our corporate existence that helped us become a Human centric organization.',
                'icon' => '547267267.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}