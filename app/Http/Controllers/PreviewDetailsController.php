<?php

namespace App\Http\Controllers;

use App\Models\Illness;
use App\Models\Medicine;
use App\Models\Preview;
use App\Models\PreviewDetails;
use Illuminate\Http\Request;

class PreviewDetailsController extends Controller
{
    public function index()
    {
        $previewDetails = PreviewDetails::all();
        return view('preview_details.index', compact('previewDetails'));
    }

    public function create()
    {
        $illnesses = Illness::all();

        $medicines = Medicine::all();
        $previews = Preview::all();
        // عرض نموذج إنشاء السجل
        return view('preview_details.create', compact('medicines', 'previews', 'illnesses'));
    }

    public function store(Request $request)
    {
        // حفظ السجل في قاعدة البيانات
        $previewDetail = PreviewDetails::create([
            'illness_id' => $request->input('illness_id'),
            'preview_id' => $request->input('preview_id'),
            'medicine_id' => $request->input('medicine_id'),
        ]);
        notify()->success('تمت إضافة التفاصيل بنجاح');

        return redirect()->route('preview-details.index')
            ->with('success', 'تمت إضافة التفاصيل بنجاح');
    }

    public function show($id)
    {
        $previewDetail = PreviewDetails::find($id);
        return view('preview_details.show', compact('previewDetail'));
    }

    public function edit($id)
    {
        $illnesses = Illness::all();
        $previewDetail = PreviewDetails::find($id);
        // عرض نموذج تحرير السجل
        return view('preview_details.edit', compact('previewDetail', 'illnesses'));
    }

    public function update(Request $request, $id)
    {
        // تحديث السجل في قاعدة البيانات
        $previewDetail = PreviewDetails::find($id);
        $previewDetail->update([
            'preview_id' => $request->input('preview_id'),
            'medicine_id' => $request->input('medicine_id'),
            'illness_id' => $request->input('illness_id'),

        ]);
        notify()->success('تم تحديث التفاصيل بنجاح');

        return redirect()->route('preview-details.index')
            ->with('success', 'تم تحديث التفاصيل بنجاح');
    }

    public function destroy($id)
    {
        // حذف السجل من قاعدة البيانات
        $previewDetail = PreviewDetails::find($id);
        $previewDetail->delete();
        notify()->success('تم حذف التفاصيل بنجاح');

        return redirect()->route('preview-details.index')
            ->with('success', 'تم حذف التفاصيل بنجاح');
    }

    public function search(Request $request)
    {
        // استخراج معاملات البحث من الطلب
        $previewId = $request->input('preview_id');
        $medicineId = $request->input('medicine_id');

        // بناء استعلام البحث باستخدام المعاملات
        $query = PreviewDetails::query();

        if ($previewId) {
            $query->where('preview_id', $previewId);
        }

        if ($medicineId) {
            $query->where('medicine_id', $medicineId);
        }

        // تنفيذ الاستعلام واسترداد النتائج
        $previewDetails = $query->get();

        // عرض النتائج في العرض المناسب
        return view('preview_details.index', compact('previewDetails'));
    }
}
