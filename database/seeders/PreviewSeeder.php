<?php

namespace Database\Seeders;

use App\Models\Preview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // بيانات المعاينات التي تريد إدراجها
        $previewsData = [
            [
                'patient_id' => 1,
                'doctor_id' => 1,
                'status' => 'حجز',
                'preview_datetime' => '2023-10-15 14:30:00',
            ],
            [
                'patient_id' => 2,
                'doctor_id' => 2,
                'status' => 'تمت المعاينة',
                'preview_datetime' => '2023-10-16 14:30:00',
            ],
        ];

        // حفظ البيانات في جدول المعاينات
        foreach ($previewsData as $data) {
            Preview::create($data);
        }
    }
}
