@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>إنشاء طابق جديد</h1>
        <form method="POST" action="{{ route('floors.store') }}">
            @csrf
            <div class="form-group">
                <label for="numberOfFloor">رقم الطابق:</label>
                <input type="text" class="form-control" id="numberOfFloor" name="numberOfFloor" required>
            </div>
            <div class="form-group">
                <label for="numberOfRooms">عدد الغرف:</label>
                <input type="text" class="form-control" id="numberOfRooms" name="numberOfRooms" required>
            </div>
            <button type="submit" class="btn btn-primary">إضافة</button>
        </form>
    </div>
@endsection
