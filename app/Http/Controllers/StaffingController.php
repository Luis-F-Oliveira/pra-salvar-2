<?php

namespace App\Http\Controllers;

use App\Models\Staffing;
use Illuminate\Http\Request;

class StaffingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Staffing::with('information')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date =  $request->input('date');
        return Staffing::create(['date' => date('Y-m-d', strtotime($date))]);
    }

    /**
     * Display the specified resource.
     */
    public function show($date)
    {
        return Staffing::with('information')
            ->where('date', date('Y-m-d', strtotime($date)))
            ->first();
    }
}
