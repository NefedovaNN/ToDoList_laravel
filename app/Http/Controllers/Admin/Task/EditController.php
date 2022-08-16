<?php

namespace App\Http\Controllers\Admin\Task;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Status;
use App\Models\Task;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Task $task)
    {
        $categories = Category::all();
        $statuses = Status::all();
        return view('admin.task.edit', compact('task', 'categories', 'statuses'));
    }
}
