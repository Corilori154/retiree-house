<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kitchen;

class KitchenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            return inertia(
                'Kitchen/Index',
                [
                    'kitchens' => Kitchen::all()
                ]
            );
        }
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Kitchen/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kitchen::create($request->all());


        return redirect()->route('kitchen.index');

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
        //
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
