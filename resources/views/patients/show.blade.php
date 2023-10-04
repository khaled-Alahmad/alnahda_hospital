@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>تفاصيل المريض</h1>
        <p><strong>المستخدم:</strong> {{ $patient->user_id }}</p>
        <a href="{{ route('patients.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
    </div>
@endsection
