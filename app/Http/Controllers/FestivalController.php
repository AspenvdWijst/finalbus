<?php

namespace App\Http\Controllers;

use App\Models\festival;
use Illuminate\Http\Request;
use Carbon\Carbon;


class FestivalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $festivals = festival::all();
        return view('dashboard', compact('festivals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(request $request)
    {
        $date = $request->input('date');

        // Convert the incoming date to 'Y-m-d' format (standard MySQL date format)
        $formattedDate = Carbon::createFromFormat('m/d/Y', $date)->format('Y/m/d');
        $festival = new festival();
        $festival->name = $request->name;
        $festival->genre = $request->genre;
        $festival->info = $request->info;
        $festival->date = $formattedDate;
        $festival->save();

        return redirect()->route('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $festival = new festival();
        $festival->name = $request->name;
        $festival->genre = $request->genre;
        $festival->info = $request->info;
        $festival->date = $request->date;
        $festival->save();

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(festival $festival)
    {
        $festival->load('buses');
        $userPoints = auth()->user()->points ?? 0;
        return view('festival.bus', compact('festival', 'userPoints'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(festival $festival)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, festival $festival)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(festival $festival)
    {
        //
    }
}
