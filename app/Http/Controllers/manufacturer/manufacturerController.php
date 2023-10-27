<?php

namespace App\Http\Controllers\manufacturer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class manufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('purchases.manufacturer.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('purchases.manufacturer.create');
        
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('purchases.manufacturer.edit');
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
