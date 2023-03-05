<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChairmanMessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chairman_messages')->delete();
        
        \DB::table('chairman_messages')->insert(array (
            0 => 
            array (
                'id' => 1,
            'message' => '<div class="mt-4" style="box-sizing: border-box; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: 900; color: darkblue; font-size: 25px;">“Thanks Be Unto God For His Unspeakable Gift“</span></div><div class="mt-4" style="box-sizing: border-box; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px;"><p style="box-sizing: border-box; margin-bottom: 20px; line-height: 30px; color: rgb(65, 65, 65);">As an adventure steps in to the arena of diagnostic industry our VISION is to establish globally as a premier in-vitro diagnostic corporation and to be the best partner in the diagnostic field for the welfare of mankind. Our Mission is to expand and continuously improve our products and services with a world class R&amp;D programme and to provide the best work environment for our employees to meet and exceed their true potential and to thrive in a world of excellence.</p></div><div class="mt-4" style="box-sizing: border-box; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px;"><em style="box-sizing: border-box; color: rgb(240, 80, 110);">“Thanks Be Unto God For His Unspeakable Gift“</em><br style="box-sizing: border-box;"><span style="box-sizing: border-box; font-weight: bolder;">Joseph John</span></div>',
                'chairman_image' => '1175231903.webp',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}