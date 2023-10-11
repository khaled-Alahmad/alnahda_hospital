<x-app-layout>
    <div class="container">
        <h1>إنشاء سجل العملية</h1>
        <form action="{{ route('operation-doctors.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="doctor_id"> الطبيب:</label>
                <select class="form-control" id="doctor_id" name="doctor_id" required>
                    @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->user->firstName.' '.$doctor->user->lastName }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="operation_id">رقم العملية:</label>
                <select class="form-control" id="operation_id" name="operation_id" required>
                    @foreach($operations as $operation)
                    <option value="{{ $operation->id }}">{{ $operation->id }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">إنشاء</button>
            <a href="{{ route('operation-doctors.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>