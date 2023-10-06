<x-app-layout>

    <div class="container">
        <h1>تحرير المرض</h1>

        <form action="{{ route('illnesses.update', $illness->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">اسم المرض:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $illness->name }}" required>
            </div>
            <button type="submit" class="btn btn-success">حفظ التغييرات</button>
            <a href="{{ route('illnesses.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>