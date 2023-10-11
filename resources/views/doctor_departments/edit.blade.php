<x-app-layout>

    <div class="container">
        <h1>تحرير الفئة</h1>

        <form action="{{ route('doctor-departments.update', $department->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">العنوان:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $department->title }}" required>
            </div>
            <div class="form-group">
                <label for="name">الوصف:</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $department->description }}" required>
            </div>
            <button type="submit" class="btn btn-success">حفظ التغييرات</button>
            <a href="{{ route('categories.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>