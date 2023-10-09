<x-app-layout>

    <div class="container">
        <h1>إنشاء فئة جديدة</h1>

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">الاسم:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-success">إنشاء</button>
            <a href="{{ route('categories.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>