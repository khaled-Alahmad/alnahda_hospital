<x-app-layout>

    <div class="container">
        <h1>تحرير الغرفة</h1>

        <form action="{{ route('rooms.update', $room->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="roomSize">حجم الغرفة:</label>
                <input type="text" class="form-control" id="roomSize" name="roomSize" value="{{ $room->roomSize }}" required>
            </div>
            <div class="form-group">
                <label for="floor_id">الطابق:</label>
                <select class="form-control" id="floor_id" name="floor_id" required>
                    @foreach($floors as $floor)
                    <option value="{{ $floor->id }}" {{ $floor->id == $room->floor_id ? 'selected' : '' }}>{{ $floor->numberOfFloor }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-warning">حفظ التغييرات</button>
            <a href="{{ route('rooms.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>