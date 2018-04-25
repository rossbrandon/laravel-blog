<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
           'name' => 'Ross',
           'email' => 'rosstafarian1@gmail.com',
           'admin' => 1,
           'password' => bcrypt('testBot')
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/avatar-guy.png',
            'about' => 'Lorem text',
            'facebook' => 'https://facebook.com',
            'youtube' => 'https://youtube.com'
        ]);
    }
}
