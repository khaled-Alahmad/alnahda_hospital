<?php

namespace Database\Seeders;

use App\Models\Operation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $operationData = [
            [
                'doctor_id' => 1,
                'patient_id' => 1,
                'preview_id' => 1,
                'room_id' => 1,
                'date_time' => now()
            ], [
                'doctor_id' => 2,
                'patient_id' => 2,
                'preview_id' => 2,
                'room_id' => 2,
                'date_time' => now()->addHours(2),
            ]
        ];
        foreach ($operationData as $operation) {
            Operation::create($operation);
        }
    }
}
