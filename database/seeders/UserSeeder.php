<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)
            ->has(Message::factory(10)->has(Comment::factory(3)))
            ->create();
    }
}
