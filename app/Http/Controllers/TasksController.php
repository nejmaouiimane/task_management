<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view("calendar.todolist", compact("tasks"));
    }
    public function calendar()
    {
        $tasks = Task::all();
        return view("calendar.calendar", compact("tasks"));
    }
    public function profile()
    {
        $tasks = Task::all();
        return view("calendar.profile", compact("tasks"));
    }

 

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            "task" => "required",
            "description"  => "required",
            "task_timing"  => "required",
        ]);
        Task::create([
            "task" => $request->task,
            "description"  => $request->description,
            "task_timing"  => $request->task_timing,
        ]);
        return back();
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view("calendar.todolist", compact("task"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request  $request, Task $task)
    {
        request()->validate([
            "task" => "required",
            "description"  => "required",
            "task_timing"  => "required",
        ]);
        $request->update([
            "task" => $request->task,
            "description"  => $request->description,
            "task_timing"  => $request->task_timing,
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return back();
    }
}
