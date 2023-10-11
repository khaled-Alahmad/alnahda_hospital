<x-app-layout>

    <div class="container">
        <h2>تقارير المعاينات للطبيب</h2>
        <form action="{{ route('doctor.reports') }}" method="POST" class="mb-3">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control" id="doctor_id" name="id" required placeholder="ضع معرف الطبيب هنا...">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">بحث</button>
                </div>
            </div>
        </form>


        @if(isset($doctor))
        <div class="container my-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">بيانات الطبيب:</h3>
                </div>
                <div class="card-body">
                    <p class="mb-1">الاسم: {{ $doctor->user->firstName.' '.$doctor->user->lastName }}</p>
                    <p class="mb-1">اسم الأب: {{ $doctor->user->father }}</p>
                    <p class="mb-3">اسم الأم: {{ $doctor->user->mother }}</p>


                    <h3>قائمة المعاينات:</h3>
                    @if(count($previews) > 0)
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>اسم المريض</th>
                                    <th>التاريخ</th>
                                    <th>المرض</th>
                                    <th>الحالة</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($previews as $preview)
                                <tr>
                                    <td>{{ $preview->patient->user->firstName.' '.$preview->patient->user->lastName }}</td>
                                    <td>{{ $preview->preview_datetime }}</td>
                                    <td>{{ $preview->illness->name }}</td>
                                    <td>{{ $preview->status }}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p>لا توجد معاينات متاحة لهذا الطبيب.</p>
                    @endif


                    <h3>قائمة العمليات:</h3>
                    @if(count($operations) > 0)
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>اسم المريض</th>
                                    <th>التاريخ</th>
                                    <th>الغرفة</th>
                                    <th>المعاينة</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($operations as $operation)
                                <tr>
                                    <td>{{ $operation->patient->user->firstName.' '.$operation->patient->user->lastName }}</td>
                                    <td>{{ $operation->date_time }}</td>
                                    <td>{{ $operation->doctor_id }}</td>
                                    <td>{{ $operation->patient_id }}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p>لا توجد عمليات متاحة لهذا الطبيب.</p>
                    @endif
                </div>
            </div>
        </div>
        @endif

    </div>
</x-app-layout>