<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use App\Models\Detail;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($student_id)
    {

        $shifts = Shift::join('details', 'shifts.details_id', '=', 'details.id')
            ->where('student_id', $student_id)
            ->get();
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
