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
        $shift = Shift::create([
            'student_id' => '1',
            'details_id' => 1,
            'start_time' => '09:00:00',
            'end_time' => '17:00:00',
        ]);
    }
}
