<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Branding;
use App\Models\Category;
use App\Models\Governance;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Category::factory(2)->create();
        Governance::factory(30)->create();
        Branding::factory(5)->create();

    }
}