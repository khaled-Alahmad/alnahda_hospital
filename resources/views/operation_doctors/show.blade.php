<x-app-layout>
    <div class="container">
        <h1>تفاصيل العملية</h1>
        <div class="form-group">
            <label for="doctor_id">رقم الطبيب:</label>
            <input type="text" class="form-control" id="doctor_id" name="doctor_id" value="{{ $operationDoctor->doctor_id }}" disabled>
        </div>

        <div class="form-group">
            <label for="operation_id">رقم العملية:</label>
            <input type="text" class="form-control" id="operation_id" name="operation_id" value="{{ $operationDoctor->operation_id }}" disabled>
        </div>

        <a href="{{ route('operation-doctors.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
    </div>
</x-app-layout>