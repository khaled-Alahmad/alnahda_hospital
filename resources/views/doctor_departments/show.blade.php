<x-app-layout>

    <div class="container">
        <h1>تفاصيل الفئة</h1>

        <table class="table">
            <tbody>
                <tr>
                    <th>العنوان:</th>
                    <td>{{ $department->title }}</td>
                    <th>الوصف:</th>
                    <td>{{ $departments->description }}</td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('doctor-departments.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
    </div>
</x-app-layout>