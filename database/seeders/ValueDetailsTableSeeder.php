<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ValueDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('value_details')->delete();
        
        \DB::table('value_details')->insert(array (
            0 => 
            array (
                'id' => 5,
                'values_title' => 'Trust',
            'values_description' => '<p><span style="color: rgb(65, 65, 65); font-family: Mulish, sans-serif; font-size: 16px;">Trust is an integral part of any relationship. Our actions and behaviours are all based on this simple trait. Agappe takes pride in the trust that its business partners and the employees showcase.</span><br></p>',
                'image' => '711163088.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}