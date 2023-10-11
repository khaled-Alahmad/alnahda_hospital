<x-app-layout>

    <div class="container">
        <h1>قائمة الأطباء</h1>


        <form action="{{ route('doctors.search') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="البحث عن طبيب">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">بحث</button>
                </div>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">المستخدم</th>
                    <th scope="col">القسم الطبي</th>
                    <th scope="col">التخصص</th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->id }}</td>
                    <td>{{ $doctor->user->firstName.' '.$doctor->user->lastName }}</td>
                    <td>{{ $doctor->doctor_department->title }}</td>
                    <td>{{ $doctor->specialist }}</td>
                    <td>
                        @can('isAdmin')

                        <a href="{{ route('doctors.show', $doctor->id) }}" class="btn btn-primary">عرض</a>
                        <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-warning">تحرير</a>
                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا الطبيب؟')">حذف</button>
                        </form>
                        @endcan
                        @can('isDoctor')
                        ليس لديك صلاحية لأي إجراء

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