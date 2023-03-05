<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerMessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer_messages')->delete();
        
        
        
    }
}