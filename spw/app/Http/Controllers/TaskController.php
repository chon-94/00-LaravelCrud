<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
            'archivo' => 'nullable|max:2048',

        ]);
        
        $taskData = $request->except('archivo');
        // dd($request ->all());

        if ($request->hasFile('archivo')) {
            $archivo = $request->file('archivo');
            $ruta = $archivo->store('archivos', 'public');
            $taskData['archivo'] = $ruta;
            $taskData['archivo_nombre'] = $archivo->getClientOriginalName(); // Guardar el nombre del archivo seleccionado
        }

        Task::create($taskData);
        return redirect()->route('tasks.index')->with('success','Nueva Creacion craeada');
    }

    public function show(Task $task)
    {
        //
    }

    public function edit(Task $task):View
    {
        // dd($task);
        return view('tasks.edit',['task' => $task]);
    }

    public function update(Request $request, Task $task):RedirectResponse
    {
        // dd($request->all());
        $task->update($request->all()); 
        return redirect()->route('tasks.index')->with('success','Nueva Actualizacion Actualizada');

    }

    public function destroy(Task $task):RedirectResponse
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success','Eliminado');

    }
}
