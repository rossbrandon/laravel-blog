<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tag' => 'Shit Post',
                'created_at' => '2018-05-12 04:48:20',
                'updated_at' => '2018-05-12 04:48:20',
            ),
            1 => 
            array (
                'id' => 2,
                'tag' => 'Advice',
                'created_at' => '2018-05-12 04:48:24',
                'updated_at' => '2018-05-12 04:48:24',
            ),
            2 => 
            array (
                'id' => 3,
                'tag' => 'Learning',
                'created_at' => '2018-05-12 04:48:27',
                'updated_at' => '2018-05-12 04:48:27',
            ),
            3 => 
            array (
                'id' => 4,
                'tag' => 'PHP 7.2',
                'created_at' => '2018-05-12 04:48:31',
                'updated_at' => '2018-05-12 04:48:31',
            ),
            4 => 
            array (
                'id' => 5,
                'tag' => 'Magento 1',
                'created_at' => '2018-05-12 04:48:34',
                'updated_at' => '2018-05-12 04:48:34',
            ),
            5 => 
            array (
                'id' => 6,
                'tag' => 'Magento 2',
                'created_at' => '2018-05-12 04:48:40',
                'updated_at' => '2018-05-12 04:48:40',
            ),
            6 => 
            array (
                'id' => 7,
                'tag' => 'Laravel 5',
                'created_at' => '2018-05-12 04:48:54',
                'updated_at' => '2018-05-12 04:48:54',
            ),
            7 => 
            array (
                'id' => 8,
                'tag' => 'MySQL',
                'created_at' => '2018-05-12 04:49:09',
                'updated_at' => '2018-05-12 04:49:09',
            ),
        ));
        
        
    }
}