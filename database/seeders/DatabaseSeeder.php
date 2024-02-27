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
        Governance::factory(5)->create();
        Branding::factory(5)->create();
        Category::factory(3)->create();

        // Category::create([
        //     'nama' => 'Layanan Publik',
        //     'slug' => 'layanan-publik'
        // ]);

        // Category::create([
        //     'nama' => 'Dinas Instansi',
        //     'slug' => 'dinas-instansi'
        // ]);

        // Branding::create([
        //     'portal' => 'Diskominfo Lotim',
        //     'slug' => 'diskominfo-lotim',
        //     'deskripsi' => 'Diskominfo adalah singkatan dari Dinas Komunikasi dan Informatika.',
        //     'link' => 'https://diskominfo.lomboktimurkab.go.id/',
        //     'status' => 'Active',
        //     'logo_sb' => 'diskominfo.jpg'
        // ]);
        
        Branding::create([
            'portal' => 'Pemkab Lotim',
            'slug' => 'pemkab-lotim',
            'deskripsi' => 'Pemerintahan kabupaten Lombok Timur adalah lembaga pemerintahan yang bertanggung jawab atas administrasi dan pengelolaan wilayah.',
            'link' => 'https://portal.lomboktimurkab.go.id/',
            'status' => 'Deactive',
            'logo_sb' => 'lotim.jpg'
        ]);

    }
}