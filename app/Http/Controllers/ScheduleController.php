<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::all();

        return view('schedules.schedules', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = 'ScheduleController@store';
        $method = 'POST';
       
        return view('schedules.schedule-form')->with(['action' => $action, 'method' => $method]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schedule = new Schedule();
        $schedule->task_id = $request->task_id;
        $schedule->place_id = $request->place_id;
        $schedule->start_at = $request->start_at;
        $schedule->end_at = $request->end_at;
        $schedule->constant_id_lateness = $request->constant_id_lateness;
        $schedule->constant_id_absence = $request->constant_id_absence;
        $schedule->teacher_id = $request->teacher_id;
        $schedule->planner_id = Auth::id();
        $schedule->save();

        return view('schedules.schedule-create-confirmation')->with('schedule', $schedule);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        return view('schedules.schedule')->with('schedule', $schedule);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        $action = ['ScheduleController@update', $schedule];
        $method = 'PUT';
       
        return view('schedules.schedule-form')->with(['action' => $action, 'method' => $method, 'schedule' => $schedule]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        $schedule->task_id = $request->task_id;
        $schedule->place_id = $request->place_id;
        $schedule->start_at = $request->start_at;
        $schedule->end_at = $request->end_at;
        $schedule->constant_id_lateness = $request->constant_id_lateness;
        $schedule->constant_id_absence = $request->constant_id_absence;
        $schedule->teacher_id = $request->teacher_id;
        $schedule->planner_id = Auth::id();
        $schedule->save();

        return view('schedules.schedule-update-confirmation')->with('schedule', $schedule);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();

        return view('schedules.schedule-delete-confirmation')->with('schedule', $schedule);
    }
}
