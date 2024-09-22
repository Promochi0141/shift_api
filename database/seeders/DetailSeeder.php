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
        $detail1 = Detail::create([
            'name' => 'test_name',
            'url' => 'test_url',
            'place' => 'test_place',
        ]);
        $detail2 = Detail::create([
            'name' => 'test_name2',
            'url' => 'test_url2',
            'place' => 'test_place2',
        ]);
        $detail3 = Detail::create([
            'name' => 'test_name3',
            'url' => 'test_url3',
            'place' => 'test_place3',
        ]);
        $detail4 = Detail::create([
            'name' => 'test_name4',
            'url' => 'test_url4',
            'place' => 'test_place4',
        ]);
    }
}
