<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
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
            $details = $request->all();
            // detailsテーブルのデータを、id=0を除き全削除
            Detail::where('id', '!=', 0)->delete();
            foreach ($details as $detail) {
                Detail::create([
                    'id' => $detail['id'],
                    'name' => $detail['name'],
                    'url' => $detail['url'],
                    'place' => $detail['place'],
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
    public function show(Detail $detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detail $detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detail $detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detail $detail)
    {
        //
    }
}
