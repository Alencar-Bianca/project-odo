<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;
use Auth;
use Illuminate\Support\Carbon;
class HomeController extends Controller
{
    public function index(Request $request) {
        $dateFilter = $request->date ?? date('Y-m-d');
        $tasks = Task::getByDate($dateFilter);

        $carbonDate = Carbon::createFromDate($dateFilter);


        $tasks->dateString = $carbonDate->translatedFormat('d').' de '.ucfirst($carbonDate->translatedFormat('M'));
        $tasks->prev = $carbonDate->addDay(-1)->format('Y-m-d');
        $tasks->next = $carbonDate->addDay(2)->format('Y-m-d');

        return view('home', compact('tasks'));
    }


}
