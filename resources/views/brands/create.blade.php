<x-app-layout>

    <div class="container">
        <h1>إضافة علامة تجارية جديدة</h1>
        <form action="{{ route('brands.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">الاسم:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">الوصف:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">إضافة</button>
            <a href="{{ route('brands.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>