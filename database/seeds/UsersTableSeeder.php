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
                'name'           => 'TesteIrroba',
                'email'          => 'teste@teste.com.br',
                'password'       => '$2y$10$Oc9fmkLR/mHYCJKZvtT2N.6WryDG17X/XjBepsZFbLKwsGKX/.QCO',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
