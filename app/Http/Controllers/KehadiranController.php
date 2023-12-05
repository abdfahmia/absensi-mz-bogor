<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Jamaah;
use App\Models\Kehadiran;
use Illuminate\Http\Request;

class KehadiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kehadiran = Kehadiran::with(['jamaahs', 'activities'])->get();
        $activities = Activity::with('jamaahs')->get();

        // $jamaahCounts = [];

        // Loop through activities and calculate the Jamaah count for each one
        foreach ($activities as $activity) {
            $jamaahCount = $activity->jamaahs->count();
            $jamaahCounts[$activity->id] = $jamaahCount;
        }

        return view('kehadiran.index', compact('kehadiran', 'activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kehadiran = Kehadiran::with('jamaahs')->find($id);
        $activities = Activity::all();
        $jamaahs = Jamaah::all();

        return view('kehadiran.edit', compact('kehadiran', 'activities', 'jamaahs'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'activity_id' => 'required',
            'jamaah_id' => 'required|array',
        ]);

        $kehadiran = Kehadiran::findOrFail($id);
        $kehadiran->update([
            'activity_id' => $request->input('activity_id'),
        ]);

        $kehadiran->jamaahs()->sync($request->input('jamaah_id'));

        return redirect()->route('kehadiran.index')->with('success', 'Data kehadiran updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
