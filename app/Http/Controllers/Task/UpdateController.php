<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;

use App\Http\Requests\Task\UpdateRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Task $task)
    {
        $data = $request->validated();
        if(!isset($data['importance'])){
            $data['importance'] = 0;
        }
        $task->update($data);
        return redirect()->route('task.index')->with('msg', 'Задача изменена!');
    }
}
