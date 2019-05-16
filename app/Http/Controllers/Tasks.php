<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\UrlGenerator;
class Tasks extends Controller
{
    public function add(Request $req){
        $task = new Task;
        $task->user = Auth::id();
        $task->task = $req->task;
        $task->save();
        return redirect('home');
    }

    public function complete($id){
        $task = Task::find($id);

        $task->status = 1;

        $task->save();
        return redirect('home');
    }
}