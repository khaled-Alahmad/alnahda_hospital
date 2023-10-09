<x-app-layout>
    <div class="container">
        <h1>قائمة اطباء العمليات</h1>

        <!-- نموذج البحث -->
        <form action="{{ route('operation-doctors.search') }}" method="GET">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="doctor_id">رقم الطبيب:</label>
                    <input type="text" class="form-control" id="doctor_id" name="doctor_id">
                </div>
                <div class="col">
                    <label for="operation_id">رقم العملية:</label>
                    <input type="text" class="form-control" id="operation_id" name="operation_id">
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