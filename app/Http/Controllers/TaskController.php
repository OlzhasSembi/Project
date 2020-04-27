<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function  submit(TaskRequest $req){
        $task = new Task();
        $task->name = $req->input('name');
        $task->owner = $req->input('owner');
        $task->description = $req->input('description');
        $task->status = $req->input('status');
        $task->todo_date = $req->input('todo_date');

        $task->save();

        return redirect()->route('welcome')->with('success', 'Task added');
    }

    public function allData(){
        $tasks = Task::where('owner', Auth::user()->email )->where('status','no status')->get();
        return view('tasks', ['data' => $tasks]);
    }
    public function showOneTask($id){
        return view('one-task', ['data' => Task::find($id)]);
    }

    public function updateTask($id){
        return view('update-task', ['data' => Task::find($id)]);
    }
    public function  updateTaskSubmit($id, TaskRequest $req){
        $task = Task::find($id);
        $task->name = $req->input('name');
        $task->owner = $req->input('owner');
        $task->description = $req->input('description');
        $task->status = $req->input('status');
        $task->todo_date = $req->input('todo_date');

        $task->save();

        return redirect()->route('task-data-one', $id)->with('success', 'Task updated');
    }
    public function deleteTask($id){
        Task::find($id)->delete();
        return redirect()->route('task-data', $id)->with('success', 'Task deleted');
    }



    public function allDataProcess(){
        $tasks = Task::where('owner', Auth::user()->email )->where('status','In the process')->get();
        return view('process-task', ['data' => $tasks]);
    }
    public function showOneTaskProcess($id){
        return view('one-taskProcess', ['data' => Task::find($id)]);
    }
    public function updateTaskProcess($id){
        return view('update-taskProcess', ['data' => Task::find($id)]);
    }
    public function  updateTaskSubmitProcess($id, TaskRequest $req){
        $task = Task::find($id);
        $task->name = $req->input('name');
        $task->owner = $req->input('owner');
        $task->description = $req->input('description');
        $task->status = $req->input('status');
        $task->todo_date = $req->input('todo_date');

        $task->save();

        return redirect()->route('task-data-one-process', $id)->with('success', 'Task updated');
    }
    public function deleteTaskProcess($id){
        Task::find($id)->delete();
        return redirect()->route('task-data-process', $id)->with('success', 'Task deleted');
    }


    public function allDataDone(){
        $tasks = Task::where('owner', Auth::user()->email )->where('status','Done')->get();
        return view('done-task', ['data' => $tasks]);
    }
    public function showOneTaskDone($id){
        return view('one-taskDone', ['data' => Task::find($id)]);
    }
    public function updateTaskDone($id){
        return view('update-taskDone', ['data' => Task::find($id)]);
    }
    public function  updateTaskSubmitDone($id, TaskRequest $req){
        $task = Task::find($id);
        $task->name = $req->input('name');
        $task->owner = $req->input('owner');
        $task->description = $req->input('description');
        $task->status = $req->input('status');
        $task->todo_date = $req->input('todo_date');

        $task->save();

        return redirect()->route('task-data-one-done', $id)->with('success', 'Task updated');
    }
    public function deleteTaskDone($id){
        Task::find($id)->delete();
        return redirect()->route('task-data-done', $id)->with('success', 'Task deleted');
    }
}
