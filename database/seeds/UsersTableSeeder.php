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
            ],
            [
                'email'     => 'maciej@zbcc.pl',
                'password' => bcrypt('haslomaciej'),
                'name' => 'Maciej',
                'surname' => 'Jarosław',
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
