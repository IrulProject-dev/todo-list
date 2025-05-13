<?php

namespace App\Http\Controllers;

use App\Models\daily_progres;
use App\Models\task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DailyProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
     {
         $tasks = auth()->user()->tasks()->orderBy('updated_at', 'desc')->get()->groupBy(function ($task){
                return Carbon::parse($task->updated_at)->format('Y-m-d');
            });

         // Kirim data ke view
         return view('dashboard', ['progress' => $tasks,]);
     }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(daily_progres $daily_progres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(daily_progres $daily_progres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, daily_progres $daily_progres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(daily_progres $daily_progres)
    {
        //
    }
}
