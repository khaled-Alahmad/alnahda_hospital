<x-app-layout>

    <div class="container">
        <h2>تقارير المعاينات للمريض</h2>

        <form action="{{ route('patient.reports') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="patient_id">ID المريض:</label>
                <input type="text" class="form-control" id="patient_id" name="id" required>
            </div>
            <button type="submit" class="btn btn-primary">بحث</button>
        </form>

        @if(isset($patient))
        <h3>بيانات المريض:</h3>
        <p>الاسم: {{ $patient->user->firstName.' '.$patient->user->lastName }}</p>
        <p>اسم الأب: {{ $patient->user->father }}</p>
        <p>اسم الأم: {{ $patient->user->mother }}</p>

        <!-- يمكنك عرض المزيد من تفاصيل المريض هنا -->

        <h3>قائمة المعاينات:</h3>
        @if(count($appointments) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>التاريخ</th>
                    <th>الوصف</th>
                    <!-- يمكنك إضافة المزيد من الأعمدة حسب الحاجة -->
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->id }}</td>
                    <td>{{ $appointment->doctor->user->firstName }}</td>
                    <!-- يمكنك إضافة المزيد من الأعمدة حسب الحاجة -->
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>لا توجد معاينات متاحة لهذا المريض.</p>
        @endif
        @endif
    </div>
</x-app-layout>