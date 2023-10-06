<x-app-layout>

    <div class="container">
        <h1>تفاصيل الدواء</h1>

        <table class="table">
            <tr>
                <th>الاسم</th>
                <td>{{ $medicine->name }}</td>
            </tr>
            <tr>
                <th>الفئة</th>
                <td>{{ $medicine->category->name }}</td>
            </tr>
            <tr>
                <th>العلامة التجارية</th>
                <td>{{ $medicine->brand->name }}</td>
            </tr>
            <tr>
                <th>السعر</th>
                <td>{{ $medicine->price }}</td>
            </tr>
        </table>

        <a href="{{ route('medicines.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
    </div>
</x-app-layout>