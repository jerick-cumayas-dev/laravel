<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function index(){
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks, 'progress' => $progress, 'done' => $done]);
    }

    public function create(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start' => 'required',
            'due' => 'required',
            'status' => 'required'
        ]);

        $newTask = Task::create($data);

        return redirect(route('task.page'));
    }

    public function update(){

    }

    public function delete(){

    }
}
