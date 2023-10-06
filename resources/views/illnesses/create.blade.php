<x-app-layout>

    <div class="container">
        <h1>إضافة مرض جديد</h1>

        <form action="{{ route('illnesses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">اسم المرض:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-success">إضافة</button>
            <a href="{{ route('illnesses.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>