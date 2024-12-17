<?php

namespace App\Http\Controllers;

use App\Models\bus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buses = bus::all();
        return view('festival.bus', compact('buses'));
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
        $bus = new bus();
        $bus->id = $request->id;
        $bus->time_leave = $request->time_leave;
        $bus->time_arrive = $request->time_arrive;
        $bus->price = $request->price;
        $bus->save();

        return redirect()->route('festival.bus');
    }

    /**
     * Display the specified resource.
     */
    public function show(bus $bus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bus $bus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bus $bus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bus $bus)
    {
        //
    }
}