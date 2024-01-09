<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()
            ->count(100)
            ->hasMessages(1)
            ->create();
    }
    /**
     * Run the id	char(36)
name	text
email	varchar(255)
email_verified_at	timestamp NULL
password	varchar(255)
remember_token	varchar(100) NULL
created_at	timestamp NULL
updated_atdatabase seeds.
     */
    public function run(): void
    {
        //
    }
}
