<x-app-layout>
    <div class="container">
        <h1>قائمة اطباء العمليات</h1>
        <form action="{{ route('operation-doctors.search') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" id="doctor_id" name="doctor_id" placeholder="رقم الدكتور...">
                <input type="text" class="form-control" id="operation_id" name="operation_id" placeholder="رقم العملية...">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">بحث</button>
                </div>
            </div>
        </form>


        <!-- عرض العمليات -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">رقم الطبيب</th>
                    <th scope="col">رقم العملية</th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($operationDoctors as $operationDoctor)
                <tr>
                    <td>{{ $operationDoctor->id }}</td>
                    <td>{{ $operationDoctor->doctor_id }}</td>
                    <td>{{ $operationDoctor->operation_id }}</td>
                    <td>
                        <a href="{{ route('operation-doctors.show', $operationDoctor->id) }}" class="btn btn-primary">عرض</a>
                        <a href="{{ route('operation-doctors.edit', $operationDoctor->id) }}" class="btn btn-warning">تحرير</a>
                        <form action="{{ route('operation-doctors.destroy', $operationDoctor->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا السجل؟')">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
