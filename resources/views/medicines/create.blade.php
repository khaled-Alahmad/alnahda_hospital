<x-app-layout>

    <div class="container">
        <h1>إضافة دواء جديد</h1>

        <form action="{{ route('medicines.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">الاسم:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="category_id">الفئة:</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="brand_id">العلامة التجارية:</label>
                <select class="form-control" id="brand_id" name="brand_id" required>
                    @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="price">السعر:</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
            <button type="submit" class="btn btn-success">إضافة</button>
            <a href="{{ route('medicines.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>