@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>تحرير الطابق</h1>
        <form method="POST" action="{{ route('floors.update', $floor->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="numberOfFloor">رقم الطابق:</label>
                <input type="text" class="form-control" id="numberOfFloor" name="numberOfFloor" value="{{ $floor->numberOfFloor }}" required>
            </div>
            <div class="form-group">
                <label for="numberOfRooms">عدد الغرف:</label>
                <input type="text" class="form-control" id="numberOfRooms" name="numberOfRooms" value="{{ $floor->numberOfRooms }}" required>
            </div>
            <button type="submit" class="btn btn-primary">تحديث</button>
        </form>
    </div>
@endsection
