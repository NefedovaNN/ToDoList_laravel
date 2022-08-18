<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Status;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
       
        $user = auth()->user();
        
        return view('personal.index', compact('user'));
    }
}
