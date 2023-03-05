<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blogs')->delete();
        
        \DB::table('blogs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Blog 1',
                'writer_name' => 'Tanim',
                'date' => '2023-03-02',
            'details' => '<p><span style="color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px;">\'Mispa\', which in Hebrew means “New Beginning” is synonymous with our products and it is this identity that has helped us to be visible among the competition. Our products are made to the highest quality to ensure a seamless customer experience. Well trained engineers and product specialists are deputed to handle hardware and reagents application support to offer the quickest solution for our customers</span><br></p>',
                'image' => 'backend/blogimage/1759245942742290.webp',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}