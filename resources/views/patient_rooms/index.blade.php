<x-app-layout>

    <div class="container">
        <h1>قائمة الحجوزات</h1>

        <a href="{{ route('patient-rooms.create') }}" class="btn btn-success mb-3">إضافة حجز جديد</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">المريض</th>
                    <th scope="col">الغرفة</th>
                    <th scope="col">من</th>
                    <th scope="col">إلى</th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($patientRooms as $patientRoom)
                <tr>
                    <td>{{ $patientRoom->id }}</td>
                    <td>{{ $patientRoom->patient->user->firstName.' '.$patientRoom->patient->user->lastName }}</td>
                    <td>{{ $patientRoom->room->id }}</td>
                    <td>{{ $patientRoom->from }}</td>
                    <td>{{ $patientRoom->to }}</td>
                    <td>
                        <a href="{{ route('patient-rooms.show', $patientRoom->id) }}" class="btn btn-primary">عرض</a>
                        <a href="{{ route('patient-rooms.edit', $patientRoom->id) }}" class="btn btn-warning">تحرير</a>
                        <form action="{{ route('patient-rooms.destroy', $patientRoom->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا الحجز؟')">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>