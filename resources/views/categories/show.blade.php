<x-app-layout>

    <div class="container">
        <h1>تفاصيل الفئة</h1>

        <table class="table">
            <tbody>
                <tr>
                    <th>الاسم:</th>
                    <td>{{ $category->name }}</td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('categories.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
    </div>
</x-app-layout>