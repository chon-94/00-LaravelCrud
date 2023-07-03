@extends('layouts.base')
<title>Tasks</title>

@section('content')

<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">CRUD de Tareas</h2>
        </div>
        <div>
            <a href="{{route('tasks.create')}}" class="btn btn-primary">Crear tarea</a>
        </div>
    </div>

    @if (Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong> {{Session::get('success')}}<br>
        </div>
    @endif

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white bg-slate-950 opacity-75">

            <tr class="text-secondary">
                <th>Tarea</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>

            @foreach ($tasks as $task)     

            <tr>
                <td class="fw-bold">{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>
                    {{$task->due_date}}
                </td>
                <td>
                    {{-- <span class="badge bg-warning fs-6">{{$task->status}}</span> --}}
                    <span class="badge 
                    {{$task->status === 'Pendiente' ?   'bg-red-500' : 
                     ($task->status === 'En progreso' ? 'bg-yellow-500' : 
                                                        'bg-green-500')}} fs-6">
                    {{$task->status}}
                    </span>
                    
                </td>
                <td>
                    <a href="{{route('tasks.edit',$task)}}" class="btn btn-info">Editar</a>

                    <form action="{{route('tasks.destroy',$task)}}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            
            @endforeach
            
        </table>
{{$tasks->links()}}

    </div>
</div>
@endsection