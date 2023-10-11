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
        $room = new Room();
        $room->roomSize = $request->input('roomSize');
        $room->floor_id = $request->input('floor_id');
        $room->save();
        notify()->success('تمت اضافة الغرفة بنجاح.');

        return redirect()->route('rooms.index');
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
        $room = Room::find($id);
        $room->roomSize = $request->input('roomSize');
        $room->floor_id = $request->input('floor_id');
        $room->save();
        notify()->success('تمت تحديث الغرفة بنجاح.');

        return redirect()->route('rooms.index')->with('success', 'تم تحديث الغرفة بنجاح');
    }

    public function destroy($id)
    {
        $room = Room::find($id);
        $room->delete();
        notify()->success('تمت حذف الغرفة بنجاح.');

        return redirect()->route('rooms.index')->with('success', 'تم حذف الغرفة بنجاح');
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $rooms = Room::where('roomSize', 'LIKE', '%' . $searchTerm . '%')->get();
        return view('rooms.index', compact('rooms'));
    }
}
