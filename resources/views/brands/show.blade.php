<x-app-layout>

    <div class="container">
        <h1>تفاصيل العلامة التجارية</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">الاسم</th>
                    <td>{{ $brand->name }}</td>
                </tr>
                <tr>
                    <th scope="row">الوصف</th>
                    <td>{{ $brand->description }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('brands.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
    </div>
</x-app-layout>