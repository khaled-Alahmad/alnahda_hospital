<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Illness;

class IllnessController extends Controller
{
    public function index()
    {
        $illnesses = Illness::all();
        return view('illnesses.index', compact('illnesses'));
    }

    public function create()
    {
        return view('illnesses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        Illness::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('illnesses.index')
            ->with('success', 'تمت إضافة المرض بنجاح');
    }

    public function show($id)
    {
        $illness = Illness::find($id);
        return view('illnesses.show', compact('illness'));
    }

    public function edit($id)
    {
        $illness = Illness::find($id);
        return view('illnesses.edit', compact('illness'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $illness = Illness::find($id);
        $illness->update([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('illnesses.index')
            ->with('success', 'تم تحديث المرض بنجاح');
    }

    public function destroy($id)
    {
        $illness = Illness::find($id);
        $illness->delete();

        return redirect()->route('illnesses.index')
            ->with('success', 'تم حذف المرض بنجاح');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $illnesses = Illness::where('name', 'like', "%$searchTerm%")->get();

        return view('illnesses.index', compact('illnesses'));
        // return "ppppp";  
    }
}
