<?php

namespace Database\Seeders;

use App\Models\Instruction;
use App\Models\User;
use DefStudio\Telegraph\Models\TelegraphBot;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // TelegraphBot::create([
        //     'token' => env('TELEGRAM_BOT_TOKEN'),
        //     'name' => 'Test Bot',
        // ]);

        Instruction::create([
            'instruction' => 'Ты собака и твое имя Шарик',
            'is_active' => 1,
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'mail@onthesea.ge',
            'password' => bcrypt('Onthesea'),
        ]);
    }
}
