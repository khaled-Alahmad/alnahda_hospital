@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>قائمة الأطباء</h1>

        <a href="{{ route('doctors.create') }}" class="btn btn-success mb-3">إضافة طبيب جديد</a>

        <form action="{{ route('doctors.search') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="البحث عن طبيب">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">بحث</button>
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
                    <td>{{ $doctor->user_id }}</td>
                    <td>{{ $doctor->doctor_department_id }}</td>
                    <td>{{ $doctor->specialist }}</td>
                    <td>
                        <a href="{{ route('doctors.show', $doctor->id) }}" class="btn btn-primary">عرض</a>
                        <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-warning">تحرير</a>
                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا الطبيب؟')">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <script>
            // استخدم Vue.js للبحث التلقائي
            new Vue({
                el: '#app',
                data: {
                    doctors: [],
                    search: ''
                },
                watch: {
                    // تتبع تغييرات الحقل بحث
                    search: function(newSearch) {
                        this.fetchData();
                    }
                },
                methods: {
                    fetchData: function() {
                        axios.get('/search?search=' + this.search)
                            .then(response => {
                                this.doctors = response.data;
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    }
                }
            });
        </script>
    </div>
@endsection
