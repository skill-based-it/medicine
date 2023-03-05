<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BeliefSystemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('belief_systems')->delete();
        
        \DB::table('belief_systems')->insert(array (
            0 => 
            array (
                'id' => 1,
                'belief_title' => 'Our Belief System',
            'description' => '<span style="color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 15px; text-align: -webkit-center; background-color: rgb(247, 250, 251);">We believe in providing high quality diagnostic solutions to our believers, through</span><br style="box-sizing: border-box; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 15px; text-align: -webkit-center; background-color: rgb(247, 250, 251);"><span style="color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 15px; text-align: -webkit-center; background-color: rgb(247, 250, 251);">highest level of customer connect by ensuring innovative and affordable products for</span><br style="box-sizing: border-box; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 15px; text-align: -webkit-center; background-color: rgb(247, 250, 251);"><span style="color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 15px; text-align: -webkit-center; background-color: rgb(247, 250, 251);">an everlasting relationship</span>',
                'mission' => 'To expand and continuously improve our products and services with a world class R&D program and to provide the best work environment for our employees to meet and exceed their true potential and to thrive in a world of excellence.',
                'vision' => 'To establish globally as a premier In-Vitro diagnostic corporation and to be the best partner in the diagnostic field for the welfare of mankind.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}