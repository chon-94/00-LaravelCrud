<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function index():View
    {
        $tasks = Task::latest()->paginate(3);
        return view('tasks.index',['tasks'=> $tasks]);
    }

    public function create():View
    {
        return view('tasks.create');
    }

    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);
        // dd($request ->all());
        Task::create($request->all());
        return redirect()->route('tasks.index')->with('success','Nueva Creacion craeada');
    }

    public function show(Task $task)
    {
        //
    }

    public function edit(Task $task)
    {
        //
    }

    public function update(Request $request, Task $task)
    {
        //
    }

    public function destroy(Task $task)
    {
        //
    }
}
