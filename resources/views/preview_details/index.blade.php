<x-app-layout>

    <div class="container">
        <h1>عرض تفاصيل المعاينة</h1>


        <form action="{{ route('preview-details.search') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="preview_id" id="preview_id" class="form-control" placeholder="رقم المعاينة...">
                <input type="text" name="medicine_id" id="medicine_id" class="form-control" placeholder="رقم الدواء...">


                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">بحث</button>
                </div>
            </div>
        </form>


        <!-- جدول عرض تفاصيل المعاينة -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="">رقم المعاينة</th>
                    <th scope=""> الدواء</th>
                    <th scope="">تاريخ الإنشاء</th>
                    <th scope=""> الاجرائيات</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($previewDetails as $detail)
                <tr>
                    <td>{{ $detail->preview_id }}</td>
                    <td>{{ $detail->medicine->name }}</td>
                    <td>{{ $detail->created_at }}</td>
                    <td>
                        @can('isAdmin')
                        <a href="{{ route('preview-details.show', $detail->id) }}" class="btn btn-primary">عرض</a>
                        <a href="{{ route('preview-details.edit', $detail->id) }}" class="btn btn-warning">تعديل</a>
                        <form action="{{ route('preview-details.destroy', $detail->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا السجل؟')">حذف</button>
                        </form>
                        @endcan
                        @can('isDoctor')
                        <a href="{{ route('preview-details.show', $detail->id) }}" class="btn btn-primary">عرض</a>
                        <a href="{{ route('preview-details.edit', $detail->id) }}" class="btn btn-warning">تعديل</a>
                        <form action="{{ route('preview-details.destroy', $detail->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا السجل؟')">حذف</button>
                        </form>
                        @endcan
                        @can('isPatient')
                        ليس لديك صلاحية لأي إجراء
                        @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>