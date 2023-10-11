<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Category, Task};

class TaskController extends Controller
{

    public function show() {

    }
    public function create(Request $request) {
        $categories = Category::getAllCategory();
        return view('tasks.create', compact('categories'));
    }
    public function store(Request $request) {
        Task::createNewTask($request);
        return redirect()->route('home.index');
    }
    public function edit(Request $request) {
        $task = Task::findOneTask($request->id);
        $categories = Category::getAllCategory();
        return view('tasks.edit', compact('task', 'categories'));
    }
    public function update(Request $request) {
        dd($request);
        Task::updateTask($request);
        return redirect()->route('home.index');
    }
    public function delete(Request $request) {

        Task::deleteTask($request->id);
        return redirect()->back();
    }

}
