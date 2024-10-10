<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $shifts = $request->all();
            $date = $shifts[0]['date'];
            Shift::where('date', $date)->delete();
            foreach ($shifts as $shift) {
                Shift::create([
                    'student_id' => $shift['student_id'],
                    'details_id' => $shift['details_id'],
                    'date' => $shift['date'],
                    'start_time' => $shift['start_time'],
                    'end_time' => $shift['end_time'],
                ]);
            }
            DB::commit();
            return response()->json(['message' => 'データが保存されました'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        } finally {
            $request->user()->currentAccessToken()->delete();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($student_id)
    {
        $shifts = Shift::leftJoin('details', 'shifts.details_id', '=', 'details.id')
            ->where('student_id', $student_id)
            ->get();

        // $shiftsのうち、$shifts->nameがnullならば、$shifts->nameに'登録されていないシフト'を代入

        foreach ($shifts as $shift) {
            if ($shift->name === null) {
                $shift->name = 'シフト情報が未登録';
                $shift->url = '/';
                $shift->place = '未登録';
            }
        }

        if ($shifts->isEmpty()) {
            return response()->json(['message' => 'No_shifts_found'], 404);
        } else {
            return response()->json($shifts, 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shift $shift)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shift $shift)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shift $shift)
    {
        //
    }
}
