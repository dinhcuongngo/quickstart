<?php

namespace App\Http\Controllers;

use App\Task;
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
        //
        $tasks = Task::all();

        //dd($tasks);

        return view('/tasks',['tasks'=>$tasks]);
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
        $rules = [
            'name' => 'required',
        ];

        $valiMsg = [
            'name.required' => 'The task name is required!',
        ];

        //$validator = $request->validate($rules);
        $this->validate($request,$rules,$valiMsg);

        $task   = Task::create($request->all());

        return redirect('/tasks')->with(['success'=> 'Successfully created a new task!']);

    }

    public function show(Task $task)
    {
        //

    }


    public function update(Request $request, Task $task)
    {
        //
    }


    public function destroy(Task $task)
    {
        //dd($task);

        $task->delete();

        return redirect('/tasks');
    }
}
