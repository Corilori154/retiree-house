<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            return inertia(
                'Room/Index',
                [
                    'rooms' => Room::all()
                ]
            );
        }
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Room/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Room::create($request->all());


        return redirect()->route('room.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return inertia(
            'Room/Show',
            [
                'room' => $room
            ]
        );
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