<?php

namespace App\Http\Controllers;

use App\Http\Requests\Task\StoreRequest;
use App\Http\Requests\Task\UpdateRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
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
    public function store(StoreRequest  $request)
    {
        // Task::create([
            //     'name' => $request->name,
            //     'description' => $request->description,
            //     'date' => $request->date
            // ]);
        // Task::create($request->all());
        $data = $request->only('name', 'description', 'date', 'status');
        Task::create($data);
        return redirect()->back()->with('success','tarea creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', [
            'task'=> $task
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Task $task)
    {
        $data = $request->only('name', 'description', 'date', 'status');
        $task->update($data);
        return redirect()->back()->with('success', 'Taks updates');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
