<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class HomeController extends Controller
{
    public function index(Request $request) {
        $tasks = Task::getAllTasks();

        return view('home', compact('tasks'));
    }


}
