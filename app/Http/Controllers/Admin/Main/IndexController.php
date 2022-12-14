<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['taskCount'] = auth()->user()->tasks->count();
        $data['categoryCount'] = Category::all()->count();
        $data['statusCount'] = Status::all()->count();
        $data['userCount'] = User::all()->count();
        return view('admin.main.index', compact('data'));
    }
}
