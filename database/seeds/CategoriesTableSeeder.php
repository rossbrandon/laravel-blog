<?php

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
                'id' => 1,
                'name' => 'PHP',
                'created_at' => '2018-05-12 04:47:54',
                'updated_at' => '2018-05-12 04:47:54',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Laravel',
                'created_at' => '2018-05-12 04:48:04',
                'updated_at' => '2018-05-12 04:48:04',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Magento',
                'created_at' => '2018-05-12 04:48:07',
                'updated_at' => '2018-05-12 04:48:07',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Career',
                'created_at' => '2018-05-12 04:48:14',
                'updated_at' => '2018-05-12 04:48:14',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Random',
                'created_at' => '2018-05-12 04:51:04',
                'updated_at' => '2018-05-12 04:51:04',
            ),
        ));
        
        
    }
}