<x-app-layout>

    <div class="container">

        <h1>قائمة الأمراض</h1>

        <a href="{{ route('illnesses.create') }}" class="btn btn-success mb-3">إضافة مرض جديد</a>

        <form action="{{ route('illnesses.search') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="البحث عن مرض">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">بحث</button>
                </div>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم المرض</th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($illnesses as $illness)
                <tr>
                    <td>{{ $illness->id }}</td>
                    <td>{{ $illness->name }}</td>
                    <td>
                        <a href="{{ route('illnesses.show', $illness->id) }}" class="btn btn-primary">عرض</a>
                        <a href="{{ route('illnesses.edit', $illness->id) }}" class="btn btn-warning">تحرير</a>
                        <form action="{{ route('illnesses.destroy', $illness->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا المرض؟')">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>