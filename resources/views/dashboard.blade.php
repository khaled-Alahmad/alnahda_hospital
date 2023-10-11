<x-app-layout>
    <div class="col-md-12 grid-margin transparent">
        <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-tale">
                    <div class="card-body">
                        <p class="mb-4">عدد المرضى</p>
                        <p class="fs-30 mb-2">{{$countPatient}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                    <div class="card-body">
                        <p class="mb-4">عدد الأطباء</p>
                        <p class="fs-30 mb-2">{{$countDoctor}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                    <div class="card-body">
                        <p class="mb-4">عدد المعاينات</p>
                        <p class="fs-30 mb-2">{{$countPreview}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-tale">
                    <div class="card-body">
                        <p class="mb-4">عدد العمليات</p>
                        <p class="fs-30 mb-2">{{$countOperation}}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>