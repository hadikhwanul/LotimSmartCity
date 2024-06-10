<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\User;
use App\Models\Branding;
use App\Models\Category;
use App\Models\Economy;
use App\Models\Environment;
use App\Models\Governance;
use App\Models\Living;
use App\Models\Society;
use App\Models\Tag;
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
        Branding::factory(8)->create();
        Economy::factory(10)->create();
        Society::factory(15)->create();
        Living::factory(20)->create();
        Environment::factory(25)->create();
        Berita::factory(20)->create();

        User::create([
            'name' => 'Hadi Ikhwanul',
            'username' => 'hadi',
            'jobdesk' => 'SuperAdmin',
            'email' => 'hadikhwanul@gmail.com',
            'profile' => 'HadiProfile.jpg',
            'password' => bcrypt('hadi')
        ]);

        Tag::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Tag::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Tag::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
    }
}