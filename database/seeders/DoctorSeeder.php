<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctorsData = [
            [
                'user_id' => 3,
                'doctor_department_id' => 1,
                'specialist' => 'طبيب باطنية',
            ],
            [
                'user_id' => 4,
                'doctor_department_id' => 2,
                'specialist' => 'جراح قلب',
            ],
            // يمكنك إضافة المزيد من الأطباء هنا
        ];

        // إضافة البيانات إلى جدول الأطباء
        foreach ($doctorsData as $data) {
            Doctor::create($data);
        }
    }
}
