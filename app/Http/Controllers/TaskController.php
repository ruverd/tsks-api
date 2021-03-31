<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){
        return DB::table('tasks')
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function show(Task $task)
    {
        return $task;
    }

    public function store(TaskRequest $request)
    {
        return Task::create([
            'title' => request('title'),
            'description' => request('description'),
        ]);
    }

    public function update(TaskRequest $request, Task $task)
    {
        $task->title = request('title');
        $task->description = request('description');
        $task->save();

        return $task;
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json(null, 204);
    }
}
