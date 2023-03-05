<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
            'top_title' => '<span style="color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px;">\'Mispa\', which in Hebrew means “New Beginning” is synonymous with our products and it is this identity that has helped us to be visible among the competition. Our products are made to the highest quality to ensure a seamless customer experience. Well trained engineers and product specialists are deputed to handle hardware and reagents application support to offer the quickest solution for our customers</span>',
            'sales_service' => '<span style="color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px;">\'Mispa\', which in Hebrew means “New Beginning” is synonymous with our products and it is this identity that has helped us to be visible among the competition. Our products are made to the highest quality to ensure a seamless customer experience. Well trained engineers and product specialists are deputed to handle hardware and reagents application support to offer the quickest solution for our customers</span>',
            'services1' => '<span style="color: rgb(33, 37, 41); font-family: Mulish, sans-serif;">\'Mispa\', which in Hebrew means “New Beginning” is synonymous with our products and it is this identity that has helped us to be visible among the competition. Our products are made to the highest quality to ensure a seamless customer experience. Well trained engineers and product specialists are deputed to handle hardware and reagents application support to offer the quickest solution for our customers</span>',
            'services2' => '<span style="color: rgb(33, 37, 41); font-family: Mulish, sans-serif;">\'Mispa\', which in Hebrew means “New Beginning” is synonymous with our products and it is this identity that has helped us to be visible among the competition. Our products are made to the highest quality to ensure a seamless customer experience. Well trained engineers and product specialists are deputed to handle hardware and reagents application support to offer the quickest solution for our customers</span>',
                'services_image' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}