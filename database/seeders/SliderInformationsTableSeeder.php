<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SliderInformationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('slider_informations')->delete();
        
        \DB::table('slider_informations')->insert(array (
            0 => 
            array (
                'id' => 2,
                'index_no' => 1,
                'title' => 'Your Best Partner In Diagonistic',
                'button_link' => '###',
                'button_name' => 'Explore Products',
                'image' => '495864664.jpeg',
                'vedio_link' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/W_K53S9CVJ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'index_no' => 2,
                'title' => 'Performance Ahead Of Expectation',
                'button_link' => '#',
                'button_name' => 'Explore Products',
                'image' => '1388955912.webp',
                'vedio_link' => '#',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'index_no' => 3,
                'title' => 'Your Best Partner In Diagonistic',
                'button_link' => '#',
                'button_name' => 'Explore Products',
                'image' => '395203908.webp',
                'vedio_link' => '#',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}