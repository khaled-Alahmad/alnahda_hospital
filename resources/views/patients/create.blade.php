@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>إنشاء مريض جديد</h1>
        <form action="{{ route('patients.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="user_id">المستخدم:</label>
                <select class="form-control" id="user_id" name="user_id">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->firstName . " " . $user->lastName }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">إضافة</button>
            <a href="{{ route('patients.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
@endsection
