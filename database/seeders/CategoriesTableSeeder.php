<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => 'Clinical Chemistry',
                'slug' => 'clinical-chemistry',
                'status' => 1,
                'date' => '02-03-2023 05:27',
                'admin_id' => '1',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_tag' => NULL,
                'order_by' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'Hematology',
                'slug' => 'hematology',
                'status' => 1,
                'date' => '02-03-2023 05:29',
                'admin_id' => '1',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_tag' => NULL,
                'order_by' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'Nephelometry',
                'slug' => 'nephelometry',
                'status' => 1,
                'date' => '02-03-2023 05:29',
                'admin_id' => '1',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_tag' => NULL,
                'order_by' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'Immunology',
                'slug' => 'immunology',
                'status' => 1,
                'date' => '02-03-2023 05:30',
                'admin_id' => '1',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_tag' => NULL,
                'order_by' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 8,
                'name' => 'Coagulation',
                'slug' => 'coagulation',
                'status' => 1,
                'date' => '02-03-2023 05:30',
                'admin_id' => '1',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_tag' => NULL,
                'order_by' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'Electrolyte',
                'slug' => 'electrolyte',
                'status' => 1,
                'date' => '02-03-2023 05:31',
                'admin_id' => '1',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_tag' => NULL,
                'order_by' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'Pre- Analytical',
                'slug' => 'pre--analytical',
                'status' => 1,
                'date' => '02-03-2023 05:32',
                'admin_id' => '1',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_tag' => NULL,
                'order_by' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 11,
                'name' => 'Urine Analysis',
                'slug' => 'urine-analysis',
                'status' => 1,
                'date' => '02-03-2023 05:32',
                'admin_id' => '1',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_tag' => NULL,
                'order_by' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 12,
                'name' => 'Rapids',
                'slug' => 'rapids',
                'status' => 1,
                'date' => '02-03-2023 05:33',
                'admin_id' => '1',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_tag' => NULL,
                'order_by' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 13,
                'name' => 'Serology',
                'slug' => 'serology',
                'status' => 1,
                'date' => '02-03-2023 05:33',
                'admin_id' => '1',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_tag' => NULL,
                'order_by' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 14,
                'name' => 'Molecular Diagnostics',
                'slug' => 'molecular-diagnostics',
                'status' => 1,
                'date' => '02-03-2023 05:34',
                'admin_id' => '1',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_tag' => NULL,
                'order_by' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 15,
                'name' => 'Controls & Calibrators',
                'slug' => 'controls-&-calibrators',
                'status' => 1,
                'date' => '02-03-2023 05:34',
                'admin_id' => '1',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_tag' => NULL,
                'order_by' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}