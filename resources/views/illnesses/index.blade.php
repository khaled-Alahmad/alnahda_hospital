<x-app-layout>
    <div class="container">
        <h1>قائمة الأمراض</h1>

        <input type="text" class="form-control" name="search" id="search-illness" placeholder="البحث عن مرض">

        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم المرض</th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody id="search-results">
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
                            <button type="submit" class="btn btn-danger" i onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا المرض؟')">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</x-app-layout>