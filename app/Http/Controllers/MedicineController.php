<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Category;
use App\Models\Brand;

class MedicineController extends Controller
{
    public function index(Request $request)
    {
        // عرض قائمة الأدوية
        $medicines = Medicine::all();
        return view('medicines.index', compact('medicines'));
    }

    public function create()
    {
        // إنشاء نموذج جديد لإضافة دواء
        $categories = Category::all();
        $brands = Brand::all();
        return view('medicines.create', compact('categories', 'brands'));
    }

    public function store(Request $request)
    {
        // حفظ الدواء الجديد في قاعدة البيانات
        $medicine = new Medicine;
        $medicine->name = $request->input('name');
        $medicine->category_id = $request->input('category_id');
        $medicine->brand_id = $request->input('brand_id');
        $medicine->price = $request->input('price');
        $medicine->save();
        notify()->success('تمت إضافة الدواء بنجاح');

        return redirect()->route('medicines.index')
            ->with('success', 'تمت إضافة الدواء بنجاح');
    }

    public function show($id)
    {
        // عرض تفاصيل الدواء
        $medicine = Medicine::find($id);
        return view('medicines.show', compact('medicine'));
    }

    public function edit($id)
    {
        // تحرير معلومات الدواء
        $medicine = Medicine::find($id);
        $categories = Category::all();
        $brands = Brand::all();
        return view('medicines.edit', compact('medicine', 'categories', 'brands'));
    }

    public function update(Request $request, $id)
    {
        // تحديث معلومات الدواء
        $medicine = Medicine::find($id);
        $medicine->name = $request->input('name');
        $medicine->category_id = $request->input('category_id');
        $medicine->brand_id = $request->input('brand_id');
        $medicine->price = $request->input('price');
        $medicine->save();
        notify()->success('تم تحديث معلومات الدواء بنجاح');

        return redirect()->route('medicines.index')
            ->with('success', 'تم تحديث معلومات الدواء بنجاح');
    }

    public function destroy($id)
    {
        // حذف الدواء
        $medicine = Medicine::find($id);
        $medicine->delete();
        notify()->success('تم حذف الدواء بنجاح');

        return redirect()->route('medicines.index')
            ->with('success', 'تم حذف الدواء بنجاح');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $medicines = Medicine::where('name', 'like', '%' . $searchTerm . '%')->get();

        return view('medicines.index', compact('medicines'));
    }
}
