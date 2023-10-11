<x-app-layout>

    <div class="container">
        <h2>تقارير المعاينات للمريض</h2>
        <form action="{{ route('patient.reports') }}" method="POST" class="mb-3">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control" id="patient_id" name="id" required>
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">بحث</button>
                </div>
            </div>
        </form>


        @if(isset($patient))
        <div class="container my-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">بيانات المريض:</h3>
                </div>
                <div class="card-body">
                    <p class="mb-1">الاسم: {{ $patient->user->firstName.' '.$patient->user->lastName }}</p>
                    <p class="mb-1">اسم الأب: {{ $patient->user->father }}</p>
                    <p class="mb-3">اسم الأم: {{ $patient->user->mother }}</p>

                    <!-- يمكنك عرض المزيد من تفاصيل المريض هنا -->

                    <h3>قائمة المعاينات:</h3>
                    @if(count($appointments) > 0)
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>اسم الدكتور</th>
                                    <th>التاريخ</th>
                                    <th>المرض</th>
                                    <th>الحالة</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appointments as $appointment)
                                <tr>
                                    <td>{{ $appointment->doctor->user->firstName.' '.$appointment->doctor->user->lastName }}</td>
                                    <td>{{ $appointment->preview_datetime }}</td>
                                    <td>{{ $appointment->illness->name }}</td>
                                    <td>{{ $appointment->status }}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p>لا توجد معاينات متاحة لهذا المريض.</p>
                    @endif
                </div>
            </div>
        </div>
        @endif

    </div>
</x-app-layout>