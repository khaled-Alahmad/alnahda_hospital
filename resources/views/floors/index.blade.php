@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('floors.create') }}" class="btn btn-primary">اضافة طابق</a>
        <h1>قائمة الأدوار</h1>
        <!-- عرض القائمة الجدولية -->
        <!-- نموذج البحث -->
        <form method="GET" action="{{ route('floors.search') }}" class="form-inline">
            @csrf
            <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="ابحث عن رقم الطابق">
            </div>
            <button type="submit" class="btn btn-primary">بحث</button>
        </form>
        <table class="table">
            <thead>
            <tr>
                <th>رقم الطابق</th>
                <th>عدد الغرف</th>
                <th>خيارات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($floors as $floor)
                <tr>
                    <td>{{ $floor->numberOfFloor }}</td>
                    <td>{{ $floor->numberOfRooms }}</td>
                    <td>
                        <a href="{{ route('floors.show', $floor->id) }}" class="btn btn-primary">عرض</a>
                        <a href="{{ route('floors.edit', $floor->id) }}" class="btn btn-warning">تحرير</a>
                        <!-- يمكنك إضافة زر الحذف هنا -->
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>


    </div>
@endsection
