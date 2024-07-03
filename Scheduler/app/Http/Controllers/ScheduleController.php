<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::orderBy('status')->orderBy('priority', 'desc')->orderBy('due_date')->paginate(7);
        return view('home', compact('schedules'));
    }

    public function create(Request $request)
    {
        $schedule = new Schedule();
        $schedule->task = $request->task;
        $schedule->owner = $request->owner;
        $schedule->status = $request->status;
        $schedule->due_date = $request->due_date;
        $schedule->priority = $request->priority;
        $schedule->notes = $request->notes;
        $schedule->budget = $request->budget;
        $schedule->created_at = now();
        $schedule->updated_at = now();
        $schedule->save();
        return redirect()->route('schedules.index');
    }

    public function update($request, $id)
    {
        // $schedule = Schedule::find($id);
        // $schedule->task = $request->task;
        // $schedule->owner = $request->owner;
        // $schedule->due_date = $request->due_date;
        // $schedule->priority = $request->priority;
        // $schedule->notes = $request->notes;
        // $schedule->budget = $request->budget;
        // $schedule->updated_at = now();
        // $schedule->save();
        // return redirect()->route('schedules.index');
    }

    public function delete($id)
    {
        $schedule = Schedule::find($id);
        $schedule->delete();
        return redirect()->route('schedules.index');
    }
}
