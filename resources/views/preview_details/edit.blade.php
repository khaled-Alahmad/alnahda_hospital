<x-app-layout>

    <div class="container">
        <h1>تعديل تفصيل المعاينة</h1>
        <form action="{{ route('preview-details.update', $previewDetail->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="preview_id">رقم المعاينة:</label>
                <input type="text" class="form-control" id="preview_id" name="preview_id" value="{{ $previewDetail->preview_id }}" required>
            </div>
            <div class="form-group">
                <label for="medicine_id">رقم الدواء:</label>
                <input type="text" class="form-control" id="medicine_id" name="medicine_id" value="{{ $previewDetail->medicine_id }}" required>
            </div>
            <button type="submit" class="btn btn-primary">تحديث</button>
            <a href="{{ route('preview-details.index') }}" class="btn btn-secondary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>