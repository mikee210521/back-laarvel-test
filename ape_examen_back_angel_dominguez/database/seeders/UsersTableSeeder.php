<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDomicilio;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(100)->create()->each(function ($user) {
            UserDomicilio::factory()->create(['user_id' => $user->id]);
        });
    }
}
