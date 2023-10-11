<x-app-layout>
    <div class="container">
        <h1>إنشاء تفصيل المعاينة جديد</h1>
        <form action="{{ route('preview-details.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="preview_id">رقم المعاينة:</label>
                <select class="form-control" id="preview_id" name="preview_id" required>
                    @foreach($previews as $preview)
                    <option value="{{ $preview->id }}">{{ $preview->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="illness_id">نوع المرض:</label>
                <select class="form-control" id="illness_id" name="illness_id" required>
                    @foreach($illnesses as $illness)
                    <option value="{{ $illness->id }}">{{ $illness->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="medicine_id">رقم الدواء:</label>
                <select class="form-control" id="medicine_id" name="medicine_id" required>
                    @foreach($medicines as $medicine)
                    <option value="{{ $medicine->id }}">{{ $medicine->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">إنشاء</button>
            <a href="{{ route('preview-details.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>