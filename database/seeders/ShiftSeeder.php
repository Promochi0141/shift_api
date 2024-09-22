<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Shift;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // factoryは使わない、数個のデータを作成する
        $shift1 = Shift::create([
            'student_id' => "1",
            'details_id' => 1,
            'start_time' => '017:00:00',
            'end_time' => '19:00:00',
        ]);
        $shift2 = Shift::create([
            'student_id' => "1",
            'details_id' => 2,
            'start_time' => '12:00:00',
            'end_time' => '17:00:00',
        ]);
        $shift3 = Shift::create([
            'student_id' => "1",
            'details_id' => 3,
            'start_time' => '01:00:00',
            'end_time' => '12:00:00',
        ]);
        $shift4 = Shift::create([
            'student_id' => "2",
            'details_id' => 4,
            'start_time' => '19:00:00',
            'end_time' => '23:00:00',
        ]);



    }
}
