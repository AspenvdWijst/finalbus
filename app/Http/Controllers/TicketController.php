<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use Illuminate\Support\Facades\Auth;
class TicketController extends Controller
{
    public function store(Request $request, Bus $bus)
    {
        // Order creation logic here
        $user = Auth::user(); // Get the logged-in user
        $ticketQuantity = $request->input('quantity'); // Number of tickets ordered
        $pointsEarned = $ticketQuantity * 10; // Example: 10 points per ticket

        // Add the points to the user's current points
        $user->points += $pointsEarned;
        $user->save();

        $user->buses()->attach($bus->id);

        return redirect()->route('profile.edit');

    }
}
