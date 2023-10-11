<x-app-layout>

    <div class="container">
        <h2>قائمة المستخدمين</h2>
        <form action="{{ route('users.search') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" id="doctor_id" name="search" placeholder="ابحث عن مستخدم....">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">بحث</button>
                </div>
            </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>الاسم الأول</th>
                    <th>الاسم الأخير</th>
                    <th>الجنس</th>
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
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->role }}</td>

                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">عرض</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">تعديل</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا المستخدم؟')">حذف</button>
                        </form>                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
