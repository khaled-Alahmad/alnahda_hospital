@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>قائمة الأقسام الطبية</h1>

        <a href="{{ route('doctor-departments.create') }}" class="btn btn-success mb-3">إضافة قسم طبي جديد</a>

        <form action="{{ route('doctor-departments.search') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="البحث عن قسم طبي">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">بحث</button>
                </div>
            </div>
        </form>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">العنوان</th>
                <th scope="col">الوصف</th>
                <th scope="col">الإجراءات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($departments as $department)
                <tr>
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->title }}</td>
                    <td>{{ $department->description }}</td>
                    <td>
                        <a href="{{ route('doctor-departments.show', $department->id) }}" class="btn btn-primary">عرض</a>
                        <a href="{{ route('doctor-departments.edit', $department->id) }}" class="btn btn-warning">تحرير</a>
                        <form action="{{ route('doctor-departments.destroy', $department->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا القسم؟')">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
