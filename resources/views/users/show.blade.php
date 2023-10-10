<x-app-layout>

    <div class="container">
        <h2>تفاصيل المستخدم</h2>
        <table class="table">
            <tr>
                <th>الاسم الأول</th>
                <td>{{ $user->firstName }}</td>
            </tr>
            <tr>
                <th>الاسم الأخير</th>
                <td>{{ $user->lastName }}</td>
            </tr>
            <tr>
                <th>الأب</th>
                <td>{{ $user->father }}</td>
            </tr>
            <tr>
                <th>الأم</th>
                <td>{{ $user->mother }}</td>
            </tr>
            <tr>
                <th>العمر</th>
                <td>{{ $user->age }}</td>
            </tr>
            <tr>
                <th>الهاتف</th>
                <td>{{ $user->phone }}</td>
            </tr>
            <tr>
                <th>العنوان</th>
                <td>{{ $user->address }}</td>
            </tr>
            <tr>
                <th>البريد الإلكتروني</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th> الصلاحية</th>
                <td>{{ $user->role->role }}</td>
            </tr>
            <tr>
                <th>الجنس</th>
                <td>{{ $user->gender }}</td>
            </tr>
        </table>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">عودة</a>
    </div>

</x-app-layout>