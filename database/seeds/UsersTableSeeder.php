<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$8l7sB3NcAWrC4XZNhBFezus1F1YZgBM0xvQWPY9BMnczvDt0wxZty',
            'remember_token' => null,
            'created_at'     => '2019-06-06 11:25:54',
            'updated_at'     => '2019-06-06 11:25:54',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
