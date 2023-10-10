<x-app-layout>

    <div class="container">
        <h2>قائمة المستخدمين</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>الاسم الأول</th>
                    <th>الاسم الأخير</th>
                    <th>الجنس</th>
                    <th>العمر</th>
                    <th>الهاتف</th>
                    <th>البريد الإلكتروني</th>
                    <th>الصلاحية</th>

                    <th>العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->firstName }}</td>
                    <td>{{ $user->lastName }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->role }}</td>

                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">عرض</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">تعديل</a>
                        <!-- يمكنك إضافة زر لحذف المستخدم هنا -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>