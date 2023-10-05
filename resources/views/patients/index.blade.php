<x-app-layout>

    <div class="container">
        <h1>قائمة المرضى</h1>
        <a href="{{ route('patients.create') }}" class="btn btn-success mb-2">إنشاء مريض جديد</a>
        <form action="{{ route('patients.search') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="ابحث عن مريض...">
                <button type="submit" class="btn btn-primary">بحث</button>
            </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>المستخدم</th>
                    <th>العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                <tr>
                    <td>{{ $patient->id }}</td>
                    <td>{{ $patient->user_id }}</td>
                    <td>
                        <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-info">عرض</a>
                        <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning">تعديل</a>
                        <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد؟')">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>