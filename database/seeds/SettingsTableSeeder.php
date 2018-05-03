<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
            'site_name' => 'Laravel Blog',
            'contact_number' => '512-555-5555',
            'contact_email' => 'support@larablog.com',
            'address' => 'Austin, TX',
            'address2' => '1100 Congress Ave'
        ]);
    }
}
