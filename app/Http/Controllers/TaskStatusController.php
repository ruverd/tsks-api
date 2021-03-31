<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskStatusController extends Controller
{
    public function update(Request $request, Task $task)
    {
        $task->status = !$task->status;
        $task->save();

        return $task;
    }
}
