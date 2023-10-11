<x-app-layout>

    <div class="container">
        <h1>عرض تفصيل المعاينة</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="col">الحقل</th>
                    <th scope="col">القيمة</th>
                </tr>
                <tr>
                    <td>رقم المعاينة:</td>
                    <td>{{ $previewDetail->preview_id }}</td>
                </tr>
                <tr>
                    <td>رقم الدواء:</td>
                    <td>{{ $previewDetail->medicine_id }}</td>
                </tr>
                <tr>
                    <td>تاريخ الإنشاء:</td>
                    <td>{{ $previewDetail->created_at }}</td>
                </tr>
                <tr>
                    <td>نوع المرض:</td>
                    <td>{{ $preview->illness->name }}</td>
                </tr>

            </tbody>
        </table>
        <a href="{{ route('preview-details.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
    </div>
</x-app-layout>