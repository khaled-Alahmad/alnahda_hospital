<x-app-layout>
    <div class="container">
        <h1>قائمة العمليات</h1>

        <!-- نموذج البحث -->
        <form action="{{ route('operations.search') }}" method="GET">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="doctor_id">رقم الطبيب:</label>
                    <input type="text" class="form-control" id="doctor_id" name="doctor_id">
                </div>
                <div class="col">
                    <label for="patient_id">رقم المريض:</label>
                    <input type="text" class="form-control" id="patient_id" name="patient_id">
                </div>
                <div class="col">
                    <label for="preview_id">رقم المعاينة:</label>
                    <input type="text" class="form-control" id="preview_id" name="preview_id">
                </div>
                <div class="col">
                    <label for="room_id">رقم الغرفة:</label>
                    <input type="text" class="form-control" id="room_id" name="room_id">
                </div>
                <div class="col">
                    <label for="date_time">تاريخ ووقت العملية:</label>
                    <input type="datetime-local" class="form-control" id="date_time" name="date_time">
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">بحث</button>
                </div>
            </div>
        </form>

        <!-- عرض العمليات -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">رقم العملية</th>
                    <th scope="col">اسم الطبيب</th>
                    <th scope="col">اسم المريض</th>
                    <th scope="col">رقم المعاينة</th>
                    <th scope="col">رقم الغرفة</th>
                    <th scope="col">تاريخ ووقت العملية</th>
                    <th scope="col">الإجراءات</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($operations as $operation)
                <tr>
                    <td>{{ $operation->id }}</td>
                    <td>{{ $operation->doctor->user->firstName.' '. $operation->doctor->user->lastName  }}</td>
                    <td>{{ $operation->patient->user->firstName.' '.$operation->patient->user->lastName }}</td>
                    <td>{{ $operation->preview_id }}</td>
                    <td>{{ $operation->room_id }}</td>
                    <td>{{ $operation->date_time }}</td>
                    <td>
                        <a href="{{ route('operations.show', $operation->id) }}" class="btn btn-primary">عرض</a>
                        <a href="{{ route('operations.edit', $operation->id) }}" class="btn btn-warning">تحرير</a>
                        <form action="{{ route('operations.destroy', $operation->id) }}" method="POST" style="display: inline-block;">
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