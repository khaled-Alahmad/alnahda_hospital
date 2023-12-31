<x-app-layout>

    <div class="container">
        <h1>قائمة الحجوزات</h1>

        <form action="{{ route('patient-rooms.search') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="البحث عن مريض في غرفة">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">بحث</button>
                </div>
            </div>
        </form>
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
                        @can('isAdmin')
                        <a href="{{ route('patient-rooms.show', $patientRoom->id) }}" class="btn btn-primary">عرض</a>
                        <a href="{{ route('patient-rooms.edit', $patientRoom->id) }}" class="btn btn-warning">تحرير</a>
                        <form action="{{ route('patient-rooms.destroy', $patientRoom->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا الحجز؟')">حذف</button>
                        </form>
                        @endcan
                        @can('isDoctor')
                        <a href="{{ route('patient-rooms.show', $patientRoom->id) }}" class="btn btn-primary">عرض</a>
                        <a href="{{ route('patient-rooms.edit', $patientRoom->id) }}" class="btn btn-warning">تحرير</a>
                        <form action="{{ route('patient-rooms.destroy', $patientRoom->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا الحجز؟')">حذف</button>
                        </form>
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