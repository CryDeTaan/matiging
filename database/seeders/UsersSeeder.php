<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory([
            'id'        => 1000,
            'name'      => 'admin',
            'email'     => 'admin@local',
            'role'      => 'admin',
        ])->hasMessages(5)->create();

        User::factory([
            'name'      => 'Christiaan',
            'email'     => 'cdw@local',
        ])->hasMessages(5)->create();

        User::factory([
            'name'      => 'Finch',
            'email'     => 'finch@local',
            'role'      => 'finance',
        ])->hasMessages(5)->create();

        User::factory(10)->hasMessages(5)->create();
    }
}
