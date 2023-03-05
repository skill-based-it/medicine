<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'website_name' => 'Optimum',
                'address' => 'Dhaka, Bangladesh',
                'email' => 'info@optimum.com',
                'phone' => '01872583429',
                'logo' => 'backend/logo/1759255846119738.png',
                'favicon' => 'backend/logo/1759255846387261.png',
                'fb' => NULL,
                'tw' => NULL,
                'in' => NULL,
                'li' => NULL,
                'te' => NULL,
                'yo' => NULL,
                'meta_title' => NULL,
                'meta_tag' => NULL,
                'meta_description' => NULL,
                'comment_plugin' => NULL,
                'copyright_text' => NULL,
                'developer_text' => NULL,
                'maintenance_text' => NULL,
                'maintenance_status' => '0',
                'about_us' => '<p>....</p>',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}