<x-app-layout>

    <div class="container">
        <h1>إضافة قسم طبي جديد</h1>

        <form action="{{ route('doctor-departments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">العنوان:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">الوصف:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-success">إضافة</button>
            <a href="{{ route('doctor-departments.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>