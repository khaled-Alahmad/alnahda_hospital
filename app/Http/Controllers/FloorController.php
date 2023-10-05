<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Floor;

class FloorController extends Controller
{
    public function index()
    {
        $floors = Floor::all();
        return view('floors.index', compact('floors'));
    }

    public function create()
    {
        return view('floors.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'numberOfFloor' => 'required|integer',
            'numberOfRooms' => 'required|integer',
        ]);

        $floor = new Floor;
        $floor->numberOfFloor = $validatedData['numberOfFloor'];
        $floor->numberOfRooms = $validatedData['numberOfRooms'];
        $floor->save();

        return redirect()->route('floors.index')->with('success', 'تمت إضافة الطابق بنجاح');
    }
    public function show($id)
    {
        $floor = Floor::find($id);
        return view('floors.show', compact('floor'));
    }

    public function edit($id)
    {
        $floor = Floor::find($id);
        return view('floors.edit', compact('floor'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'numberOfFloor' => 'required|integer',
            'numberOfRooms' => 'required|integer',
        ]);

        $floor = Floor::find($id);
        $floor->numberOfFloor = $validatedData['numberOfFloor'];
        $floor->numberOfRooms = $validatedData['numberOfRooms'];
        $floor->save();

        return redirect()->route('floors.index')->with('success', 'تم تحديث الطابق بنجاح');
    }


    public function destroy($id)
    {
        $floor = Floor::find($id);
        $floor->delete();

        return redirect()->route('floors.index')->with('success', 'تم حذف الطابق بنجاح');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        // قم بتنفيذ عملية البحث بناءً على متطلبات تطبيقك
        $floors = Floor::where('numberOfFloor', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('numberOfRooms', 'LIKE', '%' . $searchTerm . '%')
            ->get();

        return view('floors.index', compact('floors'));
    }
}
