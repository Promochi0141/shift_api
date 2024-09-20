<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Detail;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detail = Detail::create([
            'name' => 'test_name',
            'url' => 'test_url',
            'place' => 'test_place',
        ]);
    }
}
