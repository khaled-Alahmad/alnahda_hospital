<x-app-layout>

    <div class="container">
        <h1>عرض تفاصيل المعاينة</h1>

        <!-- زر الإضافة -->
        <a href="{{ route('preview-details.create') }}" class="btn btn-success mb-3">إضافة تفصيل معاينة جديد</a>

        <!-- نموذج البحث -->
        <form action="{{ route('preview-details.search') }}" method="GET" class="mb-3">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <label for="preview_id">رقم المعاينة:</label>
                    <input type="text" name="preview_id" id="preview_id" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="medicine_id">رقم الدواء:</label>
                    <input type="text" name="medicine_id" id="medicine_id" class="form-control">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary" style="margin-top: 32px;">بحث</button>
                </div>
            </div>
        </form>

        <!-- جدول عرض تفاصيل المعاينة -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">رقم المعاينة</th>
                    <th scope="col">رقم الدواء</th>
                    <th scope="col">تاريخ الإنشاء</th>
                    <th scope="col"> الاجرائيات</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($previewDetails as $detail)
                <tr>
                    <td>{{ $detail->preview_id }}</td>
                    <td>{{ $detail->medicine_id }}</td>
                    <td>{{ $detail->created_at }}</td>
                    <td>
                        <a href="{{ route('preview-details.show', $detail->id) }}" class="btn btn-info">عرض</a>
                        <a href="{{ route('preview-details.edit', $detail->id) }}" class="btn btn-warning">تعديل</a>
                        <form action="{{ route('preview-details.destroy', $detail->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا السجل؟')">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>