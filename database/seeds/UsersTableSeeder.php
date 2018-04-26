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
            'avatar' => 'uploads/avatars/avatar-stick.png',
            'about' => 'Lorem text',
            'facebook' => 'https://www.facebook.com/ross.brandon',
            'youtube' => 'https://www.youtube.com/watch?v=WsptdUFthWI&list=RDMMWsptdUFthWI'
        ]);

        $testerUser = App\User::create([
            'name' => 'Susie Tester',
            'email' => 'susieque@example.com',
            'admin' => 0,
            'password' => bcrypt('testBot')
        ]);

        App\Profile::create([
            'user_id' => $testerUser->id,
            'avatar' => 'uploads/avatars/avatar-girl.jpg',
            'about' => 'Lorem text',
            'facebook' => 'https://facebook.com',
            'youtube' => 'https://youtube.com'
        ]);
    }
}
