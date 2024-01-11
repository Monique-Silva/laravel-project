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
            ->count(100)
            ->hasComments(1)
            ->hasUsers(1)
            ->create();
    }
}
