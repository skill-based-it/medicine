<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'top_title' => 'Test',
            'support_info' => '<div class="mt-4" style="box-sizing: border-box; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px;">Talk to us<br style="box-sizing: border-box;"><a href="http://localhost/medicine/public/support" style="box-sizing: border-box; color: darkblue; cursor: pointer; font-weight: bold; line-height: 30px;">Tel:+41 41 780 60 10</a></div><div class="mt-4" style="box-sizing: border-box; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px;">Write to us<br style="box-sizing: border-box;"><a href="http://localhost/medicine/public/support" style="box-sizing: border-box; color: darkblue; cursor: pointer; font-weight: bold; line-height: 30px;">Official : info@agappeswiss.com</a><br style="box-sizing: border-box;"><a href="http://localhost/medicine/public/support" style="box-sizing: border-box; color: darkblue; cursor: pointer; font-weight: bold; line-height: 30px;">Marketing : marketing@agappeswiss.com</a><br style="box-sizing: border-box;"><a href="http://localhost/medicine/public/support" style="box-sizing: border-box; color: darkblue; cursor: pointer; font-weight: bold; line-height: 30px;">Service : service@agappeswiss.com</a></div>',
            'access_point' => '<label style="box-sizing: border-box; margin-bottom: 0px; font-weight: 900; color: darkblue; font-size: 18px; font-family: Mulish, sans-serif;">Switzerland (Global Office)</label><span style="color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px;"></span><div class="mt-4 span" style="box-sizing: border-box; font-size: 16px; line-height: 30px; color: rgb(33, 37, 41); font-family: Mulish, sans-serif;">AGAPPE DIAGNOSTICS SWITZERLAND GmbH<br style="box-sizing: border-box;">Knonauerstrasse 54 - 6330 Cham Switzerland<hr style="box-sizing: border-box; margin-top: 20px; margin-bottom: 20px; color: inherit; border-top-color: rgb(229, 229, 229); opacity: 0.25; text-align: inherit;">Tel: +41 41 780 60 10<br style="box-sizing: border-box;">Fax: +41 41 780 60 11<br style="box-sizing: border-box;">Email: info@agappeswiss.com</div>',
                'image' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}