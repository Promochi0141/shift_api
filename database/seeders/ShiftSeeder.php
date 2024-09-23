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
        $shift1 = Shift::create([
            'student_id' => '1',
            'details_id' => 1,
            'date' => '2024-01-01',
            'start_time' => '09:00:00',
            'end_time' => '12:00:00',
        ]);
        $shift2 = Shift::create([
            'student_id' => '1',
            'details_id' => 2,
            'date' => '2024-01-01',
            'start_time' => '12:00:00',
            'end_time' => '17:00:00',
        ]);
        $shift3 = Shift::create([
            'student_id' => '1',
            'details_id' => 3,
            'date' => '2024-01-01',
            'start_time' => '17:00:00',
            'end_time' => '24:00:00',
        ]);
        $shift4 = Shift::create([
            'student_id' => '1',
            'details_id' => 4,
            'date' => '2024-01-01',
            'start_time' => '01:00:00',
            'end_time' => '09:00:00',
        ]);
    }
}
