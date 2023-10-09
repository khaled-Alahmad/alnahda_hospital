<x-app-layout>

    <div class="container">
        <h2>Edit User</h2>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" value="{{ $user->firstName }}" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" value="{{ $user->lastName }}" required>
            </div>
            <div class="form-group">
                <label for="father">Father</label>
                <input type="text" class="form-control" id="father" name="father" value="{{ $user->father }}" required>
            </div>
            <div class="form-group">
                <label for="mother">Mother</label>
                <input type="text" class="form-control" id="mother" name="mother" value="{{ $user->mother }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" required>
            </div>
            <div class="form-group">
                <label for="phone">العمر</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ $user->age }}" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="ذكر" {{ $user->gender == 'ذكر' ? 'selected' : '' }}>ذكر</option>
                    <option value="انثى" {{ $user->gender == 'انثى' ? 'selected' : '' }}>انثى</option>
                </select>
            </div>
            <!-- يمكنك إضافة المزيد من الحقول هنا -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</x-app-layout>