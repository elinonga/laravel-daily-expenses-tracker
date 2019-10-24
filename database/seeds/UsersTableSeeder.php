<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$6msok6Mav90dx7I.v/R8L.L7MLjQ09U5wHdrFHcEErjdC1lsNjwH2',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
