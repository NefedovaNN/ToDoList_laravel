<?php

namespace App\Http\Controllers\Personal\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('personal.task.index');
    }
}
