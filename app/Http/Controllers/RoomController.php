<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with('hotel')->get();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        $hotels = Hotel::all();
        return view('rooms.create', compact('hotels'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'room_number' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        Room::create($validated);

        return redirect()->route('rooms.index')->with('success', 'Room created successfully.');
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'room_number' => 'required|string',
            'room_type' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $room = Room::findOrFail($id);
        $room->update($request->all());

        return redirect()->route('rooms.index')->with('success', 'Room updated successfully.');
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully.');
    }

}
