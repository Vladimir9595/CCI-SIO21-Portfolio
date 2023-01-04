<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Project;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        User::factory()->create([
            'name' => 'Vladimir',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        Project::factory(10)->create();
        Article::factory(10)->create();
    }
}
