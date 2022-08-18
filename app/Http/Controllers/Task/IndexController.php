<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tasks = auth()->user()->tasks;
        return view('task.index', compact('tasks'));
    }
}
