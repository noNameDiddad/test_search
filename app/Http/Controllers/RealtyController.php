<?php

namespace App\Http\Controllers;

use App\Models\Realty;
use Illuminate\Http\Request;

class RealtyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('search');
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
    public function show(Realty $realty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Realty $realty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Realty $realty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Realty $realty)
    {
        //
    }
}
