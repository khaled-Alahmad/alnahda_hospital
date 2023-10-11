<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }
    public function show($id)
    {
        $category = Category::find($id);
        return view('categories.show', compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories',
        ]);

        Category::create([
            'name' => $request->input('name'),
        ]);
        notify()->success('تمت إضافة الفئة بنجاح');

        return redirect()->route('categories.index')
            ->with('success', 'تمت إضافة الفئة بنجاح');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
        ]);

        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->save();
        notify()->success('تم تحديث الفئة بنجاح');

        return redirect()->route('categories.index')
            ->with('success', 'تم تحديث الفئة بنجاح');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        notify()->success('تم حذف الفئة بنجاح');

        return redirect()->route('categories.index')
            ->with('success', 'تم حذف الفئة بنجاح');
    }
    public function search(Request $request)
    {
        $searchCriteria = $request->only(['name']);

        $categories = Category::query();

        foreach ($searchCriteria as $field => $value) {
            if ($value) {
                $categories->where($field, 'like', "%$value%");
            }
        }

        $results = $categories->get();

        return view('categories.index', compact('results'));
    }
}
