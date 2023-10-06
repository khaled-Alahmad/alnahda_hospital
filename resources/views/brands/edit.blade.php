<x-app-layout>

    <div class="container">
        <h1>تعديل العلامة التجارية</h1>
        <form action="{{ route('brands.update', $brand->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">الاسم:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $brand->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">الوصف:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $brand->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">حفظ التعديلات</button>
            <a href="{{ route('brands.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>