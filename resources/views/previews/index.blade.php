<x-app-layout>

    <div class="container">
        <h1>قائمة المعاينات</h1>
        <form action="{{ route('previews.search') }}" method="GET" class="mb-3">
            <div class="input-group">

                <select class="form-control" id="patient_id" name="patient_id" required>
                    @foreach($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->user->firstName }}</option>
                    @endforeach
                </select>


                <select class="form-control" id="doctor_id" name="doctor_id" required>
                    @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->user->firstName }}</option>
                    @endforeach
                </select>

                <select class="form-control" id="illness_id" name="illness_id" required>
                    @foreach($illnesses as $illness)
                    <option value="{{ $illness->id }}">{{ $illness->name }}</option>
                    @endforeach
                </select>
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">بحث</button>
                </div>
            </div>
        </form>




        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم المريض</th>
                    <th scope="col">اسم الطبيب</th>
                    <th scope="col">المرض</th>

                    <th scope="col">نوع المعاينة</th>
                    <th scope="col">التاريخ والوقت</th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($previews as $preview)
                <tr>
                    <th scope="row">{{ $preview->id }}</th>
                    <td>{{ $preview->patient->user->firstName. ' '.$preview->patient->user->firstName }}</td>
                    <td>{{ $preview->doctor->user->firstName. ' '.$preview->doctor->user->firstName }}</td>
                    <td>{{ $preview->illness->name }}</td>

                    <td>{{ $preview->status }}</td>
                    <td>{{ $preview->preview_datetime }}</td>
                    <td>
                        @can('isAdmin')
                        <a href="{{ route('previews.show', $preview->id) }}" class="btn btn-primary">عرض</a>
                        <a href="{{ route('previews.edit', $preview->id) }}" class="btn btn-warning">تحرير</a>
                        <form action="{{ route('previews.destroy', $preview->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذه المعاينة؟')">حذف</button>
                        </form>
                        @endcan
                        @can('isDoctor')
                        <a href="{{ route('previews.show', $preview->id) }}" class="btn btn-primary">عرض</a>
                        <a href="{{ route('previews.edit', $preview->id) }}" class="btn btn-warning">تحرير</a>
                        <form action="{{ route('previews.destroy', $preview->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذه المعاينة؟')">حذف</button>
                        </form>
                        @endcan
                        @can('isPatient')
                        ليس لديك صلاحية لأي إجراء
                        @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>