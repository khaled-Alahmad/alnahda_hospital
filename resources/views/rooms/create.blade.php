@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>إضافة غرفة جديدة</h1>

        <form action="{{ route('rooms.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="roomSize">حجم الغرفة:</label>
                <input type="text" class="form-control" id="roomSize" name="roomSize" required>
            </div>
            <div class="form-group">
                <label for="floor_id">الطابق:</label>
                <select class="form-control" id="floor_id" name="floor_id" required>
                    @foreach($floors as $floor)
                        <option value="{{ $floor->id }}">{{ $floor->numberOfFloor }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">إضافة</button>
            <a href="{{ route('rooms.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
@endsection
