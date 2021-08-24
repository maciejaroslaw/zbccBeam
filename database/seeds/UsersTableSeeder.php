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
                'email' => 'admin@zbcc.pl',
                'password' => bcrypt('hasloadmin'),
                'name' => 'admin',
                'surname' => 'admin',
                'birthdate' => '2000-12-12'
            ],
            [
                'email'     => 'maciej@zbcc.pl',
                'password' => bcrypt('haslomaciej'),
                'name' => 'Maciej',
                'surname' => 'Jarosław',
                'birthdate' => '1999-12-21',
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
