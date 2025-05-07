<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard() {
        return view('dashboard', [
            'tasks' => auth()->user()->tasks,
            'progress' => auth()->user()->dailyProgress,
        ]);
    }
}
