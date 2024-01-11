<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Seeder;


class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Message::factory()
            ->count(10)
            ->hasComments(3)
            ->hasUsers(1)
            ->create();
    }
}
