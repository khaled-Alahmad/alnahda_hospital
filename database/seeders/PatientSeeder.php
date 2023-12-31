<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $patientsData = [
            [
                'user_id' => 1,
            ],
            [
                'user_id' => 2,
            ],
        ];

        foreach ($patientsData as $data) {
            Patient::create($data);
        }
    }
}
