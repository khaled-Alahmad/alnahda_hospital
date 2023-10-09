<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }

    public function create()
    {
        return view('brands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Brand::create($request->all());

        return redirect()->route('brands.index')
            ->with('success', 'تمت إضافة العلامة التجارية بنجاح');
    }

    public function show($id)
    {
        $brand = Brand::find($id);
        return view('brands.show', compact('brand'));
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('brands.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $brand = Brand::find($id);
        $brand->update($request->all());

        return redirect()->route('brands.index')
            ->with('success', 'تم تحديث العلامة التجارية بنجاح');
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();

        return redirect()->route('brands.index')
            ->with('success', 'تم حذف العلامة التجارية بنجاح');
    }

    public function search(Request $request)
    {
        $searchCriteria = $request->only(['name', 'description']);

        $brands = Brand::query();

        foreach ($searchCriteria as $field => $value) {
            if ($value) {
                $brands->where($field, 'LIKE', '%' . $value . '%');
            }
        }

        $results = $brands->get();

        return view('brands.index', compact('results'));
    }
}
