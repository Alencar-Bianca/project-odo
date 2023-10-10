<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function show() {

    }
    public function create() {
        return view('tasks.create');
    }
    public function store() {

    }
    public function edit() {
        return view('tasks.edit');
    }
    public function delete() {
        return redirect()->back();
    }

}
