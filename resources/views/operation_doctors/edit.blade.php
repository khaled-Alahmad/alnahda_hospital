<x-app-layout>
    <div class="container">
        <h1>تعديل سجل العملية</h1>
        <form action="{{ route('operation-doctors.update', $operationDoctor->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="doctor_id">رقم الطبيب:</label>
                <select class="form-control" id="doctor_id" name="doctor_id" required>
                    @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}" {{ $doctor->id == $operationDoctor->doctor_id ? 'selected' : '' }}>
                        {{ $doctor->id }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="operation_id">رقم العملية:</label>
                <select class="form-control" id="operation_id" name="operation_id" required>
                    @foreach($operations as $operation)
                    <option value="{{ $operation->id }}" {{ $operation->id == $operationDoctor->operation_id ? 'selected' : '' }}>
                        {{ $operation->id }}
                    </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">تحديث</button>
            <a href="{{ route('operation-doctors.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>