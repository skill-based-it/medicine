<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutUsesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('about_uses')->delete();
        
        \DB::table('about_uses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'about_us_title' => 'Highly Specialised Procedures with aRelationship-based Approach',
                'company_est' => '1995',
            'company_history' => 'Agappe was established in 1995 with a vision “To be the Best Partner in the Diagnostic Field for the Welfare of Mankind”. This has guided us since our inception and helped us to consolidate our position as the fastest-growing In-Vitro Diagnostic (IVD) company in the World. Being one of the pioneers in the diagnostics industry, we are having 1000+ distributors and holds a significant place in the global OEM business. Our world-class manufacturing facility will take us to the next step of evolution. Built on 200,000 square feet of land, our 80,000 sq.ft., GMP and FDA compliant certified plant is purpose-built for the global and domestic market needs. Agappe is focused on the research, design, and production of clinical chemistry reagents and instrument.',
                'country_support' => '65',
                'customers' => '40k',
                'workforce' => '750',
                'customer_support' => '24*7',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}