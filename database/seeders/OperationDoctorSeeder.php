<?php

namespace Database\Seeders;

use App\Models\OperationDoctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OperationDoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // بيانات الأمثلة
        $operationData = [
            [
                'doctor_id' => 1,
                'operation_id' => 1,
            ],
            [
                'doctor_id' => 2,
                'operation_id' => 1,
            ],
        ];
        foreach ($operationData as $operation) {
            OperationDoctor::create($operation);
        }
    }
}
