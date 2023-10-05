<x-app-layout>

    <div class="container">
        <h1>تعديل بيانات المريض</h1>
        <form action="{{ route('patients.update', $patient->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="user_id">المستخدم:</label>
                <select class="form-control" id="user_id" name="user_id">
                    @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $patient->user_id ? 'selected' : '' }}>{{ $user->firstName . " " . $user->lastName }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">تحديث</button>
            <a href="{{ route('patients.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>