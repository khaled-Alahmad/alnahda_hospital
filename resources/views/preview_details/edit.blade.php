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
                <label for="illness_id">نوع المرض:</label>
                <select class="form-control" id="illness_id" name="illness_id" required>
                    @foreach($illnesses as $illness)
                    <option value="{{ $illness->id }}" {{ $illness->id == $previewDetail->illness_id ? 'selected' : '' }}>{{ $illness->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">تحديث</button>
            <a href="{{ route('preview-details.index') }}" class="btn btn-secondary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>