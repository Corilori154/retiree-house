<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $residents = Resident::with('rooms')->get();

        return Inertia::render('Resident/Index', ['residents' => $residents]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Resident/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Resident::create(
            $request->all());


        return redirect()->route('resident.index');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $resident = Resident::with('medicals')->findOrFail($id);

    return Inertia::render('Resident/Show', ['resident' => $resident]);
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resident $resident)
    {
        return inertia(
            'Resident/Edit',
            [
                'resident' => $resident
            ]
        );
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resident $resident)
    {
        //
        $resident->update(
            $request->validate([
                'prénom' => 'required',
                'nom' => 'required',
                'régime' => 'required',
            ])
        );

       
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resident $resident)
    {
        $resident->delete();


        return redirect()->back();
    }

}
