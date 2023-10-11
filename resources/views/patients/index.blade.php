<x-app-layout>

    <div class="container">
        <h1>قائمة المرضى</h1>
        <form action="{{ route('patients.search') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="ابحث عن مريض...">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">بحث</button>
                </div>
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
                    <td>{{ $patient->user->firstName.' '.$patient->user->lastName }}</td>
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