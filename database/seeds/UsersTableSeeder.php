<?php

use App\User;
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
        $users = [
            [
                'name'     => 'Admin',
                'password' => bcrypt('password'),
            ],
            [
                'name'     => 'Demo',
                'password' => bcrypt('password'),
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
