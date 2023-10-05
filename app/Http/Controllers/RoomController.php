<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        $floors = Floor::all();
        return view('rooms.create', compact('floors'));
    }

    public function store(Request $request)
    {
        // اجراء عملية الإضافة
        $room = new Room();
        $room->roomSize = $request->input('roomSize');
        $room->floor_id = $request->input('floor_id');
        $room->save();

        return redirect()->route('rooms.index')->with('success', 'تمت إضافة الغرفة بنجاح');
    }

    public function show($id)
    {
        $room = Room::find($id);
        return view('rooms.show', compact('room'));
    }

    public function edit($id)
    {
        $room = Room::find($id);
        $floors = Floor::all();
        return view('rooms.edit', compact('room', 'floors'));
    }

    public function update(Request $request, $id)
    {
        // اجراء عملية التحديث
        $room = Room::find($id);
        $room->roomSize = $request->input('roomSize');
        $room->floor_id = $request->input('floor_id');
        $room->save();

        return redirect()->route('rooms.index')->with('success', 'تم تحديث الغرفة بنجاح');
    }

    public function destroy($id)
    {
        // اجراء عملية الحذف
        $room = Room::find($id);
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'تم حذف الغرفة بنجاح');
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $rooms = Room::where('roomSize', 'LIKE', '%' . $searchTerm . '%')->get();
        return view('rooms.index', compact('rooms'));
    }
}
