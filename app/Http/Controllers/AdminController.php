<?php

namespace App\Http\Controllers;

use App\Models\festival;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $festivals = Festival::all();
        return view('admin.edit', compact('festivals'));
    }
}
